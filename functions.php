<?php

function gak_assets() {
	wp_enqueue_style( 'custom-font', 'https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600&display=swap', false );
	wp_enqueue_style( 'slick', get_template_directory_uri() . '/css/slick.css', array(), '1.0', 'all');
	wp_enqueue_style( 'aos', get_template_directory_uri() . '/css/aos.css', array(), '1.0', 'all');
	wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css', array(), '1.0', 'all');
	wp_enqueue_script( 'jquery' );
  wp_enqueue_script( 'plugins', get_template_directory_uri() . '/js/plugins.js', array(), '1.0',  true );
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/js/slick.js', array(), '1.0',  true );
	wp_enqueue_script( 'aosjs', get_template_directory_uri() . '/js/aos.js', array(), '1.0',  true );
}
add_action( 'wp_enqueue_scripts', 'gak_assets' );
// Fully Disable Gutenberg editor.
add_filter('use_block_editor_for_post_type', '__return_false', 10);
// Don't load Gutenberg-related stylesheets.
add_action( 'wp_enqueue_scripts', 'remove_block_css', 100 );
function remove_block_css() {
wp_dequeue_style( 'wp-block-library' ); // Wordpress core
wp_dequeue_style( 'wp-block-library-theme' ); // Wordpress core
wp_dequeue_style( 'wc-block-style' ); // WooCommerce
wp_dequeue_style( 'storefront-gutenberg-blocks' ); // Storefront theme
}
// Email Encode
if ( function_exists( 'eae_encode_emails' ) )  {
  add_filter( 'acf/load_value', 'eae_encode_emails' );
}
// Theme Security
function remove_version() {return '';}
add_filter('the_generator', 'remove_version');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('xmlrpc_rsd_apis', 'rest_output_rsd');
remove_action('wp_head', 'rest_output_link_wp_head');
remove_action('template_redirect', 'rest_output_link_header', 11, 0);
remove_action('wp_head', 'rsd_link');
remove_action('welcome_panel', 'wp_welcome_panel');
add_filter( 'auto_plugin_update_send_email', '__return_false' );
add_filter( 'auto_theme_update_send_email', '__return_false' );
function wpb_remove_version() { return ''; }
add_filter('the_generator', 'wpb_remove_version');
// Header settings
header("Permissions-Policy: accelerometer 'none' ; ambient-light-sensor 'none' ; autoplay 'none' ; camera 'none' ; encrypted-media 'none' ; fullscreen 'none' ; geolocation 'none' ; gyroscope 'none' ; magnetometer 'none' ; microphone 'none' ; midi 'none' ; payment 'none' ; speaker 'none' ; sync-xhr 'none' ; usb 'none' ; notifications 'none' ; vibrate 'none' ; push 'none' ; vr 'none' ");
header('X-Content-Type-Options: nosniff');
header('X-Frame-Options: SAMEORIGIN');
header('X-XSS-Protection: 1; mode=block');
header('Strict-Transport-Security: max-age=31536000;');
header('Referrer-Policy: same-origin');
// Theme Settings
if( function_exists('acf_add_options_page') ) {
  acf_add_options_page(array(
    'page_title'  => 'Site Settings : General content used throughout the theme',
    'menu_title' => 'Site Settings',
    'menu_slug'  => 'theme-general-settings',
    'capability' => 'edit_posts',
    'redirect'  => false
  ));
}
add_filter( 'get_user_option_admin_color', 'update_user_option_admin_color', 5 );
function update_user_option_admin_color( $color_scheme ) {
    $color_scheme = 'midnight';
    return $color_scheme;
}
// ONLY ADD IF NEEDED
/*
acf_add_options_sub_page(array(
	'page_title' 	=> 'Service Navigation',
	'menu_title'	=> 'Service Navigation',
	'parent_slug'	=> 'theme-general-settings',
));
acf_add_options_sub_page(array(
	'page_title' 	=> 'Theme Footer Settings',
	'menu_title'	=> 'Footer',
	'parent_slug'	=> 'theme-general-settings',
));*/
remove_action('welcome_panel', 'wp_welcome_panel');
add_theme_support( 'responsive-embeds' );
add_theme_support( 'title-tag' );
function excerpt($limit) {
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  }
  $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
  return $excerpt;
}
function content($limit) {
  $content = explode(' ', get_the_content(), $limit);
  if (count($content)>=$limit) {
    array_pop($content);
    $content = implode(" ",$content).'...';
  } else {
    $content = implode(" ",$content);
  }
  $content = preg_replace('/[.+]/','', $content);
  $content = apply_filters('the_content', $content);
  $content = str_replace(']]>', ']]>', $content);
  return $content;
}
add_action( 'after_setup_theme', 'gakdesign_setup' );
if ( ! function_exists( 'gakdesign_setup' ) ):
function gakdesign_setup() {
	// This theme uses post thumbnails
	add_theme_support( 'post-thumbnails' );
	// Add default posts and comments RSS feed links to head
	add_theme_support( 'automatic-feed-links' );
	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Navigation', 'basetheme' ),
		'mobile' => __( 'Mobile Navigation', 'basetheme' ),
		'footer' => __( 'Footer Menu', 'basetheme' ),
	) );
}
endif;
// Featured Image text
function custom_admin_post_thumbnail_html( $content ) {
    return $content = str_replace( __( 'Set featured image' ), __( 'Image dimensions 1920x1080' ), $content);
}
add_filter( 'admin_post_thumbnail_html', 'custom_admin_post_thumbnail_html' );
//COMMENTS
//Remove comments in its entirety
// Removes from admin menu
add_action( 'admin_menu', 'pk_remove_admin_menus' );
function pk_remove_admin_menus() {
		remove_menu_page( 'edit-comments.php' );
}
// Removes from post and pages
add_action('init', 'pk_remove_comment_support', 100);
function pk_remove_comment_support() {
	remove_post_type_support( 'post', 'comments' );
	remove_post_type_support( 'page', 'comments' );
}
// Removes from admin bar
add_action( 'wp_before_admin_bar_render', 'pk_remove_comments_admin_bar' );
function pk_remove_comments_admin_bar() {
		global $wp_admin_bar;
		$wp_admin_bar->remove_menu('comments');
}
// Registers an editor stylesheet for the theme
function wpdocs_theme_add_editor_styles() {add_editor_style( 'css/custom-editor-style.css' );}
add_action( 'admin_init', 'wpdocs_theme_add_editor_styles' );
// Remove query strings from static resources
function remove_query_strings( $src ) {
    $parts = explode( '?', $src );
    return $parts[0];
}
add_filter( 'script_loader_src', 'remove_query_strings', 15, 1 );
add_filter( 'style_loader_src', 'remove_query_strings', 15, 1 );
// Gak Support Menu 
function add_custom_toolbar_menu( $wp_admin_bar ) {
    $args = array(
        'id' => 'custom-menu',
        'title' => __( 'Gak Design Support', 'textdomain' ),
        'href' => 'mailto:support@gakdesign.zendesk.com'
    );
    $wp_admin_bar->add_menu( $args );
    $wp_admin_bar->add_node(
        array(
            'parent' => 'custom-menu',
            'id' => 'custom-menu-item',
            'title' => __( 'Contact the support desk', 'textdomain' ),
            'href' => 'mailto:support@gakdesign.zendesk.com'
        )
    );
}
add_action( 'admin_bar_menu', 'add_custom_toolbar_menu', 999 );
// Limit revisions 
if (!defined('WP_POST_REVISIONS')) define('WP_POST_REVISIONS', 5);
if (!defined('WP_POST_REVISIONS')) define('WP_POST_REVISIONS', false);