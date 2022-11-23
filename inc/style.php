<?php 

add_action( 'wp_enqueue_scripts', 'child_theme_enqueue_styles' );

function child_theme_enqueue_styles() {
	
    $parenthandle = 'bauen-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.
	
    $theme        = wp_get_theme();

	wp_enqueue_style( $parenthandle,
		get_template_directory_uri() . '/style.css',
		array(),  // If the parent theme code has a dependency, copy it to here.
		$theme->parent()->get( 'Version' )
	);

    wp_enqueue_style( 'ur_style', get_stylesheet_directory_uri() . '/assets/styles.css', array( $parenthandle ), $theme->get( 'Version' ));

    wp_enqueue_script( 'ur_scripts', get_stylesheet_directory_uri() . '/assets/scripts.js', array('jquery'), null, true );
    
}