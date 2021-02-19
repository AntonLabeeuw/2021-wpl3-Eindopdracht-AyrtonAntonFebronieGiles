<?php

    // function cg_add_theme_scripts() {
    //     wp_enqueue_style( 'screen', get_template_directory_uri() . '/css/screen.css');
    // }

    // function register_my_menus() {
    //     register_nav_menus(
    //         array(
	// 			'main-menu' =>  __( 'main-menu' ) ,
	// 			'footer-menu' => __('footer-menu'),
    //         )
    //     );
    // }










    // add_action( 'wp_enqueue_scripts', 'cg_add_theme_scripts' );
    // add_action( 'init', 'register_my_menus' );
    add_action( 'init', 'p_register_skills', 0 );

?>