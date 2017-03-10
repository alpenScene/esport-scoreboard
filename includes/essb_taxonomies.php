<?php

add_filter('piklist_taxonomies', 'demo_type_tax');

function demo_type_tax($taxonomies) {
	$taxonomies[] = array(
		'post_type' => 'essb_match'
		, 'name' => 'essb_match_category'
		, 'show_admin_column' => true
		, 'configuration' => array(
			'hierarchical' => true
			, 'labels' => piklist('taxonomy_labels', __('Match Category', 'esport_scoreboard'))
			, 'hide_meta_box' => true
			, 'show_ui' => true
			, 'query_var' => true
			, 'rewrite' => array(
				'slug' => 'match-category'
			)
		)
	);
	return $taxonomies;
}
