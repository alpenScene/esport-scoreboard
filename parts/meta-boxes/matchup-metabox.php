<?php

/*
  Title: Matchup
  Post Type: essb_matchup
 */

piklist('field', array(
	'type' => 'group'
	, 'label' => __('Matchup Info', 'esport_scoreboard')
	, 'fields' => array(
		array(
			'type' => 'select'
			, 'field' => 'matchup_team1'
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
			, 'field' => 'matchup_score1'
			, 'label' => __('Score 1', 'esport_scoreboard')
			, 'columns' => 1
			, 'attributes' => array(
				'min' => 0,
				'max' => 16
			)
			, 'conditions' => array(
				array(
					'field' => 'matchup_status'
					, 'value' => 'closed'
				)
			)
		)
		, array(
			'type' => 'number'
			, 'field' => 'matchup_score2'
			, 'label' => __('Score 2', 'esport_scoreboard')
			, 'columns' => 1
			, 'attributes' => array(
				'min' => 0,
				'max' => 16
			)
			, 'conditions' => array(
				array(
					'field' => 'matchup_status'
					, 'value' => 'closed'
				)
			)
		)
		, array(
			'type' => 'select'
			, 'field' => 'matchup_team2'
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
	, 'field' => 'matchup_status'
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
	, 'field' => 'matchup_date'
	, 'label' => __('Date', 'essb_scoreboard')
	, 'attributes' => array(
		'class' => 'essb-datetime'
	)
));


piklist('field', array(
	'type' => 'text'
	, 'field' => 'matchup_url'
	, 'label' => __('Matchlink', 'essb_scoreboard')
));


piklist('field', array(
	'type' => 'text'
	, 'field' => 'matchup_stream'
	, 'label' => __('Streamurl', 'essb_scoreboard')
));

