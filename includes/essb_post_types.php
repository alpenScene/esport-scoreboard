<?php

function essb_post_types() {

	add_filter('piklist_post_types', 'register_essb_team');
	add_filter('piklist_post_types', 'register_essb_match');
}

function register_essb_team($post_types) {

	$post_types['essb_team'] = array(
		'labels' => piklist('post_type_labels', 'Team')
		, 'title' => __('Teamname', 'esport_scoreboard')
		, 'menu_icon' => 'dashicons-groups'
		, 'page_icon' => 'dashicons-groups'
		, 'supports' => array(
			'title'
		)
		, 'public' => true
		, 'admin_body_class' => array(
			'essb-team'
		)
		, 'has_archive' => true
		, 'rewrite' => array(
			'slug' => 'team'
		)
		, 'capability_type' => 'post'
		, 'edit_columns' => array(
			'title' => __('Team', 'esport_scoreboard')
//			, 'team_country' => __('Country!', 'esport_scoreboard')
		)
		, 'hide_meta_box' => array(
//				'slug'
//				, 'author'
		)
	);

	return $post_types;
}

function register_essb_match($post_types) {

	$post_types['essb_match'] = array(
		'labels' => piklist('post_type_labels', 'Match')
		, 'title' => __('Match', 'esport_scoreboard')
		, 'menu_icon' => 'dashicons-chart-line'
		, 'page_icon' => 'dashicons-chart-line'
		, 'supports' => array(
			'title'
		)
		, 'public' => true
		, 'admin_body_class' => array(
			'essb-match'
		)
		, 'has_archive' => true
		, 'rewrite' => array(
			'slug' => 'match'
		)
		, 'capability_type' => 'post'
		, 'edit_columns' => array(
			'title' => __('Match ID', 'esport_scoreboard')
		)
		, 'hide_meta_box' => array(
//				'slug'
//				, 'author'
		)
	);

	return $post_types;
}
