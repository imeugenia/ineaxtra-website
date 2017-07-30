<?php

function wpt_theme_styles() {
}
// function wpbootstrap_scripts_with_jquery() {
// 	// Register the script like this for a theme:
	
// 	// For either a plugin or a theme, you can then enqueue the script:
// 	wp_enqueue_script( 'custom-script' );
// }
// add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );
function wpt_theme_js() {
	// wp_register_script( 'bootstrap-script', get_template_directory_uri() . '/js/vendor/bootstrap.min.js', array( 'jquery' ) );
	wp_enqueue_script( 'bootstrap-script', get_template_directory_uri() . '/js/vendor/bootstrap.min.js', array( 'jquery' ), null , true );

	// wp_register_script( 'modernizr_js', get_template_directory_uri() . '/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js', '', '', false );
	wp_enqueue_script( 'modernizr_js',  get_template_directory_uri() . '/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js', '', null , false );

	wp_register_script( 'main_js', get_template_directory_uri() . '/js/main.js', array( 'jquery' ), time(), true );
	wp_enqueue_script( 'main_js' );

		//,  get_template_directory_uri() . '/js/main.js', array('jquery'), null , true );

	// wp_register_script( 'typed_js', get_template_directory_uri() . '/js/typed.js', array( 'jquery' ) );
	wp_enqueue_script( 'typed_js',  get_template_directory_uri() . '/js/typed.js', array('jquery'), null , true );
}
add_action( 'wp_enqueue_scripts', 'wpt_theme_js' );


add_theme_support( 'menus' );
function register_theme_menus() {
	register_nav_menus(
		array(
			'primary-menu' => __( 'Primary Menu' ),
			'language-menu' => __( 'Language menu' ) 
		)
	);
}
add_action( 'init', 'register_theme_menus' );

add_filter( 'pre_get_posts' , 'my_pre_get_posts' );

function my_pre_get_posts( $query ) {

	if( isset($query->query_vars['post_type']) && $query->query_vars['post_type'] == 'what_we_do_post' ) {
		
		$query->set('orderby', 'ID');		 
		$query->set('order', 'ASC'); 
		
	}
	return $query;
}

add_action('pre_get_posts', 'my_pre_get_posts');


add_theme_support( 'custom-logo' );


if ( function_exists('register_sidebar') ) {
	register_sidebar( array(
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>',
		) 
	);
}

the_widget('qTranslateXWidget', array('type' => 'text', 'hide-title' => true) );


add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'active';
    }
    return $classes;
}


?>