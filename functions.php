<?php
	
	// Add RSS links to <head> section
	add_theme_support( 'automatic-feed-links' );
	
	// Load jQuery
	if ( !is_admin() ) {
	   wp_deregister_script( 'jquery' );
	   wp_register_script( 'jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js" ), false);
	   wp_enqueue_script( 'jquery' );
	}
	
	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action( 'wp_head', 'rsd_link' );
    	remove_action( 'wp_head', 'wlwmanifest_link' );
    }
    add_action( 'init', 'removeHeadLinks' );
    remove_action( 'wp_head', 'wp_generator' );
    
    if ( function_exists( 'register_sidebar' ) ) {
    	register_sidebar(array(
    		'name' => 'Sidebar Widgets',
    		'id'   => 'sidebar-widgets',
    		'description'   => 'These are widgets for the sidebar.',
    		'before_widget' => '<section id="%1$s" class="%2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<header><h3 class="title">',
            'after_title'   => '</h3></header>'
    	));
    }

?>