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
			'supports'              => array( 'title', 'editor', 'thumbnail'),
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

    function h_add_custom_box(){
        add_meta_box(
            'h_verwarmingsketel_box_id',
            'Info verwarmingsketel',
            'h_custom_box_verwarmingsketel_html',
            'verwarmingsketels'
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
    }

    function h_custom_box_verwarmingsketel_html($post){
        $value_energiebron = get_post_meta($post->ID, '_energiebron', true);
		$value_minprijs = get_post_meta($post->ID, '_minprijs', true);
        $value_maxprijs = get_post_meta($post->ID, '_maxprijs', true);
        $value_prijsverbruik = get_post_meta($post->ID, '_prijsverbruik', true);

        echo "<h1>Extra info over de verwarmingsketel</h1>";
		echo "<div class='cc-form-row'>";
		echo "<div class='c-form-row__label'>";
		echo "Energiebron";
		echo "</div>";
		echo "<div class='c-form-row__control'>";
		echo "<input type='text' id='energiebron' name='energiebron' value='" . $value_energiebron . "'>";// value='" . $value_energiebron . "'
		echo "</div>";
		echo "</div>";
		echo "<div class='cc-form-row'>";
		echo "<div class='c-form-row__label'>";
		echo "Minimum prijs";
		echo "</div>";
		echo "<div class='c-form-row__control'>";
        echo "<input type='number' id='minprijs' name='minprijs' value='" . $value_minprijs . "'>";// value='" . $value_minprijs . "'
		echo "</div>";
		echo "</div>";
        echo "<div class='cc-form-row'>";
		echo "<div class='c-form-row__label'>";
		echo "Maximum prijs";
		echo "</div>";
		echo "<div class='c-form-row__control'>";
        echo "<input type='number' id='maxprijs' name='maxprijs' value='" . $value_maxprijs . "'>";// value='" . $value_maxprijs . "'
		echo "</div>";
		echo "</div>";
        echo "<div class='cc-form-row'>";
		echo "<div class='c-form-row__label'>";
		echo "Prijs verbruik";
		echo "</div>";
		echo "<div class='c-form-row__control'>";
		echo "<input type='text' id='prijsverbruik' name='prijsverbruik' value='" . $value_prijsverbruik . "'>";// value='" . $value_prijsverbruik . "'
		echo "</div>";
		echo "</div>";
    }

	function h_custom_box_teamlid_html($post){
		$value_functie = get_post_meta($post->ID, '_functie', true);
		
		echo "<h1>Extra info over het teamlid</h1>";
		echo "<div class='cc-form-row'>";
		echo "<div class='c-form-row__label'>";
		echo "Functie";
		echo "</div>";
		echo "<div class='c-form-row__control'>";
		echo "<input type='text' id='functie' name='functie' value='" . $value_functie . "'>";
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

		if ($naam_post_type == 'teamleden'){
			if (array_key_exists('functie', $_POST)){
                update_post_meta(
                    $post_id,
                    '_functie',
                    $_POST['functie']
                );
            }
		}
    }

    function p_admin_css_js(){
		$pathTheme = get_template_directory_uri();
		wp_enqueue_style('admin-cpt-css',$pathTheme . '/css/cpt.css');
	}










    // add_action( 'wp_enqueue_scripts', 'cg_add_theme_scripts' );
    // add_action( 'init', 'register_my_menus' );
    add_theme_support( 'post-thumbnails' );
    add_action( 'init', 'h_register_verwarmingsketels', 0 );
	add_action( 'init', 'h_register_merken', 0 );
	add_action( 'init', 'h_register_teamleden', 0 );
	add_action( 'init', 'h_register_reviews', 0 );
	add_action( 'add_meta_boxes', 'h_add_custom_box' );
    add_action( 'save_post', 'h_save_postdata' );
    add_action( 'admin_enqueue_scripts', 'p_admin_css_js' );
?>