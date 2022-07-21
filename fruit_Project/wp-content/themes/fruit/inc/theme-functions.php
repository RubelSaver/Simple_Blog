<?php


/**
* Fruit Custom Post Type
*/

if( ! class_exists( 'Fruit_Banner' ) ) :
	class fruitBanner {
		public static $post_type 		= 'banner';
		public static $menu_position	= 7;
		public static $taxonomy 		= 'Banner_category'; 
	
		public static function register() {
	
			// Title
			$labels = array(
				'name'					=> esc_html__( 'banner Lists', 'fruit_shop' ),
				'singular_name'			=> esc_html__( 'banner', 'fruit_shop' ),
				'add_new'				=> esc_html__( 'Add New', 'fruit_shop' ),
				'add_new_item'			=> esc_html__( 'Add New banner', 'fruit_shop' ),
				'edit_item'				=> esc_html__( 'Edit banner', 'fruit_shop' ),
				'new_item'				=> esc_html__( 'New banner', 'fruit_shop' ),
				'view_item'				=> esc_html__( 'View banner', 'fruit_shop' ),
				'search_items'			=> esc_html__( 'Search banner', 'fruit_shop' ),
				'not_found'				=> esc_html__( 'No banner found', 'fruit_shop' ),
				'not_found_in_trash'	=> esc_html__( 'No banner found in trash', 'fruit_shop' ),
				'parent_item_color'		=> '',
				'menu_name'				=> esc_html__( 'banner', 'fruit_shop' )
			);
	
			// Options
			$args = array(
				'labels'				=> $labels,
				'public'				=> false,
				'public_queryable'		=> true,
				'show_ui'				=> true,
				'show_in_menu'			=> true,
				'query_var'				=> true,
				'rewrite'				=> array( 'slug' => self::$post_type ),
				'capability_type'		=> 'post',
				'has_archive'			=> false,
				'hierarchical'			=> false,
				'menu_position'			=> self::$menu_position,
				'menu_icon'				=> 'dashicons-format-image',
				'supports'				=> array( 'title', 'thumbnail', 'editor')
			);
	
			$labels = apply_filters( 'presscore_post_type_' . self::$post_type . '_labels', $labels );
			$args = apply_filters( 'presscore_post_type_' . self::$post_type . '_args', $args );
	
			register_post_type( self::$post_type, $args );
			flush_rewrite_rules();
	
			/* setup taxonomy */
	
			// titles
			$texanomy_labels = array(
				'name'             => esc_html__( 'banner Categories',        'fruit_shop' ),
				'singular_name'    => esc_html__( 'banner Category',          'fruit_shop' ),
				'all_items'        => esc_html__( 'banner Categories',        'fruit_shop' ),
				'parent_item'      => esc_html__( 'Parent banner Category',   'fruit_shop' ),
				'parent_item_colon'=> esc_html__( 'Parent banner Category:',  'fruit_shop' ),
				'edit_item'        => esc_html__( 'Edit banner',             'fruit_shop' ), 
				'update_item'      => esc_html__( 'Update banner',           'fruit_shop' ),
				'add_new_item'     => esc_html__( 'Add New banner Category',  'fruit_shop' ),
				'new_item_name'    => esc_html__( 'New banner Name',          'fruit_shop' ),
				'menu_name'        => esc_html__( 'banner Categories',        'fruit_shop' )
			);
	
			$taxonomy_args = array(
				'hierarchical'          => true,
				'public'                => true,
				'labels'                => $texanomy_labels,
				'show_ui'               => true,
				'rewrite'               => array('slug' => 'banner_category'),
				'show_admin_column'	=> true,
			);
	
			$taxonomy_args = apply_filters( 'presscore_taxonomy_' . self::$taxonomy . '_args', $taxonomy_args );
	
			register_taxonomy( self::$taxonomy, array( self::$post_type ), $taxonomy_args );
	
		}
	}
	endif;
	
	if( ! function_exists( 'Fruit_Banner') ) :
		function Fruit_Banner() {
			fruitBanner::register();
		}
	endif;
	add_action( 'init', 'Fruit_Banner', 10 );
