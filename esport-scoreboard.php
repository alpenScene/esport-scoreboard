<?php
/*
Plugin Name: eSports ScoreBoard
Plugin URI: http://www.alpenscene.at
Description: Create and manage teams and their matchups and view their results.
Version: 0.1
Author: Mario Neuhold
Plugin Type: Piklist
License: GPL2
*/

require_once 'includes/essb_post_types.php';

if( ! class_exists('ScoreBoard') ) :
	
class eSportScoreBoard {
	
	function __construct() {
		
		essb_post_types();
		$this->autofill_matchup_title();
		
		add_action( 'admin_enqueue_scripts', function() {
			wp_enqueue_style( 'essb_datetime_css', plugins_url('/resources/lib/xdan-datetimepicker/jquery.datetimepicker.css', __FILE__),false,'0.2','all');
			// datetimepicker.full.min is required to prevent i.dateformat error
			wp_enqueue_script( 'essb_datetime_js', plugins_url('/resources/lib/xdan-datetimepicker/jquery.datetimepicker.full.min.js', __FILE__), array( 'jquery' ), '20161129', true);
		} );
		add_action( 'wp_enqueue_scripts', function() {
			wp_enqueue_style( 'essb_css', plugins_url('/resources/css/esport-scoreboard.css', __FILE__),false,'0.1','all');
			wp_enqueue_script( 'essb_admin_js', plugins_url('/resources/js/essb.js', __FILE__), array( 'jquery' ), '20161129', true);
		} );
	}
	
	
	/**
	 * Calls a rest-api for getting all countries for an area (continent)
	 * @see https://restcountries.eu/
	 * @param string $area Default 'Europe'
	 * @return array $countriesByArea ['at' => 'Austria', 'de' => 'Germany']
	 */	
	public static function getCountries($area = 'Europe') {
		
		$countryurl = 'https://restcountries.eu/rest/v1/all';
		// Initialize a single cURL handle for use of each online-check
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
				
		curl_setopt_array($ch, array(
		   CURLOPT_RETURNTRANSFER => true,
		   CURLOPT_URL => $countryurl
		));

		$countries = json_decode(curl_exec($ch));
		
		// Close the curl request
		curl_close($ch);
		foreach ($countries as $country) {			
			if ($country->region === $area) {
				$countriesByArea[strtolower($country->alpha2Code)] = $country->name;
			}
		}
		
		return $countriesByArea;
			
	}
	
	/**
	 * Hooking into title_save_pre for our Match CPT so it get's a proper name automatically
	 * @see https://www.iftekhar.net/auto-generate-post-title-for-posts-or-custom-post-type-in-wordpress/
	 * @todo disable title input in dashboard
	 */
	function autofill_matchup_title() {
		
		add_filter('title_save_pre', function($title) {
				global $post;
				if (isset($post->ID)) {
					if (empty($_POST['post_title']) && get_post_type($post->ID) == 'essb_matchup') {
						// get the current post ID number
						$id = get_the_ID();
						// add ID number with order strong
						$title = $id . '-' . get_post(get_post_meta($id, 'matchup_team1', true))->team_tag . '-vs-' . get_post(get_post_meta($id, 'matchup_team1', true))->team_tag;
					}
				}
				return $title;
			});
		}
}
	
endif;



global $scoreboard;

if( !isset($scoreboard) ) {

	$scoreboard = new eSportScoreBoard();

}



