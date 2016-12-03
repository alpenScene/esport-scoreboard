<?php

/*
  Title: Match
  Post Type: essb_match
 */

piklist('field', array(
	'type' => 'group'
	, 'label' => __('Match Info', 'esport_scoreboard')
	, 'fields' => array(
		array(
			'type' => 'select'
			, 'field' => 'match_team1'
			, 'label' => __('Team 1', 'esport_scoreboard')
			, 'columns' => 3
			, 'choices' => array('' => 'Select a Team') + piklist(get_posts(array(
				'numberposts' => -1
				, 'post_type' => 'essb_team'
					)), array('ID', 'post_title'))
			, 'relate' => array('scope' => 'post')
		)
		, array(
			'type' => 'number'
			, 'field' => 'match_score1'
			, 'label' => __('Score 1', 'esport_scoreboard')
			, 'columns' => 1
			, 'attributes' => array(
				'min' => 0,
				'max' => 16
			)
			, 'conditions' => array(
				array(
					'field' => 'match_status'
					, 'value' => 'closed'
				)
			)
		)
		, array(
			'type' => 'number'
			, 'field' => 'match_score2'
			, 'label' => __('Score 2', 'esport_scoreboard')
			, 'columns' => 1
			, 'attributes' => array(
				'min' => 0,
				'max' => 16
			)
			, 'conditions' => array(
				array(
					'field' => 'match_status'
					, 'value' => 'closed'
				)
			)
		)
		, array(
			'type' => 'select'
			, 'field' => 'match_team2'
			, 'label' => __('Team 2', 'esport_scoreboard')
			, 'columns' => 3
			, 'choices' => array('' => 'Select a Team') + piklist(get_posts(array(
				'numberposts' => -1
				, 'post_type' => 'essb_team'
					)), array('ID', 'post_title'))
			, 'relate' => array('scope' => 'post')
		))
));



piklist('field', array(
	'type' => 'select'
	, 'field' => 'match_status'
	, 'label' => __('Status', 'essb_scoreboard')
	, 'description' => __('Is it upcoming or already over?', 'essb_scoreboard')
	, 'choices' => array(
		'open' => __('Open', 'essb_scoreboard')
		, 'closed' => __('Closed', 'essb_scoreboard')
	)
	, 'value' => 'open'
));


piklist('field', array(
	'type' => 'text'
	, 'field' => 'match_date'
	, 'label' => __('Date', 'essb_scoreboard')
	, 'attributes' => array(
		'class' => 'essb-datetime'
	)
));


piklist('field', array(
	'type' => 'text'
	, 'field' => 'match_stream'
	, 'label' => __('Stream', 'essb_scoreboard')
));



piklist('field', array(
	'type' => 'group'
	, 'field' => 'match_links'
	, 'label' => __('Related Links', 'esport_scoreboard')
	, 'add_more' => true
	, 'fields' => array(
		array(
			'type' => 'text'
			, 'field' => 'match_link_url'
			, 'label' => __('URL', 'esport_scoreboard')
			, 'columns' => 5
		)
		, array(
			'type' => 'text'
			, 'field' => 'match_link_name'
			, 'label' => __('Name', 'esport_scoreboard')
			, 'columns' => 5
		)
	)
));