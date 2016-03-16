<?php
/*
	Plugin Name: CPT Plugin
	Author: Steve Ferrar
	Version: 1.0
*/

$cptPluginsInit = new cptPlugins();

class cptPlugins {

	function __construct() {
		add_action('init', array($this, 'cptInit'));
		add_theme_support('thumbnails');
		
	}
	
	function cptInit() {		
		
		register_post_type(
			'news',
			array(
				'labels' => array(
					'name' => 'News',
					'singular_name' => 'News'
				),
				'public' => true,
				'publicly_queryable' => true,
				'exclude_from_search' => true,
				'show_ui' => true,
				'query_var' => true,
				'rewrite' => true,
				'hierarchical' => false,
				'menu_position' => null,
				'has_archive' => true,
				'capability_type' => 'post'
			)
		);		
		
	}
};

?>