<?php 	

	/* Enable custom logo */
	function my_custom_logo() {
	$args = array(
		'height' => 100,
		'width'	=> 100,
		'flex-height' => true,
		'flex-width' => true,
		);
	add_theme_support( 'custom-logo', $args );
	}
	add_action('after_setup_theme','my_custom_logo');

	/*Enable custom header*/
	function my_custom_header() {
	$args = array(
		'width' => 960,
		'height' => 400,
		'flex-width' => true,
		'flex-height' => true,
		);
	add_theme_support('custom-header', $args);
	}
	add_action('after_setup_theme', 'my_custom_header');


	/*Disable Gutengerg*/
	add_filter('use_block_editor_for_post', '__return_false', 10);

	/*Enable sidebar*/
	function sidebar_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Main Sidebar' ),
        'id'            => 'sidebar-1',
        'before_widget' => '<div class="widget-sidebar">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Footer Sidebar' ),
        'id'            => 'sidebar-2',
        'before_widget' => '<div class="widget-footer">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Category Sidebar' ),
        'id'            => 'sidebar-3',
        'before_widget' => '<div class="widget-sidebar">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );
	}
	add_action( 'widgets_init', 'sidebar_widgets_init' );

	/*Enable menu*/
	function register_my_menus() {
		register_nav_menus(
			array(
				'header-menu' => __( 'Header Menu' ) ,
				)
			);
	}
	add_action('init', 'register_my_menus');

?>


