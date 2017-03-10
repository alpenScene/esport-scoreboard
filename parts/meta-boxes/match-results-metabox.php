<?php

/*
  Title: Match Result Details
  Post Type: essb_match
  Order: 2
 */




//piklist('field', array(
//	'type' => 'group'
//	, 'field' => 'match_map_section'
//	, 'label' => __('Maps', 'esport_scoreboard')
//	, 'add_more' => true
//	, 'fields' => array(
//		array(
//			'type' => 'text'
//			, 'field' => 'match_map_name'
//			, 'label' => __('Map', 'esport_scoreboard')
//			, 'columns' => 3
//		)
//		, array(
//			'type' => 'number'
//			, 'field' => 'match_map_overall_score1'
//			, 'label' => __('Map overall score Team 1', 'esport_scoreboard')
//			, 'columns' => 2
//			, 'attributes' => array(
//				'min' => 0,
//				'max' => 999
//			)
//		)
//		, array(
//			'type' => 'number'
//			, 'field' => 'match_map_overall_score2'
//			, 'label' => __('Map overall score Team 2', 'esport_scoreboard')
//			, 'columns' => 2
//			, 'attributes' => array(
//				'min' => 0,
//				'max' => 99
//			)
//		)
//		, array(
//			'type' => 'group'
//			, 'field' => 'match_map_details'
//			, 'label' => __('Map details', 'esport_scoreboard')
////			, 'add_more' => true
//			, 'fields' => array(
//				array(
//					'type' => 'group'
//					, 'label' => 'First half'
//					, 'field' => 'match_map_details_1st'
////					, 'columns' => 12
//					, 'fields' => array(
//						array(
//							'type' => 'radio'
//							, 'field' => 'match_map_1st_side1'
//							, 'label' => 'Team 1 side'
//							, 'choices' => array(
//								'ct' => 'CT'
//								,'t' => 'T'
//							)
//							, 'columns' => 2
//						)
//						, array(
//							'type' => 'number'
//							, 'field' => 'match_map_1st_score1'
//							, 'label' => 'Team 1 score'
//							, 'columns' => 2
//							, 'attributes' => array(
//								'min' => 0,
//								'max' => 16
//							)
//						)
//						, array(
//							'type' => 'number'
//							, 'field' => 'match_map_1st_score2'
//							, 'label' => 'Team 2 score'
//							, 'columns' => 2
//							, 'attributes' => array(
//								'min' => 0,
//								'max' => 16
//							)
//						)
//						, array(
//							'type' => 'radio'
//							, 'field' => 'match_map_1st_side2'
//							, 'label' => 'Team 2 side'
//							, 'choices' => array(
//								'ct' => 'CT'
//								,'t' => 'T'
//							)
//							, 'columns' => 6
//						)
//					)
//				)
//				, array(
//					'type' => 'group'
//					, 'label' => 'Second half'
//					, 'field' => 'match_map_details_2nd'
////					, 'columns' => 12
//					, 'fields' => array(
//						array(
//							'type' => 'radio'
//							, 'field' => 'match_map_2nd_side1'
//							, 'label' => 'Team 1 side'
//							, 'choices' => array(
//								'ct' => 'CT'
//								,'t' => 'T'
//							)
//							, 'columns' => 2
//						)
//						, array(
//							'type' => 'number'
//							, 'field' => 'match_map_2nd_score1'
//							, 'label' => 'Team 1 score'
//							, 'columns' => 2
//							, 'attributes' => array(
//								'min' => 0,
//								'max' => 16
//							)
//						)
//						, array(
//							'type' => 'number'
//							, 'field' => 'match_map_2nd_score2'
//							, 'label' => 'Team 2 score'
//							, 'columns' => 2
//							, 'attributes' => array(
//								'min' => 0,
//								'max' => 16
//							)
//						)
//						, array(
//							'type' => 'radio'
//							, 'field' => 'match_map_2nd_side2'
//							, 'label' => 'Team 2 side'
//							, 'choices' => array(
//								'ct' => 'CT'
//								,'t' => 'T'
//							)
//							, 'columns' => 6
//						)
//					)
//				)
//			)
//		)
//	)
//));


//piklist('field', array(
//	'type' => 'group'
//	, 'field' => 'match_map_section'
//	, 'label' => __('Maps', 'esport_scoreboard')
//	, 'add_more' => true
//	, 'fields' => array(
//		array(
//			'type' => 'text'
//			, 'field' => 'match_map_name'
//			, 'label' => __('Map', 'esport_scoreboard')
//			, 'columns' => 12
//		)
//		, array(
//			'type' => 'group'
//			, 'field' => 'match_map_details'
////			, 'label' => __('Map details', 'esport_scoreboard')
//			, 'add_more' => true
//			, 'fields' => array(
//				array(
//					'type' => 'group'
//					, 'field' => 'match_map_details_1st'
//					, 'label' => 'First half'
//					, 'columns' => 12
//					, 'fields' => array(
//						array(
//							'type' => 'radio'
//							, 'field' => 'match_map_1st_side1'
//							, 'label' => 'Team 1 side'
//							, 'choices' => array(
//								'ct' => 'CT'
//								,'t' => 'T'
//							)
//							, 'columns' => 12
//						)
//					)
//				)
//				, array(
//					'type' => 'group'
//					, 'label' => 'Second half'
//					, 'field' => 'match_map_details_2nd'
////					, 'columns' => 12
//					, 'fields' => array(
//						array(
//							'type' => 'radio'
//							, 'field' => 'match_map_2nd_side1'
//							, 'label' => 'Team 1 side'
//							, 'choices' => array(
//								'ct' => 'CT'
//								,'t' => 'T'
//							)
//							, 'columns' => 12
//						)
//					)
//				)
//			)
//		)
//	)
//));

//piklist('field', 
//	array(
//		'type' => 'html'
//		, 'label' => 'Maps, rounds, overtimes, ...'
//		, 'value' => '&nbsp	'
//	)
//);
//
//piklist('field', array(
//	'type' => 'group'
//	, 'field' => 'map_details_section'
//	, 'label' => __('Map Details')
//	, 'description' => __('Add one more more maps with regular results and '
//			. 'overtimes also.<br>'
//			. 'When using overtimes, be sure to only add an even number of '
//			. 'halfs: 2,4,6,...', 'esport_scoreboard')
//	, 'add_more' => true
//	, 'fields' => array(
//		array(
//			'type' => 'text'
//			, 'field' => 'map_name'
//			, 'label' => __('Map name')
//			, 'columns' => 3
//		)
//		, array(
//			'type' => 'number'
//			, 'field' => 'map_overall-score1'
//			, 'label' => __('Map overall score Team 1')
//			, 'columns' => 2
//		)
//		, array(
//			'type' => 'number'
//			, 'field' => 'map_overall-score2'
//			, 'label' => __('Map overall score Team 2')
//			, 'columns' => 2
//		)
//		, array(
//			'type' => 'group'
//			, 'field' => 'map_regular_1st'
//			, 'label' => 'Regular 1st half'
//			, 'fields' => array(
//				array(
//					'type' => 'radio'
//					, 'field' => 'map_half_side1'
//					, 'label' => __('Team1 side')
//					, 'columns' => 2
//					, 'choices' => array(
//						'ct' => 'CT'
//						, 't' => 'T'
//					)
//				)
//				, array(
//					'type' => 'number'
//					, 'field' => 'map_half_score1'
//					, 'label' => __('Team1 score')
//					, 'columns' => 2
//				)
//				, array(
//					'type' => 'number'
//					, 'field' => 'map_half_score2'
//					, 'label' => __('Team2 score')
//					, 'columns' => 2
//				)
//				, array(
//					'type' => 'radio'
//					, 'field' => 'map_half_side2'
//					, 'label' => __('Team2 side')
//					, 'columns' => 6
//					, 'choices' => array(
//						'ct' => 'CT'
//						, 't' => 'T'
//					)
//				)
//			)
//		)
//		, array(
//			'type' => 'group'
//			, 'field' => 'map_regular_2nd'
//			, 'label' => 'Regular 2nd half'
//			, 'fields' => array(
//				array(
//					'type' => 'radio'
//					, 'field' => 'map_half_side1'
//					, 'label' => __('Team1 side')
//					, 'columns' => 2
//					, 'choices' => array(
//						'ct' => 'CT'
//						, 't' => 'T'
//					)
//				)
//				, array(
//					'type' => 'number'
//					, 'field' => 'map_half_score1'
//					, 'label' => __('Team1 score')
//					, 'columns' => 2
//				)
//				, array(
//					'type' => 'number'
//					, 'field' => 'map_half_score2'
//					, 'label' => __('Team2 score')
//					, 'columns' => 2
//				)
//				, array(
//					'type' => 'radio'
//					, 'field' => 'map_half_side2'
//					, 'label' => __('Team2 side')
//					, 'columns' => 6
//					, 'choices' => array(
//						'ct' => 'CT'
//						, 't' => 'T'
//					)
//				)
//			)
//		)
//		, array(
//			'type' => 'group'
//			, 'field' => 'map_overtimes'
//			, 'label' => 'Overtime halfs'
//			, 'add_more' => true
//			, 'fields' => array(
//				array(
//					'type' => 'radio'
//					, 'field' => 'map_half_side1'
//					, 'label' => __('Team1 side')
//					, 'columns' => 2
//					, 'choices' => array(
//						'ct' => 'CT'
//						, 't' => 'T'
//					)
//				)
//				, array(
//					'type' => 'number'
//					, 'field' => 'map_half_score1'
//					, 'label' => __('Team1 score')
//					, 'columns' => 2
//				)
//				, array(
//					'type' => 'number'
//					, 'field' => 'map_half_score2'
//					, 'label' => __('Team2 score')
//					, 'columns' => 2
//				)
//				, array(
//					'type' => 'radio'
//					, 'field' => 'map_half_side2'
//					, 'label' => __('Team2 side')
//					, 'columns' => 6
//					, 'choices' => array(
//						'ct' => 'CT'
//						, 't' => 'T'
//					)
//				)
//			)
//		)
//	)
//));






piklist('field', array(
	'type' => 'group'
	, 'field' => 'map_details_section'
	, 'label' => 'Map Details'
	, 'add_more' => true
	, 'fields' => array(
		array(
			'type' => 'text'
			, 'field' => 'map_name'
			, 'label' => 'Map name'
			, 'columns' => 3
		)
		, array(
			'type' => 'group'
			//, 'field' => 'map_results'
			, 'label' => 'Map Results'
			, 'fields' => array(
				array()
				,array(
					'type' => 'group'
					, 'field' => 'map_halves'
					, 'label' => 'Regular halves'
					, 'fields' => array(
						array(
							'type' => 'radio'
							, 'field' => 'map_regular_half1_side'
							, 'label' => 'Regular Half1 side'
							, 'choises' => array(
								'ct' => 'CT'
								, 't' => 'T'
							)
						)
						, array(
							'type' => 'text'
							, 'field' => 'map_regular_half1_score'
							, 'label' => 'Regular Half1 score'
						)
						, array(
							'type' => 'radio'
							, 'field' => 'map_regular_half2_side'
							, 'label' => 'Regular Half2 side'
							, 'choises' => array(
								'ct' => 'CT'
								, 't' => 'T'
							)
						)
						, array(
							'type' => 'text'
							, 'field' => 'map_regular_half2_score'
							, 'label' => 'Regular Half2 score'
						)
					)
				)
				, array(
					'type' => 'group'
					, 'field' => 'map_round_overtimes'
					, 'label' => 'Overtime halves'
					, 'add_more' => true
					, 'fields' => array(
						array(
							'type' => 'radio'
							, 'field' => 'map_round_overtime_side'
							, 'label' => 'Half side'
							, 'choises' => array(
								'ct' => 'CT'
								, 't' => 'T'
							)
						)
						, array(
							'type' => 'text'
							, 'field' => 'map_round_overtime_score'
							, 'label' => 'Half score'
						)
					)
				)
			)
		)
	)
));