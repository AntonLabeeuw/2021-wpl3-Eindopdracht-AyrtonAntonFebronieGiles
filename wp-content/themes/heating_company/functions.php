<?php
// require_once get_template_directory() . '/wp_materialize_navwalker.php';
// Require Materialize Custom Nav Walker Class
require get_template_directory() . '/class-materialize-navwalker.php';


add_action( 'wp_footer' , 'materialize_nav_walker_dropdown_init' );

if( ! function_exists('materialize_nav_walker_dropdown_init') ) {

  function materialize_nav_walker_dropdown_init() { ?>
      <script>
          jQuery(document).ready(function($) {
              jQuery(".nav-item-dropdown-button").dropdown({constrainWidth: true,hover: true});
              jQuery(".side-menu-nav-item-dropdown-button").dropdown({constrainWidth: false,hover: true});
              
          });
      </script>
  <?php }

}

function wpf_dev_display_field_before( $field, $form_data ) {
	if ( absint( $form_data['id'] ) !== 1289 ) {
	return;
	}
		remove_action( 'wpforms_display_field_before', array( wpforms()->frontend, 'field_label' ), 15 );
	}
	 
	add_action( 'wpforms_display_field_before', 'wpf_dev_display_field_before', 10, 2 );
	 
	/**
	 * Move the field label to below the field for form ID 1289
	 *
	 * @link https://wpforms.com/developers/how-to-create-a-form-with-floating-labels/
	 */
	 
	function wpf_dev_display_field_after( $field, $form_data ) {
	if ( absint( $form_data['id'] ) !== 1289 ) {
	return;
	}
	 
		wpforms()->frontend->field_label( $field, $form_data );
	}
	 
	add_action( 'wpforms_display_field_after', 'wpf_dev_display_field_after', 1, 2 );




function js_script(){
	wp_enqueue_style("5","https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css");
	wp_enqueue_style("12","https://code.jquery.com/jquery-2.1.1.min.js");//nodig?
	wp_enqueue_script("1", "https://code.jquery.com/jquery-2.2.4.min.js");//nodig?
	wp_enqueue_script("slick-js",get_template_directory_uri() ."/js/slick.min.js", array(), "", true);
	wp_enqueue_style("slick-theme-css",get_template_directory_uri() ."/css/slick-theme.css");
	wp_enqueue_style("slick-css",get_template_directory_uri() ."/css/slick.css");
	wp_enqueue_style("lightbox-css",get_template_directory_uri() ."/css/lightbox.min.css");
	wp_enqueue_script("lightbox-js",get_template_directory_uri() ."/js/lightbox-plus-jquery.min.js");
	wp_enqueue_style("materialize-css","https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css");
	wp_enqueue_script("materialize-js", "https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js");
	wp_enqueue_style('AOS_animate', 'https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css', false, null);
	wp_enqueue_script("4", "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js");
	wp_enqueue_script("11", "https://cdnjs.cloudflare.com/ajax/libs/aos/2.2.0/aos.js");
	wp_enqueue_script('AOS', 'https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js');
	wp_enqueue_style("8","https://fonts.googleapis.com/icon?family=Material+Icons");
	wp_enqueue_script("font-awesome", "https://kit.fontawesome.com/e3d5c31b7b.js");
	wp_enqueue_script("eigen-js-effect",get_template_directory_uri() . '/js/effect.js');
	wp_enqueue_script("eigen-js-navbar",get_template_directory_uri() . '/js/navbar.js');
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

	function h_register_carousels(){
        $labels = array(
			'name'                  => 'carousel',
			'singular_name'         => 'carousel',
			'menu_name'             => 'carousels',
			'name_admin_bar'        => 'carousels',
			'archives'              => 'carousel archives',
			'attributes'            => 'carousel attributes',
			'parent_item_colon'     => 'Parent item:',
			'all_items'             => 'Alle carousels',
			'add_new_item'          => 'Add new carousel',
			'add_new'               => 'Add carousel',
			'new_item'              => 'New carousel',
			'edit_item'             => 'Edit carousel',
			'update_item'           => 'Update carousel',
			'view_item'             => 'View carousel',
			'view_items'            => 'View carousels',
			'search_items'          => 'Search carousel',
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
			'label'                 => 'carousels',
			'description'           => 'carousel',
			'labels'                => $labels,
			'supports'              => array( 'title', 'editor', 'thumbnail',),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'menu_icon'				=> 'dashicons-format-gallery',
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'page',
		);
		register_post_type( 'carousels', $args );
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
			'h_realisatie_box_id',
			'Realisaties',
			'h_custom_box_realisatie_html',
			'realisaties'
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

	function h_custom_box_realisatie_html($post){
		$value_soortGebouw = get_post_meta( $post->ID, '_soortGebouw', true );

		echo "<div class='c-form-row__label'>";
		echo "Is de realisatie van een woning of een residentie";
		echo "</div>";
		echo "<div class='c-form-row__control'>";
		echo "<select name='soortGebouw' id='soortGebouw'>";
		echo "<option value='woning' " . ($value_soortGebouw == 'woning' ? "selected":"") . ">woning</option>";
		echo "<option value='residentie' " . ($value_soortGebouw == 'residentie' ? "selected":"") . ">residentie</option>";
		echo "</select>";
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

		if ($naam_post_type == 'realisaties'){
			if (array_key_exists('soortGebouw', $_POST)){
				update_post_meta(
					$post_id,
					'_soortGebouw',
					$_POST['soortGebouw']
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

	function h_customize_oplossing($wp_customize) {
		/* SETTINGS */
		//header 1
		$wp_customize->add_setting( 'setting-txt-oplossing-h1', array('default'=> '') );
		//paragraaf
		$wp_customize->add_setting( 'setting-txt-oplossing-p.1', array('default'=> '') );
		//header 2
		$wp_customize->add_setting( 'setting-txt-oplossing-h2.1', array('default'=> '') );
		//header 2
		$wp_customize->add_setting( 'setting-txt-oplossing-h2.2', array('default'=> '') );
		//paragraaf
		$wp_customize->add_setting( 'setting-txt-oplossing-p.2', array('default'=> '') );
		/* CONTROLS */
		//header 1
		//De section aanpassen dus 'section-id-heating-oplossing'.
		$wp_customize->add_control( 'setting-txt-oplossing-h1', array('label'=> 'Titel','type'=> 'textarea','section'=> 'section-id-heating-oplossing',) );
		//paragraaf
		//De section aanpassen dus 'section-id-heating-oplossing'.
		$wp_customize->add_control( 'setting-txt-oplossing-p.1', array('label'=> 'Tekst','type'=> 'textarea','section'=> 'section-id-heating-oplossing',) );
		//header 2
		//De section aanpassen dus 'section-id-heating-oplossing'.
		$wp_customize->add_control( 'setting-txt-oplossing-h2.1', array('label'=> 'Kop','type'=> 'textarea','section'=> 'section-id-heating-oplossing',) );
		//De section aanpassen dus 'section-id-heating-oplossing'.
		$wp_customize->add_control( 'setting-txt-oplossing-h2.2', array('label'=> 'Kop','type'=> 'textarea','section'=> 'section-id-heating-oplossing',) );
		//De section aanpassen dus 'section-id-heating-oplossing'.
		$wp_customize->add_control( 'setting-txt-oplossing-p.2', array('label'=> 'Tekst','type'=> 'textarea','section'=> 'section-id-heating-oplossing',) );
		/* SECTION */
		//'section-id-heating-installatie' aanpassen! En ook de is_front_page.
		$wp_customize->add_section( 'section-id-heating-oplossing', array('title'=>  'Instellingen tekst','description'=>  'Stel de tekst in','active_callback'=> 
		'callback_check_if_page_oplossing',
		//wanneer moet deze setting worden getoond
		) );
	}

	function callback_check_if_page_oplossing(){
		if (is_page('verwarmingsoplossingen')){
		return true;
		}else{
		return false;
		}
	}
	// plaatsing
	function h_customize_verwarmingsketel_plaatsen($wp_customize) {
        /* SETTINGS */
        //header 1
        $wp_customize->add_setting( 'setting-plaatsing-txt-h1', array('default'=> '') );
        //paragraaf
        $wp_customize->add_setting( 'setting-plaatsing-txt-p', array('default'=> '') );
        //header 2
        $wp_customize->add_setting( 'setting-plaatsing-txt-h2', array('default'=> '') );
        /* CONTROLS */
        //header 1
        //De section aanpassen dus 'section-id-heating-installatie'.
        $wp_customize->add_control( 'setting-plaatsing-txt-h1', array('label'=> 'Titel','type'=> 'textarea','section'=> 'section-id-verwarmingsketel_plaatsen',) );
        //paragraaf
        //De section aanpassen dus 'section-id-heating-installatie'.
        $wp_customize->add_control( 'setting-plaatsing-txt-p', array('label'=> 'Tekst','type'=> 'textarea','section'=> 'section-id-verwarmingsketel_plaatsen',) );
        //header 2
        //De section aanpassen dus 'section-id-heating-installatie'.
        $wp_customize->add_control( 'setting-plaatsing-txt-h2', array('label'=> 'Kop','type'=> 'textarea','section'=> 'section-id-verwarmingsketel_plaatsen',) );
        /* SECTION */
        //'section-id-heating-installatie' aanpassen! En ook de is_front_page.
        $wp_customize->add_section( 'section-id-verwarmingsketel_plaatsen', array('title'=>  'Instellingen tekst','description'=>  'Stel de tekst in','active_callback'=> 
        'callback_check_if_page_verwarmingsketel_plaatsen',
        //wanneer moet deze setting worden getoond
        ) );
    }
    function callback_check_if_page_verwarmingsketel_plaatsen(){
        if (is_page('verwarmingsketel-plaatsen')){
        return true;
        }else{
        return false;
        }
    }
	//plaatsing stop
	//offerste start
		function h_customize_offerte($wp_customize) {
			/* SETTINGS */
			$wp_customize->add_setting( 'offerte-txt-h1', array('default'=> '') );
			/* CONTROLS */
			$wp_customize->add_control( 'offerte-txt-h1', array('label'=> 'Titel','type'=> 'textarea','section'=> 'section-id-offerte',) );
			/* SECTION */
			$wp_customize->add_section( 'section-id-offerte', array('title'=>  'Instellingen tekst','description'=>  'Stel de tekst in','active_callback'=> 
			'callback_check_if_page_offerte',
			//wanneer moet deze setting worden getoond
			) );
		}
		function callback_check_if_page_offerte(){
			if (is_page('offerte')){
			return true;
			}else{
			return false;
			}
		}
	//offerte stop

	// plaatsing-residentie
	function h_customize_verwarmingsketel_plaatsen_residentie($wp_customize) {
        /* SETTINGS */
		$wp_customize->add_setting( 'setting-plaatsing-residentie-txt-h2.1', array('default'=> '') );
		$wp_customize->add_setting( 'setting-plaatsing-residentie-txt-p.1', array('default'=> '') );
		$wp_customize->add_setting( 'setting-plaatsing-residentie-txt-h2.2', array('default'=> '') );
		$wp_customize->add_setting( 'setting-plaatsing-residentie-txt-h3.1', array('default'=> '') );
		$wp_customize->add_setting( 'setting-plaatsing-residentie-txt-p.2', array('default'=> '') );
		$wp_customize->add_setting( 'setting-plaatsing-residentie-txt-h3.2', array('default'=> '') );
		$wp_customize->add_setting( 'setting-plaatsing-residentie-txt-p.3', array('default'=> '') );
		$wp_customize->add_setting( 'setting-plaatsing-residentie-txt-h3.3', array('default'=> '') );
		$wp_customize->add_setting( 'setting-plaatsing-residentie-txt-p.4', array('default'=> '') );
		$wp_customize->add_setting( 'setting-plaatsing-residentie-txt-h3.4', array('default'=> '') );
		$wp_customize->add_setting( 'setting-plaatsing-residentie-txt-p.5', array('default'=> '') );
		$wp_customize->add_setting( 'setting-plaatsing-residentie-txt-h3.5', array('default'=> '') );
		$wp_customize->add_setting( 'setting-plaatsing-residentie-txt-p.6', array('default'=> '') );
		$wp_customize->add_setting( 'setting-plaatsing-residentie-button_text', array('default'=> '') );
		$wp_customize->add_setting( 'setting-plaatsing-residentie-button_link', array('default'=> '') );
		$wp_customize->add_setting( 'setting-plaatsing-residentie-button_text.1', array('default'=> '') );
		$wp_customize->add_setting( 'setting-plaatsing-residentie-button_link.1', array('default'=> '') );
        /* CONTROLS */
        $wp_customize->add_control( 'setting-plaatsing-residentie-txt-h2.1', array('label'=> 'Kop','type'=> 'textarea','section'=> 'section-id-verwarmingsketel_plaatsen-residentie',) );
		$wp_customize->add_control( 'setting-plaatsing-residentie-txt-p.1', array('label'=> 'Tekst','type'=> 'textarea','section'=> 'section-id-verwarmingsketel_plaatsen-residentie',) );
		$wp_customize->add_control( 'setting-plaatsing-residentie-button_link', array('label'=> 'Knop-URL','type'=> 'textarea','section'=> 'section-id-verwarmingsketel_plaatsen-residentie',) );
		$wp_customize->add_control( 'setting-plaatsing-residentie-button_text', array('label'=> 'Knop-tekst','type'=> 'textarea','section'=> 'section-id-verwarmingsketel_plaatsen-residentie',) );
		$wp_customize->add_control( 'setting-plaatsing-residentie-txt-h2.2', array('label'=> 'Kop','type'=> 'textarea','section'=> 'section-id-verwarmingsketel_plaatsen-residentie',) );
		$wp_customize->add_control( 'setting-plaatsing-residentie-txt-h3.1', array('label'=> 'Tussenkop','type'=> 'textarea','section'=> 'section-id-verwarmingsketel_plaatsen-residentie',) );
		$wp_customize->add_control( 'setting-plaatsing-residentie-txt-p.2', array('label'=> 'Tekst','type'=> 'textarea','section'=> 'section-id-verwarmingsketel_plaatsen-residentie',) );
		$wp_customize->add_control( 'setting-plaatsing-residentie-txt-h3.2', array('label'=> 'Tussenkop','type'=> 'textarea','section'=> 'section-id-verwarmingsketel_plaatsen-residentie',) );
		$wp_customize->add_control( 'setting-plaatsing-residentie-txt-p.3', array('label'=> 'Tekst','type'=> 'textarea','section'=> 'section-id-verwarmingsketel_plaatsen-residentie',) );
		$wp_customize->add_control( 'setting-plaatsing-residentie-txt-h3.3', array('label'=> 'Tussenkop','type'=> 'textarea','section'=> 'section-id-verwarmingsketel_plaatsen-residentie',) );
		$wp_customize->add_control( 'setting-plaatsing-residentie-txt-p.4', array('label'=> 'Tekst','type'=> 'textarea','section'=> 'section-id-verwarmingsketel_plaatsen-residentie',) );
		$wp_customize->add_control( 'setting-plaatsing-residentie-txt-h3.4', array('label'=> 'Tussenkop','type'=> 'textarea','section'=> 'section-id-verwarmingsketel_plaatsen-residentie',) );
		$wp_customize->add_control( 'setting-plaatsing-residentie-txt-p.5', array('label'=> 'Tekst','type'=> 'textarea','section'=> 'section-id-verwarmingsketel_plaatsen-residentie',) );
		$wp_customize->add_control( 'setting-plaatsing-residentie-txt-h3.5', array('label'=> 'Tussenkop','type'=> 'textarea','section'=> 'section-id-verwarmingsketel_plaatsen-residentie',) );
		$wp_customize->add_control( 'setting-plaatsing-residentie-txt-p.6', array('label'=> 'Tekst','type'=> 'textarea','section'=> 'section-id-verwarmingsketel_plaatsen-residentie',) );
		$wp_customize->add_control( 'setting-plaatsing-residentie-button_link.1', array('label'=> 'Knop-URL','type'=> 'textarea','section'=> 'section-id-verwarmingsketel_plaatsen-residentie',) );
		$wp_customize->add_control( 'setting-plaatsing-residentie-button_text.1', array('label'=> 'Knop-tekst','type'=> 'textarea','section'=> 'section-id-verwarmingsketel_plaatsen-residentie',) );
        /* SECTION */
        //'section-id-heating-installatie' aanpassen! En ook de is_front_page.
        $wp_customize->add_section( 'section-id-verwarmingsketel_plaatsen-residentie', array('title'=>  'Instellingen tekst','description'=>  'Stel de tekst in','active_callback'=> 
        'callback_check_if_page_verwarmingsketel_plaatsen_residentie',
        //wanneer moet deze setting worden getoond
        ) );
    }
    function callback_check_if_page_verwarmingsketel_plaatsen_residentie(){
        if (is_page('verwarmingsketel-plaatsen-residentie')){
        return true;
        }else{
        return false;
        }
    }
	//plaatsing-residentie stop
	// plaatsing-woning start
	function h_customize_verwarmingsketel_plaatsen_woning($wp_customize) {
        /* SETTINGS */
		$wp_customize->add_setting( 'setting-plaatsing-woning-txt-h2.1', array('default'=> '') );
		$wp_customize->add_setting( 'setting-plaatsing-woning-txt-p.1', array('default'=> '') );
		$wp_customize->add_setting( 'setting-plaatsing-woning-button_link', array('default'=> '') );
		$wp_customize->add_setting( 'setting-plaatsing-woning-button_text', array('default'=> '') );
		$wp_customize->add_setting( 'setting-plaatsing-woning-txt-h3.1', array('default'=> '') );
		$wp_customize->add_setting( 'setting-plaatsing-woning-txt-p.2', array('default'=> '') );
		$wp_customize->add_setting( 'setting-plaatsing-woning-txt-h3.2', array('default'=> '') );
		$wp_customize->add_setting( 'setting-plaatsing-woning-txt-p.3', array('default'=> '') );
		$wp_customize->add_setting( 'setting-plaatsing-woning-txt-p.4', array('default'=> '') );
		$wp_customize->add_setting( 'setting-plaatsing-woning-txt-h3.3', array('default'=> '') );
		$wp_customize->add_setting( 'setting-plaatsing-woning-txt-p.5', array('default'=> '') );
		$wp_customize->add_setting( 'setting-plaatsing-woning-txt-h3.4', array('default'=> '') );
		$wp_customize->add_setting( 'setting-plaatsing-woning-txt-p.6', array('default'=> '') );
		$wp_customize->add_setting( 'setting-plaatsing-woning-button_link.1', array('default'=> '') );
		$wp_customize->add_setting( 'setting-plaatsing-woning-button_text.1', array('default'=> '') );
        /* CONTROLS */
        $wp_customize->add_control( 'setting-plaatsing-woning-txt-h2.1', array('label'=> 'Kop','type'=> 'textarea','section'=> 'section-id-verwarmingsketel_plaatsen-woning',) );
		$wp_customize->add_control( 'setting-plaatsing-woning-txt-p.1', array('label'=> 'Tekst','type'=> 'textarea','section'=> 'section-id-verwarmingsketel_plaatsen-woning',) );
		$wp_customize->add_control( 'setting-plaatsing-woning-button_link', array('label'=> 'Knop-URL','type'=> 'textarea','section'=> 'section-id-verwarmingsketel_plaatsen-woning',) );
		$wp_customize->add_control( 'setting-plaatsing-woning-button_text', array('label'=> 'Knop-tekst','type'=> 'textarea','section'=> 'section-id-verwarmingsketel_plaatsen-woning',) );
		$wp_customize->add_control( 'setting-plaatsing-woning-txt-h3.1', array('label'=> 'Tussenkop','type'=> 'textarea','section'=> 'section-id-verwarmingsketel_plaatsen-woning',) );
		$wp_customize->add_control( 'setting-plaatsing-woning-txt-p.2', array('label'=> 'Tekst','type'=> 'textarea','section'=> 'section-id-verwarmingsketel_plaatsen-woning',) );
		$wp_customize->add_control( 'setting-plaatsing-woning-txt-h3.2', array('label'=> 'Tussenkop','type'=> 'textarea','section'=> 'section-id-verwarmingsketel_plaatsen-woning',) );
		$wp_customize->add_control( 'setting-plaatsing-woning-txt-p.3', array('label'=> 'Tekst','type'=> 'textarea','section'=> 'section-id-verwarmingsketel_plaatsen-woning',) );
		$wp_customize->add_control( 'setting-plaatsing-woning-txt-p.4', array('label'=> 'Tekst','type'=> 'textarea','section'=> 'section-id-verwarmingsketel_plaatsen-woning',) );
		$wp_customize->add_control( 'setting-plaatsing-woning-txt-h3.3', array('label'=> 'Tussenkop','type'=> 'textarea','section'=> 'section-id-verwarmingsketel_plaatsen-woning',) );
		$wp_customize->add_control( 'setting-plaatsing-woning-txt-p.5', array('label'=> 'Tekst','type'=> 'textarea','section'=> 'section-id-verwarmingsketel_plaatsen-woning',) );
		$wp_customize->add_control( 'setting-plaatsing-woning-txt-h3.4', array('label'=> 'Tussenkop','type'=> 'textarea','section'=> 'section-id-verwarmingsketel_plaatsen-woning',) );
		$wp_customize->add_control( 'setting-plaatsing-woning-txt-p.6', array('label'=> 'Tekst','type'=> 'textarea','section'=> 'section-id-verwarmingsketel_plaatsen-woning',) );
		$wp_customize->add_control( 'setting-plaatsing-woning-button_link.1', array('label'=> 'Knop-URL','type'=> 'textarea','section'=> 'section-id-verwarmingsketel_plaatsen-woning',) );
		$wp_customize->add_control( 'setting-plaatsing-woning-button_text.1', array('label'=> 'Knop-tekst','type'=> 'textarea','section'=> 'section-id-verwarmingsketel_plaatsen-woning',) );
        /* SECTION */
        //'section-id-heating-installatie' aanpassen! En ook de is_front_page.
        $wp_customize->add_section( 'section-id-verwarmingsketel_plaatsen-woning', array('title'=>  'Instellingen tekst','description'=>  'Stel de tekst in','active_callback'=> 
        'callback_check_if_page_verwarmingsketel_plaatsen_woning',
        //wanneer moet deze setting worden getoond
        ) );
    }
    function callback_check_if_page_verwarmingsketel_plaatsen_woning(){
        if (is_page('verwarmingsketel-plaatsen-woning')){
        return true;
        }else{
        return false;
        }
    }
	//plaatsing-woning stop
	// privacy start 
	function h_customize_privacy($wp_customize) {
        /* SETTINGS */
		$wp_customize->add_setting( 'setting-privacy-h1.1', array('default'=> '') );
		$wp_customize->add_setting( 'setting-privacy-p.1', array('default'=> '') );
		$wp_customize->add_setting( 'setting-privacy-h2.1', array('default'=> '') );
		$wp_customize->add_setting( 'setting-privacy-p.2', array('default'=> '') );
		$wp_customize->add_setting( 'setting-privacy-link.1', array('default'=> '') );
		$wp_customize->add_setting( 'setting-privacy-text.1', array('default'=> '') );
		$wp_customize->add_setting( 'setting-privacy-p.3', array('default'=> '') );
		$wp_customize->add_setting( 'setting-privacy-h2.2', array('default'=> '') );
		$wp_customize->add_setting( 'setting-privacy-p.4', array('default'=> '') );
		$wp_customize->add_setting( 'setting-privacy-link.2', array('default'=> '') );
		$wp_customize->add_setting( 'setting-privacy-text.2', array('default'=> '') );
		$wp_customize->add_setting( 'setting-privacy-p.5', array('default'=> '') );
		$wp_customize->add_setting( 'setting-privacy-h2.3', array('default'=> '') );
		$wp_customize->add_setting( 'setting-privacy-p.6', array('default'=> '') );
		$wp_customize->add_setting( 'setting-privacy-link.3', array('default'=> '') );
		$wp_customize->add_setting( 'setting-privacy-text.3', array('default'=> '') );
		$wp_customize->add_setting( 'setting-privacy-h2.4', array('default'=> '') );
		$wp_customize->add_setting( 'setting-privacy-link.4', array('default'=> '') );
		$wp_customize->add_setting( 'setting-privacy-text.4', array('default'=> '') );
		$wp_customize->add_setting( 'setting-privacy-p.7', array('default'=> '') );
		$wp_customize->add_setting( 'setting-privacy-p.8', array('default'=> '') );
		$wp_customize->add_setting( 'setting-privacy-h2.5', array('default'=> '') );
		$wp_customize->add_setting( 'setting-privacy-link.5', array('default'=> '') );
		$wp_customize->add_setting( 'setting-privacy-text.5', array('default'=> '') );
		$wp_customize->add_setting( 'setting-privacy-p.9', array('default'=> '') );
		$wp_customize->add_setting( 'setting-privacy-h2.6', array('default'=> '') );
		$wp_customize->add_setting( 'setting-privacy-p.10', array('default'=> '') );
		$wp_customize->add_setting( 'setting-privacy-p.11', array('default'=> '') );
		// extra
		$wp_customize->add_setting( 'setting-privacy-h2.7', array('default'=> '') );
		$wp_customize->add_setting( 'setting-privacy-p.12', array('default'=> '') );
		$wp_customize->add_setting( 'setting-privacy-link.6', array('default'=> '') );
		$wp_customize->add_setting( 'setting-privacy-text.6', array('default'=> '') );
		$wp_customize->add_setting( 'setting-privacy-p.13', array('default'=> '') );
		$wp_customize->add_setting( 'setting-privacy-h2.8', array('default'=> '') );
		$wp_customize->add_setting( 'setting-privacy-p.13', array('default'=> '') );
		$wp_customize->add_setting( 'setting-privacy-link.7', array('default'=> '') );
		$wp_customize->add_setting( 'setting-privacy-text.7', array('default'=> '') );
		$wp_customize->add_setting( 'setting-privacy-p.14', array('default'=> '') );
		$wp_customize->add_setting( 'setting-privacy-h2.9', array('default'=> '') );
		$wp_customize->add_setting( 'setting-privacy-p.14', array('default'=> '') );
		$wp_customize->add_setting( 'setting-privacy-link.8', array('default'=> '') );
		$wp_customize->add_setting( 'setting-privacy-text.8', array('default'=> '') );
		$wp_customize->add_setting( 'setting-privacy-p.15', array('default'=> '') );
		$wp_customize->add_setting( 'setting-privacy-h2.10', array('default'=> '') );
		$wp_customize->add_setting( 'setting-privacy-p.15', array('default'=> '') );
		$wp_customize->add_setting( 'setting-privacy-link.9', array('default'=> '') );
		$wp_customize->add_setting( 'setting-privacy-text.9', array('default'=> '') );
		$wp_customize->add_setting( 'setting-privacy-p.16', array('default'=> '') );
        /* CONTROLS */
        $wp_customize->add_control( 'setting-privacy-h1.1', array('label'=> 'Titel','type'=> 'textarea','section'=> 'section-id-privacy',) );
		$wp_customize->add_control( 'setting-privacy-p.1', array('label'=> 'Tekst','type'=> 'textarea','section'=> 'section-id-privacy',) );
		$wp_customize->add_control( 'setting-privacy-h2.1', array('label'=> 'Kop','type'=> 'textarea','section'=> 'section-id-privacy',) );
		$wp_customize->add_control( 'setting-privacy-p.2', array('label'=> 'Tekst','type'=> 'textarea','section'=> 'section-id-privacy',) );
		$wp_customize->add_control( 'setting-privacy-link.1', array('label'=> 'Link-URL','type'=> 'textarea','section'=> 'section-id-privacy',) );
		$wp_customize->add_control( 'setting-privacy-text.1', array('label'=> 'Link-tekst','type'=> 'textarea','section'=> 'section-id-privacy',) );
		$wp_customize->add_control( 'setting-privacy-p.3', array('label'=> 'Tekst','type'=> 'textarea','section'=> 'section-id-privacy',) );
		$wp_customize->add_control( 'setting-privacy-h2.2', array('label'=> 'Kop','type'=> 'textarea','section'=> 'section-id-privacy',) );
		$wp_customize->add_control( 'setting-privacy-p.4', array('label'=> 'Tekst','type'=> 'textarea','section'=> 'section-id-privacy',) );
		$wp_customize->add_control( 'setting-privacy-link.2', array('label'=> 'Link-URL','type'=> 'textarea','section'=> 'section-id-privacy',) );
		$wp_customize->add_control( 'setting-privacy-text.2', array('label'=> 'Link-tekst','type'=> 'textarea','section'=> 'section-id-privacy',) );
		$wp_customize->add_control( 'setting-privacy-p.5', array('label'=> 'Tekst','type'=> 'textarea','section'=> 'section-id-privacy',) );
		$wp_customize->add_control( 'setting-privacy-h2.3', array('label'=> 'Kop','type'=> 'textarea','section'=> 'section-id-privacy',) );
		$wp_customize->add_control( 'setting-privacy-p.6', array('label'=> 'Tekst','type'=> 'textarea','section'=> 'section-id-privacy',) );
		$wp_customize->add_control( 'setting-privacy-link.3', array('label'=> 'Link-URL','type'=> 'textarea','section'=> 'section-id-privacy',) );
		$wp_customize->add_control( 'setting-privacy-text.3', array('label'=> 'Link-tekst','type'=> 'textarea','section'=> 'section-id-privacy',) );
		$wp_customize->add_control( 'setting-privacy-h2.4', array('label'=> 'Kop','type'=> 'textarea','section'=> 'section-id-privacy',) );
		$wp_customize->add_control( 'setting-privacy-link.4', array('label'=> 'Link-URL','type'=> 'textarea','section'=> 'section-id-privacy',) );
		$wp_customize->add_control( 'setting-privacy-text.4', array('label'=> 'Link-tekst','type'=> 'textarea','section'=> 'section-id-privacy',) );
		$wp_customize->add_control( 'setting-privacy-p.7', array('label'=> 'Tekst','type'=> 'textarea','section'=> 'section-id-privacy',) );
		$wp_customize->add_control( 'setting-privacy-p.8', array('label'=> 'Tekst','type'=> 'textarea','section'=> 'section-id-privacy',) );
		$wp_customize->add_control( 'setting-privacy-h2.5', array('label'=> 'Kop','type'=> 'textarea','section'=> 'section-id-privacy',) );
		$wp_customize->add_control( 'setting-privacy-link.5', array('label'=> 'Link-URL','type'=> 'textarea','section'=> 'section-id-privacy',) );
		$wp_customize->add_control( 'setting-privacy-text.5', array('label'=> 'Link-tekst','type'=> 'textarea','section'=> 'section-id-privacy',) );
		$wp_customize->add_control( 'setting-privacy-p.9', array('label'=> 'Tekst','type'=> 'textarea','section'=> 'section-id-privacy',) );
		$wp_customize->add_control( 'setting-privacy-h2.6', array('label'=> 'Kop','type'=> 'textarea','section'=> 'section-id-privacy',) );
		$wp_customize->add_control( 'setting-privacy-p.10', array('label'=> 'Tekst','type'=> 'textarea','section'=> 'section-id-privacy',) );
		$wp_customize->add_control( 'setting-privacy-p.11', array('label'=> 'Tekst','type'=> 'textarea','section'=> 'section-id-privacy',) );
        // extra
		$wp_customize->add_control( 'setting-privacy-h2.7', array('label'=> 'Kop','type'=> 'textarea','section'=> 'section-id-privacy',) );
		$wp_customize->add_control( 'setting-privacy-p.12', array('label'=> 'Tekst','type'=> 'textarea','section'=> 'section-id-privacy',) );
		$wp_customize->add_control( 'setting-privacy-link.6', array('label'=> 'Link-URL','type'=> 'textarea','section'=> 'section-id-privacy',) );
		$wp_customize->add_control( 'setting-privacy-text.6', array('label'=> 'Link-tekst','type'=> 'textarea','section'=> 'section-id-privacy',) );
		$wp_customize->add_control( 'setting-privacy-p.13', array('label'=> 'Tekst','type'=> 'textarea','section'=> 'section-id-privacy',) );
		$wp_customize->add_control( 'setting-privacy-h2.8', array('label'=> 'Kop','type'=> 'textarea','section'=> 'section-id-privacy',) );
		$wp_customize->add_control( 'setting-privacy-p.13', array('label'=> 'Tekst','type'=> 'textarea','section'=> 'section-id-privacy',) );
		$wp_customize->add_control( 'setting-privacy-link.7', array('label'=> 'Link-URL','type'=> 'textarea','section'=> 'section-id-privacy',) );
		$wp_customize->add_control( 'setting-privacy-text.7', array('label'=> 'Link-tekst','type'=> 'textarea','section'=> 'section-id-privacy',) );
		$wp_customize->add_control( 'setting-privacy-p.14', array('label'=> 'Tekst','type'=> 'textarea','section'=> 'section-id-privacy',) );
		$wp_customize->add_control( 'setting-privacy-h2.9', array('label'=> 'Kop','type'=> 'textarea','section'=> 'section-id-privacy',) );
		$wp_customize->add_control( 'setting-privacy-p.14', array('label'=> 'Tekst','type'=> 'textarea','section'=> 'section-id-privacy',) );
		$wp_customize->add_control( 'setting-privacy-link.8', array('label'=> 'Link-URL','type'=> 'textarea','section'=> 'section-id-privacy',) );
		$wp_customize->add_control( 'setting-privacy-text.8', array('label'=> 'Link-tekst','type'=> 'textarea','section'=> 'section-id-privacy',) );
		$wp_customize->add_control( 'setting-privacy-p.15', array('label'=> 'Tekst','type'=> 'textarea','section'=> 'section-id-privacy',) );
		$wp_customize->add_control( 'setting-privacy-h2.10', array('label'=> 'Kop','type'=> 'textarea','section'=> 'section-id-privacy',) );
		$wp_customize->add_control( 'setting-privacy-p.15', array('label'=> 'Tekst','type'=> 'textarea','section'=> 'section-id-privacy',) );
		$wp_customize->add_control( 'setting-privacy-link.9', array('label'=> 'Link-URL','type'=> 'textarea','section'=> 'section-id-privacy',) );
		$wp_customize->add_control( 'setting-privacy-text.9', array('label'=> 'Link-tekst','type'=> 'textarea','section'=> 'section-id-privacy',) );
		$wp_customize->add_control( 'setting-privacy-p.16', array('label'=> 'Tekst','type'=> 'textarea','section'=> 'section-id-privacy',) );
        /* SECTION */
        //'section-id-heating-installatie' aanpassen! En ook de is_front_page.
        $wp_customize->add_section( 'section-id-privacy', array('title'=>  'Instellingen tekst','description'=>  'Stel de tekst in','active_callback'=> 
        'callback_check_if_page_privacy',
        //wanneer moet deze setting worden getoond
        ) );
    }
    function callback_check_if_page_privacy(){
        if (is_page('privacy')){
        return true;
        }else{
        return false;
        }
    }
	//privacy stop

	function h_customize_register($wp_customize) {
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
		$wp_customize->add_control( 'setting-txt-h1', array('label'=> 'Titel','type'=> 'textarea','section'=> 'section-id-heating-attest',) );
		//paragraaf
		//De section aanpassen dus 'section-id-heating-installatie'.
		$wp_customize->add_control( 'setting-txt-p1', array('label'=> 'Tekst','type'=> 'textarea','section'=> 'section-id-heating-attest',) );
		//header 2
		//De section aanpassen dus 'section-id-heating-installatie'.
		$wp_customize->add_control( 'setting-txt-h2', array('label'=> 'Kop','type'=> 'textarea','section'=> 'section-id-heating-attest',) );
		//lijst
		//De section aanpassen dus 'section-id-heating-installatie'.
		$wp_customize->add_control( 'setting-txt-li1', array('label'=> 'Opsomming','type'=> 'textarea','section'=> 'section-id-heating-attest',) );
		$wp_customize->add_control( 'setting-txt-li2', array('label'=> 'Opsomming','type'=> 'textarea','section'=> 'section-id-heating-attest',) );
		$wp_customize->add_control( 'setting-txt-li3', array('label'=> 'Opsomming','type'=> 'textarea','section'=> 'section-id-heating-attest',) );
		$wp_customize->add_control( 'setting-txt-li4', array('label'=> 'Opsomming','type'=> 'textarea','section'=> 'section-id-heating-attest',) );
		$wp_customize->add_control( 'setting-txt-li5', array('label'=> 'Opsomming','type'=> 'textarea','section'=> 'section-id-heating-attest',) );

		/* SECTION */
		//'section-id-heating-installatie' aanpassen! En ook de is_front_page.
		$wp_customize->add_section( 'section-id-heating-attest', array('title'=>  'Instellingen tekst','description'=>  'Stel de tekst in','active_callback'=> 
		'callback_check_if_page_attest',
		//wanneer moet deze setting worden getoond
		) );
	}

	function callback_check_if_page_attest(){
		if (is_page('attesten')){
		return true;
		}else{
		return false;
		}
	}

	function h_customize_over_ons($wp_customize) {
		/* SETTINGS */
		//header 1
		$wp_customize->add_setting( 'setting-over-ons-h1', array('default'=> '') );
		//paragraaf
		$wp_customize->add_setting( 'setting-over-ons-p1', array('default'=> '') );
		//header 2
		$wp_customize->add_setting( 'setting-over-ons-h2', array('default'=> '') );

		/* CONTROLS */
		//header 1
		//De section aanpassen dus 'section-id-heating-installatie'.
		$wp_customize->add_control( 'setting-over-ons-h1', array('label'=> 'Titel','type'=> 'textarea','section'=> 'section-id-heating-over-ons',) );
		//paragraaf
		//De section aanpassen dus 'section-id-heating-installatie'.
		$wp_customize->add_control( 'setting-over-ons-p1', array('label'=> 'Tekst','type'=> 'textarea','section'=> 'section-id-heating-over-ons',) );
		//header 2
		//De section aanpassen dus 'section-id-heating-installatie'.
		$wp_customize->add_control( 'setting-over-ons-h2', array('label'=> 'Kop','type'=> 'textarea','section'=> 'section-id-heating-over-ons',) );

		/* SECTION */
		//'section-id-heating-installatie' aanpassen! En ook de is_front_page.
		$wp_customize->add_section( 'section-id-heating-over-ons', array('title'=>  'Instellingen tekst','description'=>  'Stel de tekst in','active_callback'=> 
		'callback_check_if_page_over_ons',
		//wanneer moet deze setting worden getoond
		) );
	}

	function callback_check_if_page_over_ons(){
		if (is_page('over-ons')){
		return true;
		}else{
		return false;
		}
	}

	function h_customize_home($wp_customize) {
		/* SETTINGS */
		//header 1
		$wp_customize->add_setting( 'setting-home-h1', array('default'=> '') );
		//paragraaf
		$wp_customize->add_setting( 'setting-home-p1', array('default'=> '') );
		//header 2
		$wp_customize->add_setting( 'setting-home-h2.1', array('default'=> '') );
		//paragraaf
		$wp_customize->add_setting( 'setting-home-p2', array('default'=> '') );
		//header 2
		$wp_customize->add_setting( 'setting-home-h2.2', array('default'=> '') );
		//paragraaf
		$wp_customize->add_setting( 'setting-home-p3', array('default'=> '') );

		/* CONTROLS */
		//header 1
		//De section aanpassen dus 'section-id-heating-installatie'.
		$wp_customize->add_control( 'setting-home-h1', array('label'=> 'Titel','type'=> 'textarea','section'=> 'section-id-heating-home',) );
		//paragraaf
		//De section aanpassen dus 'section-id-heating-installatie'.
		$wp_customize->add_control( 'setting-home-p1', array('label'=> 'Tekst','type'=> 'textarea','section'=> 'section-id-heating-home',) );
		//header 2
		//De section aanpassen dus 'section-id-heating-installatie'.
		$wp_customize->add_control( 'setting-home-h2.1', array('label'=> 'Kop','type'=> 'textarea','section'=> 'section-id-heating-home',) );
		//paragraaf
		//De section aanpassen dus 'section-id-heating-installatie'.
		$wp_customize->add_control( 'setting-home-p2', array('label'=> 'Tekst','type'=> 'textarea','section'=> 'section-id-heating-home',) );
		//header 2
		//De section aanpassen dus 'section-id-heating-installatie'.
		$wp_customize->add_control( 'setting-home-h2.2', array('label'=> 'Kop','type'=> 'textarea','section'=> 'section-id-heating-home',) );
		//paragraaf
		//De section aanpassen dus 'section-id-heating-installatie'.
		$wp_customize->add_control( 'setting-home-p3', array('label'=> 'Tekst','type'=> 'textarea','section'=> 'section-id-heating-home',) );

		/* SECTION */
		//'section-id-heating-installatie' aanpassen! En ook de is_front_page.
		$wp_customize->add_section( 'section-id-heating-home', array('title'=>  'Instellingen tekst','description'=>  'Stel de tekst in','active_callback'=> 
		'is_front_page',
		//wanneer moet deze setting worden getoond
		) );
	}

	function h_customize_home_button($wp_customize) {
		/* SETTINGS */
		//header 2
		$wp_customize->add_setting( 'setting-home-button1_h2', array('default'=> '') );
		//paragraaf
		$wp_customize->add_setting( 'setting-home-button1_p', array('default'=> '') );
		//Tekst button
		$wp_customize->add_setting( 'setting-home-button1_txt', array('default'=> 'Maak een afspraak') );
		//Link button
		$wp_customize->add_setting( 'setting-home-button1_link', array('default'=> 'https://wpl3.antonlabeeuw.be/') );

		//header 2
		$wp_customize->add_setting( 'setting-home-button2_h2', array('default'=> '') );
		//paragraaf
		$wp_customize->add_setting( 'setting-home-button2_p', array('default'=> '') );
		//Tekst button
		$wp_customize->add_setting( 'setting-home-button2_txt', array('default'=> 'Maak een afspraak') );
		//Link button
		$wp_customize->add_setting( 'setting-home-button2_link', array('default'=> 'https://wpl3.antonlabeeuw.be/') );

		//header 2
		$wp_customize->add_setting( 'setting-home-button3_h2', array('default'=> '') );
		//paragraaf
		$wp_customize->add_setting( 'setting-home-button3_p', array('default'=> '') );
		//Tekst button
		$wp_customize->add_setting( 'setting-home-button3_txt', array('default'=> 'Maak een afspraak') );
		//Link button
		$wp_customize->add_setting( 'setting-home-button3_link', array('default'=> 'https://wpl3.antonlabeeuw.be/') );


		/* CONTROLS */
		//header 2
		$wp_customize->add_control( 'setting-home-button1_h2', array('label'=> 'Kop','type'=> 'textarea','section'=> 'section-id-heating-home-buttons',) );
		//paragraaf
		$wp_customize->add_control( 'setting-home-button1_p', array('label'=> 'Tekst','type'=> 'textarea','section'=> 'section-id-heating-home-buttons',) );
		//button text
		$wp_customize->add_control( 'setting-home-button1_txt', array('label'=> 'Knop-tekst','type'=> 'textarea','section'=> 'section-id-heating-home-buttons',) );
		//button link
		$wp_customize->add_control( 'setting-home-button1_link', array('label'=> 'Knop-URL','type'=> 'textarea','section'=> 'section-id-heating-home-buttons',) );

		//header 2
		$wp_customize->add_control( 'setting-home-button2_h2', array('label'=> 'Kop','type'=> 'textarea','section'=> 'section-id-heating-home-buttons',) );
		//paragraaf
		$wp_customize->add_control( 'setting-home-button2_p', array('label'=> 'Tekst','type'=> 'textarea','section'=> 'section-id-heating-home-buttons',) );
		//button text
		$wp_customize->add_control( 'setting-home-button2_txt', array('label'=> 'Knop-tekst','type'=> 'textarea','section'=> 'section-id-heating-home-buttons',) );
		//button link
		$wp_customize->add_control( 'setting-home-button2_link', array('label'=> 'Knop-URL','type'=> 'textarea','section'=> 'section-id-heating-home-buttons',) );

		//header 2
		$wp_customize->add_control( 'setting-home-button3_h2', array('label'=> 'Kop','type'=> 'textarea','section'=> 'section-id-heating-home-buttons',) );
		//paragraaf
		$wp_customize->add_control( 'setting-home-button3_p', array('label'=> 'Tekst','type'=> 'textarea','section'=> 'section-id-heating-home-buttons',) );
		//button text
		$wp_customize->add_control( 'setting-home-button3_txt', array('label'=> 'Knop-tekst','type'=> 'textarea','section'=> 'section-id-heating-home-buttons',) );
		//button link
		$wp_customize->add_control( 'setting-home-button3_link', array('label'=> 'Knop-URL','type'=> 'textarea','section'=> 'section-id-heating-home-buttons',) );
		
		/* SECTION */
		//'section-id-heating-installatie' aanpassen! En ook de is_front_page.
		$wp_customize->add_section( 'section-id-heating-home-buttons', array('title'=>  'Instellingen buttons met tekst','description'=>  'Stel de tekst boven en in de button in','active_callback'=> 
		'is_front_page',
		//wanneer moet deze setting worden getoond
		) );
	}

	function h_customize_onderhoud($wp_customize) {
		/* SETTINGS */
		//header 2
		$wp_customize->add_setting( 'setting-onderhoud-h1', array('default'=> '') );
		//paragraaf
		$wp_customize->add_setting( 'setting-onderhoud-p1', array('default'=> '') );
		//Tekst button
		$wp_customize->add_setting( 'setting-onderhoud-button_txt', array('default'=> 'Onderhoud aavragen') );
		//Link button
		$wp_customize->add_setting( 'setting-onderhoud-button_link', array('default'=> 'https://wpl3.antonlabeeuw.be/') );

		//header 2
		$wp_customize->add_setting( 'setting-onderhoud-h2.1', array('default'=> '') );
		//paragraaf
		$wp_customize->add_setting( 'setting-onderhoud-h3.1', array('default'=> '') );
		//paragraaf
		$wp_customize->add_setting( 'setting-onderhoud-p2', array('default'=> '') );
		//header 3
		$wp_customize->add_setting( 'setting-onderhoud-h3.2', array('default'=> '') );
		//paragraaf
		$wp_customize->add_setting( 'setting-onderhoud-p3', array('default'=> '') );
		//header 3
		$wp_customize->add_setting( 'setting-onderhoud-h3.3', array('default'=> '') );
		//paragraaf
		$wp_customize->add_setting( 'setting-onderhoud-p4', array('default'=> '') );
		//header 3
		$wp_customize->add_setting( 'setting-onderhoud-h3.4', array('default'=> '') );
		//paragraaf
		$wp_customize->add_setting( 'setting-onderhoud-p5', array('default'=> '') );

		/* CONTROLS */
		//header 1
		$wp_customize->add_control( 'setting-onderhoud-h1', array('label'=> 'Titel','type'=> 'textarea','section'=> 'section-id-heating-onderhoud',) );
		//paragraaf
		$wp_customize->add_control( 'setting-onderhoud-p1', array('label'=> 'Tekst','type'=> 'textarea','section'=> 'section-id-heating-onderhoud',) );
		//Tekst knop
		//De section aanpassen dus 'section-id-heating-installatie'.
		$wp_customize->add_control( 'setting-onderhoud-button_txt', array('Knop-tekst'=> 'Knop-tekst','type'=> 'input','section'=> 'section-id-heating-onderhoud',) );
		//Link knop
		//De section aanpassen dus 'section-id-heating-installatie'.
		$wp_customize->add_control( 'setting-onderhoud-button_link', array('label'=> 'Knop-URL','type'=> 'textarea','section'=> 'section-id-heating-onderhoud',) );

		//header 2
		$wp_customize->add_control( 'setting-onderhoud-h2.1', array('label'=> 'Kop','type'=> 'textarea','section'=> 'section-id-heating-onderhoud',) );
		//header 3
		$wp_customize->add_control( 'setting-onderhoud-h3.1', array('label'=> 'Tussenkop','type'=> 'textarea','section'=> 'section-id-heating-onderhoud',) );
		//paragraaf
		$wp_customize->add_control( 'setting-onderhoud-p2', array('label'=> 'Tekst','type'=> 'textarea','section'=> 'section-id-heating-onderhoud',) );
		//header 3
		$wp_customize->add_control( 'setting-onderhoud-h3.2', array('label'=> 'Tussenkop','type'=> 'textarea','section'=> 'section-id-heating-onderhoud',) );
		//paragraaf
		$wp_customize->add_control( 'setting-onderhoud-p3', array('label'=> 'Tekst','type'=> 'textarea','section'=> 'section-id-heating-onderhoud',) );
		//header 3
		$wp_customize->add_control( 'setting-onderhoud-h3.3', array('label'=> 'Tussenkop','type'=> 'textarea','section'=> 'section-id-heating-onderhoud',) );
		//paragraaf
		$wp_customize->add_control( 'setting-onderhoud-p4', array('label'=> 'Tekst','type'=> 'textarea','section'=> 'section-id-heating-onderhoud',) );
		//header 4
		$wp_customize->add_control( 'setting-onderhoud-h3.4', array('label'=> 'Tussenkop','type'=> 'textarea','section'=> 'section-id-heating-onderhoud',) );
		//paragraaf
		$wp_customize->add_control( 'setting-onderhoud-p5', array('label'=> 'Tekst','type'=> 'textarea','section'=> 'section-id-heating-onderhoud',) );

		/* SECTION */
		//wanneer moet deze setting worden getoond
		$wp_customize->add_section( 'section-id-heating-onderhoud', array('title'=>  'Instellingen tekst','description'=>  'Stel de tekst in', 'active_callback'=> 
		'callback_check_if_page_onderhoud',
		//wanneer moet deze setting worden getoond
		) );
	}

	function h_customize_onderhoud_list($wp_customize) {
		/* SETTINGS */
		//header 1
		$wp_customize->add_setting( 'setting-onderhoud-list-h2', array('default'=> '') );
		//paragraaf
		$wp_customize->add_setting( 'setting-onderhoud-list-p1', array('default'=> '') );
		//li1
		$wp_customize->add_setting( 'setting-onderhoud-list-li1', array('default'=> '') );
		//li2
		$wp_customize->add_setting( 'setting-onderhoud-list-li2', array('default'=> '') );
		//li3
		$wp_customize->add_setting( 'setting-onderhoud-list-li3', array('default'=> '') );
		//li4
		$wp_customize->add_setting( 'setting-onderhoud-list-li4', array('default'=> '') );
		//li5
		$wp_customize->add_setting( 'setting-onderhoud-list-li5', array('default'=> '') );
		//li6
		$wp_customize->add_setting( 'setting-onderhoud-list-li6', array('default'=> '') );
		//li7
		$wp_customize->add_setting( 'setting-onderhoud-list-li7', array('default'=> '') );
		//li8
		$wp_customize->add_setting( 'setting-onderhoud-list-li8', array('default'=> '') );
		//li9
		$wp_customize->add_setting( 'setting-onderhoud-list-li9', array('default'=> '') );
		//li10
		$wp_customize->add_setting( 'setting-onderhoud-list-li', array('default'=> '') );
		//paragraaf
		$wp_customize->add_setting( 'setting-onderhoud-list-p2', array('default'=> '') );
		
		/* CONTROLS */
		//header 1
		$wp_customize->add_control( 'setting-onderhoud-list-h2', array('label'=> 'Kop','type'=> 'textarea','section'=> 'section-id-heating-onderhoud-list',) );
		//paragraaf
		$wp_customize->add_control( 'setting-onderhoud-list-p1', array('label'=> 'Tekst','type'=> 'textarea','section'=> 'section-id-heating-onderhoud-list',) );
		//li1
		$wp_customize->add_control( 'setting-onderhoud-list-li1', array('label'=> 'Opsomming','type'=> 'textarea','section'=> 'section-id-heating-onderhoud-list',) );
		//li2
		$wp_customize->add_control( 'setting-onderhoud-list-li2', array('label'=> 'Opsomming','type'=> 'textarea','section'=> 'section-id-heating-onderhoud-list',) );
		//li3
		$wp_customize->add_control( 'setting-onderhoud-list-li3', array('label'=> 'Opsomming','type'=> 'textarea','section'=> 'section-id-heating-onderhoud-list',) );
		//li4
		$wp_customize->add_control( 'setting-onderhoud-list-li4', array('label'=> 'Opsomming','type'=> 'textarea','section'=> 'section-id-heating-onderhoud-list',) );
		//li5
		$wp_customize->add_control( 'setting-onderhoud-list-li5', array('label'=> 'Opsomming','type'=> 'textarea','section'=> 'section-id-heating-onderhoud-list',) );
		//li6
		$wp_customize->add_control( 'setting-onderhoud-list-li6', array('label'=> 'Opsomming','type'=> 'textarea','section'=> 'section-id-heating-onderhoud-list',) );
		//li7
		$wp_customize->add_control( 'setting-onderhoud-list-li7', array('label'=> 'Opsomming','type'=> 'textarea','section'=> 'section-id-heating-onderhoud-list',) );
		//p2
		$wp_customize->add_control( 'setting-onderhoud-list-p2', array('label'=> 'Tekst','type'=> 'textarea','section'=> 'section-id-heating-onderhoud-list',) );

		/* SECTION */
		//wanneer moet deze setting worden getoond
		$wp_customize->add_section( 'section-id-heating-onderhoud-list', array('title'=>  'Instellingen lijst','description'=>  'Stel de tekst in', 'active_callback'=> 
		'callback_check_if_page_onderhoud',
		//wanneer moet deze setting worden getoond
		) );
	}

	function callback_check_if_page_onderhoud(){
		if (is_page('onderhoud')){
		return true;
		}else{
		return false;
		}
	}

	function h_customize_realisatie($wp_customize) {
		/* SETTINGS */
		//header 1
		$wp_customize->add_setting( 'setting-realisaties-h1', array('default'=> '') );
		//paragraaf
		$wp_customize->add_setting( 'setting-realisaties-p1', array('default'=> '') );
		
		/* CONTROLS */
		//header 1
		$wp_customize->add_control( 'setting-realisaties-h1', array('label'=> 'Titel','type'=> 'textarea','section'=> 'section-id-heating-realisaties',) );
		//paragraaf
		$wp_customize->add_control( 'setting-realisaties-p1', array('label'=> 'Tekst','type'=> 'textarea','section'=> 'section-id-heating-realisaties',) );

		/* SECTION */
		//wanneer moet deze setting worden getoond
		$wp_customize->add_section( 'section-id-heating-realisaties', array('title'=>  'Instellingen tekst','description'=>  'Stel de tekst in', 'active_callback'=> 
		'callback_check_if_page_realisaties',
		//wanneer moet deze setting worden getoond
		) );
	}

	function callback_check_if_page_realisaties(){
		if (is_page('realisatie')){
		return true;
		}else{
		return false;
		}
	}

	function h_customize_contact($wp_customize) {
		/* SETTINGS */
		//header 1
		$wp_customize->add_setting( 'setting-contact-h1', array('default'=> '') );
		//paragraaf
		$wp_customize->add_setting( 'setting-contact-p1', array('default'=> '') );

		//header 
		$wp_customize->add_setting( 'setting-contact-h2', array('default'=> '') );
		//paragraaf 2
		$wp_customize->add_setting( 'setting-contact-p2', array('default'=> '') );
		//paragraaf 3 
		$wp_customize->add_setting( 'setting-contact-p3', array('default'=> '') );
		//paragraaf 4
		$wp_customize->add_setting( 'setting-contact-p4', array('default'=> '') );
		//paragraaf 5
		$wp_customize->add_setting( 'setting-contact-p5', array('default'=> '') );
		//link 1
		$wp_customize->add_setting( 'setting-contact-a', array('default'=> '') );
		
		/* CONTROLS */
		//header 1
		$wp_customize->add_control( 'setting-contact-h1', array('label'=> 'Titel','type'=> 'textarea','section'=> 'section-id-heating-contact',) );
		//paragraaf
		$wp_customize->add_control( 'setting-contact-p1', array('label'=> 'Tekst','type'=> 'textarea','section'=> 'section-id-heating-contact',) );
		//header 2
		$wp_customize->add_control( 'setting-contact-h2', array('label'=> 'Kop','type'=> 'textarea','section'=> 'section-id-heating-contact',) );
		//paragraaf
		$wp_customize->add_control( 'setting-contact-p2', array('label'=> 'Tekst','type'=> 'textarea','section'=> 'section-id-heating-contact',) );
		//paragraaf
		$wp_customize->add_control( 'setting-contact-p3', array('label'=> 'Tekst','type'=> 'textarea','section'=> 'section-id-heating-contact',) );
		//paragraaf
		$wp_customize->add_control( 'setting-contact-p4', array('label'=> 'Tekst','type'=> 'textarea','section'=> 'section-id-heating-contact',) );
		//paragraaf
		$wp_customize->add_control( 'setting-contact-p5', array('label'=> 'Tekst','type'=> 'textarea','section'=> 'section-id-heating-contact',) );
		//link
		$wp_customize->add_control( 'setting-contact-a', array('label'=> 'Link-tekst','type'=> 'textarea','section'=> 'section-id-heating-contact',) );

		/* SECTION */
		//wanneer moet deze setting worden getoond
		$wp_customize->add_section( 'section-id-heating-contact', array('title'=>  'Instellingen tekst','description'=>  'Stel de tekst in', 'active_callback'=> 
		'callback_check_if_page_contact',
		//wanneer moet deze setting worden getoond
		) );
	}

	function callback_check_if_page_contact(){
		if (is_page('contact')){
		return true;
		}else{
		return false;
		}
	}

	function h_customize_afspraak_ingelogd($wp_customize) {
		/* SETTINGS */
		//header 1
		$wp_customize->add_setting( 'setting-afspraak-ingelogd-h1', array('default'=> '') );
		//header 2
		$wp_customize->add_setting( 'setting-afspraak-ingelogd-h2', array('default'=> '') );
		//paragraaf
		$wp_customize->add_setting( 'setting-afspraak-ingelogd-p1', array('default'=> '') );
		//button tekst
		$wp_customize->add_setting( 'setting-afspraak-ingelogd-button-txt', array('default'=> '') );
		//button tekst
		$wp_customize->add_setting( 'setting-afspraak-ingelogd-button-link', array('default'=> '') );
		//paragraaf
		$wp_customize->add_setting( 'setting-afspraak-ingelogd-p2', array('default'=> '') );
		//header 2
		$wp_customize->add_setting( 'setting-afspraak-ingelogd-h3', array('default'=> '') );

		
		/* CONTROLS */
		//header 1
		$wp_customize->add_control( 'setting-afspraak-ingelogd-h1', array('label'=> 'Titel','type'=> 'textarea','section'=> 'section-id-heating-afspraak-ingelogd',) );
		//header 2
		$wp_customize->add_control( 'setting-afspraak-ingelogd-h2', array('label'=> 'Kop','type'=> 'textarea','section'=> 'section-id-heating-afspraak-ingelogd',) );
		//paragraaf
		$wp_customize->add_control( 'setting-afspraak-ingelogd-p1', array('label'=> 'Tekst als je niet bent ingelogd','type'=> 'textarea','section'=> 'section-id-heating-afspraak-ingelogd',) );
		//button txt
		$wp_customize->add_control( 'setting-afspraak-ingelogd-button-txt', array('label'=> 'Knop-tekst als je niet bent ingelogd','type'=> 'textarea','section'=> 'section-id-heating-afspraak-ingelogd',) );
		//button link
		$wp_customize->add_control( 'setting-afspraak-ingelogd-button-link', array('label'=> 'Knop-link als je niet bent ingelogd','type'=> 'textarea','section'=> 'section-id-heating-afspraak-ingelogd',) );
		//paragraaf
		$wp_customize->add_control( 'setting-afspraak-ingelogd-p2', array('label'=> 'Tekst als je bent ingelogd','type'=> 'textarea','section'=> 'section-id-heating-afspraak-ingelogd',) );
		//header 3
		$wp_customize->add_control( 'setting-afspraak-ingelogd-h3', array('label'=> 'Tijdstip','type'=> 'textarea','section'=> 'section-id-heating-afspraak-ingelogd',) );

		/* SECTION */
		//wanneer moet deze setting worden getoond
		$wp_customize->add_section( 'section-id-heating-afspraak-ingelogd', array('title'=>  'Instellingen tekst','description'=>  'Stel de tekst in', 'active_callback'=> 
		'callback_check_if_page_afspraak_ingelogd',
		//wanneer moet deze setting worden getoond
		) );
	}

	function callback_check_if_page_afspraak_ingelogd(){
		if (is_page('afspraak-ingelogd')){
		return true;
		}else{
		return false;
		}
	}

	function h_customize_installatie_ingelogd($wp_customize) {
		/* SETTINGS */
		//header 1
		$wp_customize->add_setting( 'setting-installatie-ingelogd-h1', array('default'=> '') );

		/* CONTROLS */
		//header 1
		$wp_customize->add_control( 'setting-installatie-ingelogd-h1', array('label'=> 'Titel','type'=> 'textarea','section'=> 'section-id-heating-installatie-ingelogd',) );

		/* SECTION */
		//wanneer moet deze setting worden getoond
		$wp_customize->add_section( 'section-id-heating-installatie-ingelogd', array('title'=>  'Instellingen tekst','description'=>  'Stel de tekst in', 'active_callback'=> 
		'callback_check_if_page_afspraak_installatie',
		//wanneer moet deze setting worden getoond
		) );
	}

	function callback_check_if_page_afspraak_installatie(){
		if (is_page('installatie-ingelogd')){
		return true;
		}else{
		return false;
		}
	}

	function h_customize_ingelogd_jouw_profiel($wp_customize) {
		/* SETTINGS */
		//header 1
		$wp_customize->add_setting( 'setting-jouw-profiel-h1', array('default'=> '') );

		/* CONTROLS */
		//header 1
		$wp_customize->add_control( 'setting-jouw-profiel-h1', array('label'=> 'Titel','type'=> 'textarea','section'=> 'section-id-heating-jouw-profiel',) );

		/* SECTION */
		//wanneer moet deze setting worden getoond
		$wp_customize->add_section( 'section-id-heating-jouw-profiel', array('title'=>  'Instellingen tekst','description'=>  'Stel de tekst in', 'active_callback'=> 
		'callback_check_if_page_jouw_profiel',
		//wanneer moet deze setting worden getoond
		) );
	}

	function callback_check_if_page_jouw_profiel(){
		if (is_page('jouw-profiel')){
		return true;
		}else{
		return false;
		}
	}

	function h_customize_banner($wp_customize) {
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
		$wp_customize->add_control( 'setting-txt-banner', array('label'=> 'Banner tekst','type'=> 'textarea','section'=> 'section-id-heating-banner',) );
		//Tekst knop
		//De section aanpassen dus 'section-id-heating-installatie'.
		$wp_customize->add_control( 'setting-txt-btn', array('label'=> 'Banner knop-tekst','type'=> 'input','section'=> 'section-id-heating-banner',) );
		//Link knop
		//De section aanpassen dus 'section-id-heating-installatie'.
		$wp_customize->add_control( 'setting-txt-btnlink', array('label'=> 'Banner knop-URL','type'=> 'textarea','section'=> 'section-id-heating-banner',) );

		/* SECTION */
		//'section-id-heating-installatie' aanpassen! En ook de is_front_page.
		$wp_customize->add_section( 'section-id-heating-banner', array('title'=>  'Instellingen banner','description'=>  'Stel de tekst in', 
		//wanneer moet deze setting worden getoond
		) );
	}
	
	add_action( 'customize_register', 'h_customize_ingelogd_jouw_profiel');
	add_action( 'customize_register', 'h_customize_privacy');
	add_action( 'customize_register', 'h_customize_installatie_ingelogd');
	add_action( 'customize_register', 'h_customize_offerte');
	add_action( 'customize_register', 'h_customize_afspraak_ingelogd');
	add_action( 'customize_register', 'h_customize_contact');
	add_action( 'customize_register', 'h_customize_realisatie');
	add_action( 'customize_register', 'h_customize_verwarmingsketel_plaatsen');
	add_action( 'customize_register', 'h_customize_verwarmingsketel_plaatsen_residentie');
	add_action( 'customize_register', 'h_customize_verwarmingsketel_plaatsen_woning');
	add_action( 'customize_register', 'h_customize_onderhoud_list');
	add_action( 'customize_register', 'h_customize_onderhoud');
	add_action( 'customize_register', 'h_customize_home_button');
	add_action( 'customize_register', 'h_customize_home');
	add_action( 'customize_register', 'h_customize_over_ons');
	add_action( 'customize_register', 'h_customize_banner');
	add_action( 'customize_register', 'h_customize_register');
	add_action( 'customize_register', 'h_customize_oplossing');

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
	add_action( 'init', 'h_register_carousels', 0);
	add_action( 'add_meta_boxes', 'h_add_custom_box' );
    add_action( 'save_post', 'h_save_postdata' );
    add_action( 'admin_enqueue_scripts', 'p_admin_css_js' );
?>