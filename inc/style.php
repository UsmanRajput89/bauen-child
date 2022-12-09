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

    wp_enqueue_script( 'ur_jquery_steps', get_stylesheet_directory_uri() . '/assets/jquery.steps.min.js', array('jquery'), null, true );
    
    wp_enqueue_script( 'ur_scripts', get_stylesheet_directory_uri() . '/assets/scripts.js', array('jquery'), null, true );
    // wp_enqueue_script( 'smtp_js', 'https://smtpjs.com/v3/smtp.js', array('jquery'), null, true );

    // wp_enqueue_script( 'ajax_custom_script',  get_template_directory_uri() . '/assets/js/ajax.js', array('jquery') );
    wp_localize_script( 'ur_scripts', 'frontendajax', array( 
        'ajaxurl' => admin_url( 'admin-ajax.php' ),
        'security' => wp_create_nonce( 'file_upload' ),
    ));
    
}

