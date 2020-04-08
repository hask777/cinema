<?php

/**
 * Enqueue scripts and styles.
 */
function cinema_scripts() {
    wp_enqueue_style( 'cinema-font-awesome', 'https://fonts.googleapis.com/css?family=Open+Sans:400,600%7CUbuntu:300,400,500,700');
    wp_enqueue_style( 'cinema-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap-reboot.min.css');
    wp_enqueue_style( 'cinema-bootstrap-grid', get_template_directory_uri() . '/assets/css/bootstrap-grid.min.css');

    wp_enqueue_style( 'cinema-owl', get_template_directory_uri() . '/assets/css/owl.carousel.min.css');

    wp_enqueue_style( 'cinema-mCustomScrollbar', get_template_directory_uri() . '/assets/css/jquery.mCustomScrollbar.min.css');

    wp_enqueue_style( 'cinema-mCustomScrollbar', get_template_directory_uri() . '/assets/css/jquery.mCustomScrollbar.min.css');

    wp_enqueue_style( 'cinema-nouislider', get_template_directory_uri() . '/assets/css/nouislider.min.css');

    wp_enqueue_style( 'cinema-ionicons', get_template_directory_uri() . '/assets/css/ionicons.min.css');

    wp_enqueue_style( 'cinema-plyr', get_template_directory_uri() . '/assets/css/plyr.css');

    wp_enqueue_style( 'cinema-photoswipe', get_template_directory_uri() . '/assets/css/photoswipe.css');

    wp_enqueue_style( 'cinema-skin', get_template_directory_uri() . '/assets/css/default-skin.css');

    wp_enqueue_style( 'cinema-main', get_template_directory_uri() . '/assets/css/main.css');

    // MAIN
	wp_enqueue_style( 'cinema-style', get_stylesheet_uri() );


    wp_enqueue_script( 'cinema-bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array('jquery'), '20151215', true );

    wp_enqueue_script( 'cinema-owl-js', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), '20151215', true );

    wp_enqueue_script( 'cinema-mousewheel-js', get_template_directory_uri() . '/assets/js/jquery.mousewheel.min.js', array('jquery'), '20151215', true );

    wp_enqueue_script( 'cinema-mCustomScrollbar-js', get_template_directory_uri() . '/assets/js/jquery.mCustomScrollbar.min.js', array('jquery'), '20151215', true );

    wp_enqueue_script( 'cinema-wNumb-js', get_template_directory_uri() . '/assets/js/wNumb.js', array('jquery'), '20151215', true );

    wp_enqueue_script( 'cinema-nouislider-js', get_template_directory_uri() . '/assets/js/nouislider.min.js', array('jquery'), '20151215', true );

    wp_enqueue_script( 'cinema-plyr-js', get_template_directory_uri() . '/assets/js/plyr.min.js', array('jquery'), '20151215', true );

    wp_enqueue_script( 'cinema-morelines', get_template_directory_uri() . '/assets/js/jquery.morelines.min.js', array('jquery'), '20151215', true );

    wp_enqueue_script( 'cinema-photoswipe-js', get_template_directory_uri() . '/assets/js/photoswipe.min.js', array('jquery'), '20151215', true );

    wp_enqueue_script( 'cinema-photoswipe-ui-js', get_template_directory_uri() . '/assets/js/photoswipe-ui-default.min.js', array('jquery'), '20151215', true );

    wp_enqueue_script( 'cinema-main-ui-js', get_template_directory_uri() . '/assets/js/bundle.js', array('jquery'), '20151215', true );



	wp_enqueue_script( 'cinema-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'cinema-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'cinema_scripts' );
