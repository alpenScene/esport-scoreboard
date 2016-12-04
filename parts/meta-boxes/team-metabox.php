<?php

/*
  Title: Team
  Post Type: essb_team
 */

piklist('field', array(
	'type' => 'group'
	, 'label' => __('Team Info', 'esport_scoreboard')
	, 'fields' => array(
		array(
			'type' => 'file'
			, 'field' => 'team_logo'
//			, 'scope' => 'post_meta'
			, 'label' => __('Team Logo', 'esport_scoreboard')
			, 'columns' => 3
			, 'options' => array(
				'modal_title' => __('Add File(s)', 'esport_scoreboard')
				, 'button' => __('Add', 'esport_scoreboard')
			)
		)
		, array(
			'type' => 'text'
			, 'field' => 'team_tag'
			, 'label' => __('Clantag', 'esport_scoreboard')
			, 'columns' => 3
		)
		, array(
			'type' => 'select'
			, 'field' => 'team_country'
			, 'label' => __('Country', 'esport_scoreboard')
			, 'columns' => 3
			, 'value' => 'at'
			, 'choices' => eSportScoreBoard::getCountries()
		)
		, array(
			'type' => 'text'
			, 'field' => 'team_url'
			, 'label' => __('Website', 'esport_scoreboard')
			, 'columns' => 3
			, 'validate' => array(
				array('type' => 'url')
			)
		)
	)
));

piklist('field', array(
	'type' => 'group'
	, 'field' => 'team_lineup'
	, 'label' => __('Lineup', 'esport_scoreboard')
	, 'add_more' => true
	, 'fields' => array(
		array(
			'type' => 'text'
			, 'field' => 'team_player'
			, 'label' => __('Player', 'esport_scoreboard')
			, 'columns' => 3
		)
		, array(
			'type' => 'checkbox'
			, 'field' => 'team_player_roles'
			, 'label' => __('Player Roles', 'esport_scoreboard')
			, 'columns' => 4
			, 'value' => 'player'
			, 'choices' => array(
				'player' => __('Player', 'esport_scoreboard')
				, 'captain' => __('Team Captain', 'esport_scoreboard')
				, 'orga' => __('Orga', 'esport_scoreboard')
				, 'caller' => __('Caller', 'esport_scoreboard')
			)
		)
	)
));

//piklist('field', array(
//	'type' => 'select'
//	, 'field' => 'team_owner'
//	, 'label' => __('Team owner', 'esport_scoreboard')
//	, 'description' => __('Select the user who will be able to edit this teams information', 'esport_scoreboard')
//	, 'columns' => 6
//	, 'choices' => piklist(
//			get_users(
//					array(
//		'orderby' => 'display_name'
//		, 'order' => 'asc'
//					)
//					, 'objects'
//			)
//			, array(
//		'ID'
//		, 'display_name'
//			)
//	)
//));
