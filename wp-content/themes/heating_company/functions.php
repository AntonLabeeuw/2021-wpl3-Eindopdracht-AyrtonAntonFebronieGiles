<?php
require_once get_template_directory() . '/wp_materialize_navwalker.php';









function js_script(){
wp_enqueue_style("5","https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css");
wp_enqueue_style("12","https://code.jquery.com/jquery-2.1.1.min.js");
wp_enqueue_script("1", "https://code.jquery.com/jquery-2.2.4.min.js");
wp_enqueue_style("13","slick-master/slick/slick.css");
wp_enqueue_style("14","slick-master/slick/slick-theme.css");
wp_enqueue_script('15',"//code.jquery.com/jquery-migrate-1.2.1.min.js");
wp_enqueue_script('16',"//code.jquery.com/jquery-1.11.0.min.js");
wp_enqueue_script('17',"slick-master/slick/slick.min.js");




wp_enqueue_style("2","https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css");
wp_enqueue_script("3", "https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js");

wp_enqueue_style('AOS_animate', 'https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css', false, null);
wp_enqueue_script("4", "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js");
wp_enqueue_script("11", "https://cdnjs.cloudflare.com/ajax/libs/aos/2.2.0/aos.js");

wp_enqueue_script('AOS', 'https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js');

wp_enqueue_style("8","https://fonts.googleapis.com/icon?family=Material+Icons");






wp_enqueue_script("9", "https://kit.fontawesome.com/e3d5c31b7b.js");

wp_enqueue_script('6',get_template_directory_uri() . '/js/effect.js');
wp_enqueue_script('7',get_template_directory_uri() . '/js/navbar.js');


}








// register_nav_menus(
//   array(
//       'main-menu'   =>  __( 'Primary Menu', 'THEMENAME' ),
//       // Register the Primary menu and Drawer menu
//       // Theme uses wp_nav_menu() in TWO locations.
//       // Copy and paste the line above right here if you want to make another menu,
//       // just change the 'primary' to another name
//   )
// );

// function theme_name_scripts() {   
// 	wp_enqueue_script( 
// 		'script-name', 
// 		get_template_directory_uri() . '/js/navbar.js', 
// 		array('jquery'), 
// 		'1.0.0', 
// 		true 
// 	);
//   }
  
//   add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
    function cg_add_theme_scripts() {
		$pathTheme = get_template_directory_uri();
		wp_enqueue_style("materialize",$pathTheme . '/css/materialize.min.css');
		wp_enqueue_style('screen',$pathTheme . '/css/screen.css', ['materialize']);
		
		
    }

	// add_action( 'wp_enqueue_scripts', 'add_aos_animation' );
//  	function add_aos_animation() {
//      wp_enqueue_style('AOS_animate', 'https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css', false, null);
//      wp_enqueue_script('AOS', 'https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js', false, null, true);
//      wp_enqueue_script('theme-js', get_template_directory_uri() . '/js/effect.js', array( 'AOS' ), null, true);
// 	 wp_enqueue_script('my_javascript_file', get_template_directory_uri() . '/js/navbar.js', array('jquery'));
//  }
    function register_my_menus() {
        register_nav_menus(
            array(
				'main-menu' =>  __( 'main-menu' ) ,
				'footer-menu' => __('footer-menu'),
            )
        );
    }
	

    function h_register_verwarmingsketels(){
        $labels = array(
			'name'                  => 'verwarmingsketel',
			'singular_name'         => 'verwarmingsketel',
			'menu_name'             => 'verwarmingsketels',
			'name_admin_bar'        => 'verwarmingsketels',
			'archives'              => 'Verwarmingsketel archives',
			'attributes'            => 'Verwarmingsketel attributes',
			'parent_item_colon'     => 'Parent item:',
			'all_items'             => 'Alle verwarmingsketels',
			'add_new_item'          => 'Add new verwarmingsketel',
			'add_new'               => 'Add verwarmingsketel',
			'new_item'              => 'New verwarmingsketel',
			'edit_item'             => 'Edit verwarmingsketel',
			'update_item'           => 'Update verwarmingsketel',
			'view_item'             => 'View verwarmingsketel',
			'view_items'            => 'View verwarmingsketels',
			'search_items'          => 'Search verwarmingsketel',
			'not_found'             => 'Not found',
			'not_found_in_trash'    => 'Not found in trash',
			'featured_image'        => 'Featured image',
			'set_featured_image'    => 'Set featured image',
			'remove_featured_image' => 'Remove featured image',
			'use_featured_image'    => 'Use as featured image',
			'insert_into_item'      => 'Insert into item',
			'uploaded_to_this_item' => 'Uploaded to this item',
			'items_list'            => 'Items list',
			'items_list_navigation' => 'Items list navigation',
			'filter_items_list'     => 'Filter items list',
		);
		$args = array(
			'label'                 => 'verwarmingsketels',
			'description'           => 'Soorten verwarmingsketels',
			'labels'                => $labels,
			'supports'              => array( 'title', 'editor', 'thumbnail'),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'menu_icon'				=> 'dashicons-admin-home',
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'page',
		);
		register_post_type( 'verwarmingsketels', $args );
    }

	function h_register_merken(){
        $labels = array(
			'name'                  => 'merk',
			'singular_name'         => 'merk',
			'menu_name'             => 'merken',
			'name_admin_bar'        => 'merken',
			'archives'              => 'merk archives',
			'attributes'            => 'merk attributes',
			'parent_item_colon'     => 'Parent item:',
			'all_items'             => 'Alle merken',
			'add_new_item'          => 'Add new merk',
			'add_new'               => 'Add merk',
			'new_item'              => 'New merk',
			'edit_item'             => 'Edit merk',
			'update_item'           => 'Update merk',
			'view_item'             => 'View merk',
			'view_items'            => 'View merken',
			'search_items'          => 'Search merk',
			'not_found'             => 'Not found',
			'not_found_in_trash'    => 'Not found in trash',
			'featured_image'        => 'Featured image',
			'set_featured_image'    => 'Set featured image',
			'remove_featured_image' => 'Remove featured image',
			'use_featured_image'    => 'Use as featured image',
			'insert_into_item'      => 'Insert into item',
			'uploaded_to_this_item' => 'Uploaded to this item',
			'items_list'            => 'Items list',
			'items_list_navigation' => 'Items list navigation',
			'filter_items_list'     => 'Filter items list',
		);
		$args = array(
			'label'                 => 'merken',
			'description'           => 'Merken van verwarmingsketels',
			'labels'                => $labels,
			'supports'              => array( 'title', 'editor', 'thumbnail',),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'menu_icon'				=> 'dashicons-cart',
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'page',
		);
		register_post_type( 'merken', $args );
    }

	function h_register_teamleden(){
        $labels = array(
			'name'                  => 'teamlid',
			'singular_name'         => 'teamlid',
			'menu_name'             => 'teamleden',
			'name_admin_bar'        => 'teamleden',
			'archives'              => 'teamlid archives',
			'attributes'            => 'teamlid attributes',
			'parent_item_colon'     => 'Parent item:',
			'all_items'             => 'Alle teamleden',
			'add_new_item'          => 'Add new teamlid',
			'add_new'               => 'Add teamlid',
			'new_item'              => 'New teamlid',
			'edit_item'             => 'Edit teamlid',
			'update_item'           => 'Update teamlid',
			'view_item'             => 'View teamlid',
			'view_items'            => 'View teamleden',
			'search_items'          => 'Search teamlid',
			'not_found'             => 'Not found',
			'not_found_in_trash'    => 'Not found in trash',
			'featured_image'        => 'Featured image',
			'set_featured_image'    => 'Set featured image',
			'remove_featured_image' => 'Remove featured image',
			'use_featured_image'    => 'Use as featured image',
			'insert_into_item'      => 'Insert into item',
			'uploaded_to_this_item' => 'Uploaded to this item',
			'items_list'            => 'Items list',
			'items_list_navigation' => 'Items list navigation',
			'filter_items_list'     => 'Filter items list',
		);
		$args = array(
			'label'                 => 'teamleden',
			'description'           => 'Mensen die in het bedrijf werken',
			'labels'                => $labels,
			'supports'              => array( 'title', 'editor', 'thumbnail'),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'menu_icon'				=> 'dashicons-groups',
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'page',
		);
		register_post_type( 'teamleden', $args );
    }

	function h_register_reviews(){
        $labels = array(
			'name'                  => 'review',
			'singular_name'         => 'review',
			'menu_name'             => 'reviews',
			'name_admin_bar'        => 'reviews',
			'archives'              => 'review archives',
			'attributes'            => 'review attributes',
			'parent_item_colon'     => 'Parent item:',
			'all_items'             => 'Alle reviews',
			'add_new_item'          => 'Add new review',
			'add_new'               => 'Add review',
			'new_item'              => 'New review',
			'edit_item'             => 'Edit review',
			'update_item'           => 'Update review',
			'view_item'             => 'View review',
			'view_items'            => 'View reviews',
			'search_items'          => 'Search review',
			'not_found'             => 'Not found',
			'not_found_in_trash'    => 'Not found in trash',
			'featured_image'        => 'Featured image',
			'set_featured_image'    => 'Set featured image',
			'remove_featured_image' => 'Remove featured image',
			'use_featured_image'    => 'Use as featured image',
			'insert_into_item'      => 'Insert into item',
			'uploaded_to_this_item' => 'Uploaded to this item',
			'items_list'            => 'Items list',
			'items_list_navigation' => 'Items list navigation',
			'filter_items_list'     => 'Filter items list',
		);
		$args = array(
			'label'                 => 'reviews',
			'description'           => 'Reviews van de klanten',
			'labels'                => $labels,
			'supports'              => array( 'title', 'editor'),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'menu_icon'				=> 'dashicons-star-filled',
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'page',
		);
		register_post_type( 'reviews', $args );
    }

	function h_register_realisaties(){
        $labels = array(
			'name'                  => 'realisatie',
			'singular_name'         => 'realisatie',
			'menu_name'             => 'realisaties',
			'name_admin_bar'        => 'realisaties',
			'archives'              => 'realisatie archives',
			'attributes'            => 'realisatie attributes',
			'parent_item_colon'     => 'Parent item:',
			'all_items'             => 'Alle realisaties',
			'add_new_item'          => 'Add new realisatie',
			'add_new'               => 'Add realisatie',
			'new_item'              => 'New realisatie',
			'edit_item'             => 'Edit realisatie',
			'update_item'           => 'Update realisatie',
			'view_item'             => 'View realisatie',
			'view_items'            => 'View realisaties',
			'search_items'          => 'Search realisatie',
			'not_found'             => 'Not found',
			'not_found_in_trash'    => 'Not found in trash',
			'featured_image'        => 'Featured image',
			'set_featured_image'    => 'Set featured image',
			'remove_featured_image' => 'Remove featured image',
			'use_featured_image'    => 'Use as featured image',
			'insert_into_item'      => 'Insert into item',
			'uploaded_to_this_item' => 'Uploaded to this item',
			'items_list'            => 'Items list',
			'items_list_navigation' => 'Items list navigation',
			'filter_items_list'     => 'Filter items list',
		);
		$args = array(
			'label'                 => 'realisaties',
			'description'           => 'realisaties van de klanten',
			'labels'                => $labels,
			'supports'              => array( 'title', 'editor', 'thumbnail'),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'menu_icon'				=> 'dashicons-admin-tools',
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'page',
		);
		register_post_type( 'realisaties', $args );
    }

	function h_register_banners(){
        $labels = array(
			'name'                  => 'banner',
			'singular_name'         => 'banner',
			'menu_name'             => 'banners',
			'name_admin_bar'        => 'banners',
			'archives'              => 'banner archives',
			'attributes'            => 'banner attributes',
			'parent_item_colon'     => 'Parent item:',
			'all_items'             => 'Alle banners',
			'add_new_item'          => 'Add new banner',
			'add_new'               => 'Add banner',
			'new_item'              => 'New banner',
			'edit_item'             => 'Edit banner',
			'update_item'           => 'Update banner',
			'view_item'             => 'View banner',
			'view_items'            => 'View banners',
			'search_items'          => 'Search banner',
			'not_found'             => 'Not found',
			'not_found_in_trash'    => 'Not found in trash',
			'featured_image'        => 'Featured image',
			'set_featured_image'    => 'Set featured image',
			'remove_featured_image' => 'Remove featured image',
			'use_featured_image'    => 'Use as featured image',
			'insert_into_item'      => 'Insert into item',
			'uploaded_to_this_item' => 'Uploaded to this item',
			'items_list'            => 'Items list',
			'items_list_navigation' => 'Items list navigation',
			'filter_items_list'     => 'Filter items list',
		);
		$args = array(
			'label'                 => 'banners',
			'description'           => 'Banner',
			'labels'                => $labels,
			'supports'              => array( 'title', 'editor', 'thumbnail',),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'menu_icon'				=> 'dashicons-welcome-add-page',
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'page',
		);
		register_post_type( 'banners', $args );
    }

	function h_register_cards(){
        $labels = array(
			'name'                  => 'card',
			'singular_name'         => 'card',
			'menu_name'             => 'cards',
			'name_admin_bar'        => 'cards',
			'archives'              => 'card archives',
			'attributes'            => 'card attributes',
			'parent_item_colon'     => 'Parent item:',
			'all_items'             => 'Alle cards',
			'add_new_item'          => 'Add new card',
			'add_new'               => 'Add card',
			'new_item'              => 'New card',
			'edit_item'             => 'Edit card',
			'update_item'           => 'Update card',
			'view_item'             => 'View card',
			'view_items'            => 'View cards',
			'search_items'          => 'Search card',
			'not_found'             => 'Not found',
			'not_found_in_trash'    => 'Not found in trash',
			'featured_image'        => 'Featured image',
			'set_featured_image'    => 'Set featured image',
			'remove_featured_image' => 'Remove featured image',
			'use_featured_image'    => 'Use as featured image',
			'insert_into_item'      => 'Insert into item',
			'uploaded_to_this_item' => 'Uploaded to this item',
			'items_list'            => 'Items list',
			'items_list_navigation' => 'Items list navigation',
			'filter_items_list'     => 'Filter items list',
		);
		$args = array(
			'label'                 => 'cards',
			'description'           => 'Card',
			'labels'                => $labels,
			'supports'              => array( 'title', 'editor', 'thumbnail',),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'menu_icon'				=> 'dashicons-index-card',
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'page',
		);
		register_post_type( 'cards', $args );
    }

    function h_add_custom_box(){
        add_meta_box(
            'h_verwarmingsketel_box_id',
            'Info verwarmingsketel',
            'h_custom_box_verwarmingsketel_html',
            'verwarmingsketels'
        );

		add_meta_box(
            'h_merk_box_id',
            'Info merk',
            'h_custom_box_merk_html',
            'merken'
        );

		add_meta_box(
			'h_teamlid_box_id',
			'Teamleden',
			'h_custom_box_teamlid_html',
			'teamleden'
		);

		add_meta_box(
			'h_review_box_id',
			'Reviews',
			'h_custom_box_review_html',
			'reviews'
		);
		add_meta_box(
			'h_banner_box_id',
			'Banners',
			'h_custom_box_banner_html',
			'banners'
		);
		add_meta_box(
			'h_banner_box_id',
			'Banners',
			'h_custom_box_cards_html',
			'banners'
		);
    }

	function h_custom_box_cards_html($post){
        $value_tekst = get_post_meta($post->ID, '_tekst', true);
		$value_tekstBtn = get_post_meta($post->ID, '_btn', true);

		echo "<h1>Extra info over de banner</h1>";
		echo "<div class='c-form-row'>";
		echo "<div class='c-form-row__label'>";
		echo "Button tekst";
		echo "</div>";
		echo "<div class='c-form-row__control'>";
		echo "<input type='text' id='btn' name='btn' value='" . $value_tekstBtn . "'>";
		echo "</div>";
		echo "</div>";
	}


	function h_custom_box_banner_html($post){
        $value_tekst = get_post_meta($post->ID, '_tekst', true);
		$value_tekstBtn = get_post_meta($post->ID, '_btn', true);

		echo "<h1>Extra info over de banner</h1>";
		echo "<div class='c-form-row'>";
		echo "<div class='c-form-row__label'>";
		echo "Button tekst";
		echo "</div>";
		echo "<div class='c-form-row__control'>";
		echo "<input type='text' id='btn' name='btn' value='" . $value_tekstBtn . "'>";
		echo "</div>";
		echo "</div>";
	}

    function h_custom_box_verwarmingsketel_html($post){
        $value_energiebron = get_post_meta($post->ID, '_energiebron', true);
		$value_minprijs = get_post_meta($post->ID, '_minprijs', true);
        $value_maxprijs = get_post_meta($post->ID, '_maxprijs', true);
        $value_prijsverbruik = get_post_meta($post->ID, '_prijsverbruik', true);

        echo "<h1>Extra info over de verwarmingsketel</h1>";
		echo "<div class='c-form-row'>";
		echo "<div class='c-form-row__label'>";
		echo "Energiebron";
		echo "</div>";
		echo "<div class='c-form-row__control'>";
		echo "<input type='text' id='energiebron' name='energiebron' value='" . $value_energiebron . "'>";// value='" . $value_energiebron . "'
		echo "</div>";
		echo "</div>";
		echo "<div class='c-form-row'>";
		echo "<div class='c-form-row__label'>";
		echo "Minimum prijs";
		echo "</div>";
		echo "<div class='c-form-row__control'>";
        echo "<input type='number' id='minprijs' name='minprijs' value='" . $value_minprijs . "'>";// value='" . $value_minprijs . "'
		echo "</div>";
		echo "</div>";
        echo "<div class='c-form-row'>";
		echo "<div class='c-form-row__label'>";
		echo "Maximum prijs";
		echo "</div>";
		echo "<div class='c-form-row__control'>";
        echo "<input type='number' id='maxprijs' name='maxprijs' value='" . $value_maxprijs . "'>";// value='" . $value_maxprijs . "'
		echo "</div>";
		echo "</div>";
        echo "<div class='c-form-row'>";
		echo "<div class='c-form-row__label'>";
		echo "Prijs verbruik";
		echo "</div>";
		echo "<div class='c-form-row__control'>";
		echo "<input type='text' id='prijsverbruik' name='prijsverbruik' value='" . $value_prijsverbruik . "'>";// value='" . $value_prijsverbruik . "'
		echo "</div>";
		echo "</div>";
    }

	function h_custom_box_merk_html($post){
        $value_site = get_post_meta($post->ID, '_site', true);

		echo "<h1>Extra info over het merk</h1>";
		echo "<div class='c-form-row'>";
		echo "<div class='c-form-row__label'>";
		echo "Site";
		echo "</div>";
		echo "<div class='c-form-row__control'>";
		echo "<input type='text' id='site' name='site' value='" . $value_site . "'>";
		echo "</div>";
		echo "</div>";
	}

	function h_custom_box_teamlid_html($post){
		$value_functie = get_post_meta($post->ID, '_functie', true);
		
		echo "<h1>Extra info over het teamlid</h1>";
		echo "<div class='c-form-row'>";
		echo "<div class='c-form-row__label'>";
		echo "Functie";
		echo "</div>";
		echo "<div class='c-form-row__control'>";
		echo "<input type='text' id='functie' name='functie' value='" . $value_functie . "'>";
		echo "</div>";
		echo "</div>";
	}

	function h_custom_box_review_html($post){
		$value_rating = get_post_meta($post->ID, '_rating', true);
		$value_zichtbaarheid = get_post_meta($post->ID, '_zichtbaarheid', true);
		$value_uitgelicht = get_post_meta($post->ID, '_uitgelicht', true);

		echo "<h1>Extra info de review</h1>";
		echo "<div class='c-form-row'>";
		echo "<div class='c-form-row__label'>";
		echo "Rating";
		echo "</div>";
		echo "<div class='c-form-row__control'>";
        echo "<input type='number' id='rating' name='rating' min='0' max='5' value='" . $value_rating . "'>";
		echo "</div>";
		echo "</div>";
		echo "<div class='c-form-row'>";
		echo "<div class='c-form-row__label'>";
		echo "Wil je deze review zichtbaar op de site?";
		echo "</div>";
		echo "<div class='c-form-row__control'>";
		echo "<input type='checkbox' id='zichtbaarheid' name='zichtbaarheid' value='1' " . ($value_zichtbaarheid == 1 ? "checked":"") . ">";
		echo "</div>";
		echo "</div>";
		echo "<div class='c-form-row'>";
		echo "<div class='c-form-row__label'>";
		echo "Wil je deze review instellen als uitgelichte review?";
		echo "</div>";
		echo "<div class='c-form-row__control'>";
		echo "<input type='checkbox' id='uitgelicht' name='uitgelicht' value='1' ". ($value_uitgelicht == 1 ? "checked":"") .">";
		echo "</div>";
		echo "</div>";
	}

    function h_save_postdata($post_id){
        $naam_post_type = get_post_type($post_id);

        if ($naam_post_type == 'verwarmingsketels'){
            if (array_key_exists('energiebron', $_POST)){
                update_post_meta(
                    $post_id,
                    '_energiebron',
                    $_POST['energiebron']
                );
            }

            if (array_key_exists('minprijs', $_POST)){
                update_post_meta(
                    $post_id,
                    '_minprijs',
                    $_POST['minprijs']
                );
            }

            if (array_key_exists('maxprijs', $_POST)){
                update_post_meta(
                    $post_id,
                    '_maxprijs',
                    $_POST['maxprijs']
                );
            }

            if (array_key_exists('prijsverbruik', $_POST)){
                update_post_meta(
                    $post_id,
                    '_prijsverbruik',
                    $_POST['prijsverbruik']
                );
            }
        }

		if ($naam_post_type == 'merken'){
			if (array_key_exists('site', $_POST)){
                update_post_meta(
                    $post_id,
                    '_site',
                    $_POST['site']
                );
            }
		}

		if ($naam_post_type == 'teamleden'){
			if (array_key_exists('functie', $_POST)){
                update_post_meta(
                    $post_id,
                    '_functie',
                    $_POST['functie']
                );
            }
		}

		if ($naam_post_type == 'reviews'){
			if (array_key_exists('rating', $_POST)){
				update_post_meta(
					$post_id,
					'_rating',
					$_POST['rating']
				);
			}

			if (array_key_exists('zichtbaarheid', $_POST)){
				update_post_meta(
					$post_id,
					'_zichtbaarheid',
					$_POST['zichtbaarheid']
				);
			}else{
				update_post_meta(
					$post_id,
					'_zichtbaarheid',
					0
				);
			}

			if (array_key_exists('uitgelicht', $_POST)){
				update_post_meta(
					$post_id,
					'_uitgelicht',
					$_POST['uitgelicht']
				);
			}else{
				update_post_meta(
					$post_id,
					'_uitgelicht',
					0
				);
			}
		}
		if ($naam_post_type == 'banners'){
			if (array_key_exists('btn', $_POST)){
				update_post_meta(
					$post_id,
					'_btn',
					$_POST['btn']
				);
			}
		}
    }

    function p_admin_css_js(){
		$pathTheme = get_template_directory_uri();
		wp_enqueue_style('admin-cpt-css',$pathTheme . '/css/cpt.css');
	}


	function ih_customize_register($wp_customize) {
		/* SETTINGS */
		//header 1
		$wp_customize->add_setting( 'setting-txt-h1', array('default'=> 'Attesten en certificaten') );
		//paragraaf
		$wp_customize->add_setting( 'setting-txt-p1', array('default'=> 'De installateurs van The Heating Company beschikken over de nodige attesten en certificaten om elke opdracht tot een goed einde te brengen.') );
		//header 2
		$wp_customize->add_setting( 'setting-txt-h2', array('default'=> 'Behaalde attesten en certificaten:') );
		//Lijstitem1
		$wp_customize->add_setting( 'setting-txt-li1', array('default'=> 'Onderhouden en afstellen van stookolieinstallaties : TV9189
		') );
		//Lijstitem2
		$wp_customize->add_setting( 'setting-txt-li2', array('default'=> 'Onderhouden van gasinstallaties: SGA016') );
		//Lijstitem3
		$wp_customize->add_setting( 'setting-txt-li3', array('default'=> 'Tanktechnicus : SV00666
		') );
		//Lijstitem4
		$wp_customize->add_setting( 'setting-txt-li4', array('default'=> 'Aardgashabilitatie : 02-01661-N
		') );
		//Lijstitem5
		$wp_customize->add_setting( 'setting-txt-li5', array('default'=> 'Energiedeskundige : 2007-350-EAP – EPO8489
		') );

		/* CONTROLS */
		//header 1
		//De section aanpassen dus 'section-id-heating-installatie'.
		$wp_customize->add_control( 'setting-txt-h1', array('label'=> 'Tekst header 1','type'=> 'textarea','section'=> 'section-id-heating-attest',) );
		//paragraaf
		//De section aanpassen dus 'section-id-heating-installatie'.
		$wp_customize->add_control( 'setting-txt-p1', array('label'=> 'Paragraaf','type'=> 'textarea','section'=> 'section-id-heating-attest',) );
		//header 2
		//De section aanpassen dus 'section-id-heating-installatie'.
		$wp_customize->add_control( 'setting-txt-h2', array('label'=> 'Tekst header 2','type'=> 'textarea','section'=> 'section-id-heating-attest',) );
		//lijst
		//De section aanpassen dus 'section-id-heating-installatie'.
		$wp_customize->add_control( 'setting-txt-li1', array('label'=> 'Item 1','type'=> 'textarea','section'=> 'section-id-heating-attest',) );
		$wp_customize->add_control( 'setting-txt-li2', array('label'=> 'Item 2','type'=> 'textarea','section'=> 'section-id-heating-attest',) );
		$wp_customize->add_control( 'setting-txt-li3', array('label'=> 'Item 3','type'=> 'textarea','section'=> 'section-id-heating-attest',) );
		$wp_customize->add_control( 'setting-txt-li4', array('label'=> 'Item 4','type'=> 'textarea','section'=> 'section-id-heating-attest',) );
		$wp_customize->add_control( 'setting-txt-li5', array('label'=> 'Item 5','type'=> 'textarea','section'=> 'section-id-heating-attest',) );

		/* SECTION */
		//'section-id-heating-installatie' aanpassen! En ook de is_front_page.
		$wp_customize->add_section( 'section-id-heating-attest', array('title'=>  'Instellingen text','description'=>  'Stel de tekst in','active_callback'=> 
		'callback_check_if_page_attest',
		//wanneer moet deze setting worden getoond
		) );
	}

	function callback_check_if_page_attest(){
		if (is_page('attest')){
		return true;
		}else{
		return false;
		}
	}

	function ih_customize_banner($wp_customize) {
		/* SETTINGS */
		//Tekst banner
		$wp_customize->add_setting( 'setting-txt-banner', array('default'=> 'Reken op een betrouwbare partner') );
		//Tekst button
		$wp_customize->add_setting( 'setting-txt-btn', array('default'=> 'Neem contact op') );
		//Link button
		$wp_customize->add_setting( 'setting-txt-btnlink', array('default'=> 'https://wpl3.antonlabeeuw.be/') );

		/* CONTROLS */
		//Tekst banner
		//De section aanpassen dus 'section-id-heating-installatie'.
		$wp_customize->add_control( 'setting-txt-banner', array('label'=> 'Tekst banner','type'=> 'textarea','section'=> 'section-id-heating-banner',) );
		//Tekst knop
		//De section aanpassen dus 'section-id-heating-installatie'.
		$wp_customize->add_control( 'setting-txt-btn', array('label'=> 'Tekst knop','type'=> 'input','section'=> 'section-id-heating-banner',) );
		//Link knop
		//De section aanpassen dus 'section-id-heating-installatie'.
		$wp_customize->add_control( 'setting-txt-btnlink', array('label'=> 'Link knop','type'=> 'textarea','section'=> 'section-id-heating-banner',) );

		/* SECTION */
		//'section-id-heating-installatie' aanpassen! En ook de is_front_page.
		$wp_customize->add_section( 'section-id-heating-banner', array('title'=>  'Instellingen banner','description'=>  'Stel de tekst in', 
		//wanneer moet deze setting worden getoond
		) );
	}
	
	add_action( 'customize_register', 'ih_customize_banner');
	add_action( 'customize_register', 'ih_customize_register');




	add_action( 'wp_enqueue_scripts', 'js_script' );
	// add_action( 'wp_enqueue_scripts', 'navbar_script' );
    add_action( 'wp_enqueue_scripts', 'cg_add_theme_scripts' );
    add_action( 'init', 'register_my_menus' );
    add_theme_support( 'post-thumbnails' );
    add_action( 'init', 'h_register_verwarmingsketels', 0 );
	add_action( 'init', 'h_register_merken', 0 );
	add_action( 'init', 'h_register_teamleden', 0 );
	add_action( 'init', 'h_register_reviews', 0 );
	add_action( 'init', 'h_register_realisaties' );
	add_action( 'init', 'h_register_banners', 0 );
	add_action( 'init', 'h_register_cards', 0 );
	add_action( 'add_meta_boxes', 'h_add_custom_box' );
    add_action( 'save_post', 'h_save_postdata' );
    add_action( 'admin_enqueue_scripts', 'p_admin_css_js' );
?>