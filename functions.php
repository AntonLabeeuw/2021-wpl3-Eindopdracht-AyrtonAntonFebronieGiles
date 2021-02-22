<?php

// function print_pre($arr){
//   echo '<pre>';
//   print_r($arr);
//   echo '</pre>';
// }


function ih_laadCSS(){
    $pathTheme = get_template_directory_uri();
    wp_enqueue_style("materialize",$pathTheme . '/css/materialize.min.css');
    wp_enqueue_style('project03',$pathTheme . '/css/screen.css', ['materialize']);
}
function laadEigenJs(){        
    wp_enqueue_script( "eigenjs", get_template_directory_uri(). "/js/navbar.js" );
}

function ih_register_my_menus() {
    register_nav_menus(
      array(
        'main-menu' => __( 'Main Menu' ),
        'footer-menu' => __('Footer Menu')
       )
     );
}



add_action("wp_enqueue_scripts","laadEigenJs");
add_action("wp_enqueue_scripts","ih_laadCSS");
add_action('init', 'ih_register_my_menus' );
add_theme_support( 'post-thumbnails' );