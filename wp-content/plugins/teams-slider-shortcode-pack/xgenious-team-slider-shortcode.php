<?php
/********************************

Plugin Name: Teams Slider Shortcode pack 
Plugin URI: https://codecanyon.net/user/xgenious/portfolio/
Description:  Teams Slider Shortcode Collection Is a Teams Slider shortcode collection for WordPress, it's lightweight and high efficiency to help you build any Teams Slider design quickly.
Version: 1.0.0
Author: Xgenious
Author URI: https://codecanyon.net/user/xgenious

*********************************/
/**
 * @package xgenious teams slider shortcode collection 
 * @version 1.0
 *
**/
if(!defined('ABSPATH')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

/*Define the base path of plugins*/
define( 'XGENIOUS_TEAMS_SLIDER_ADD_ONS_PACK_PATH', plugin_dir_path( __FILE__ ));
define( 'XGENIOUS_TEAMS_SLIDER_ADD_ONS_PACK_URL', plugins_url('', __FILE__));

/*set defendecy for to work this plugin*/


	//all file called here which one is depends on 
function Xgenious_teams_slider_add_ons_pack_script_and_style() {

	// Enqueue all stylesheet.
	wp_enqueue_style( 'owl-carousel', XGENIOUS_TEAMS_SLIDER_ADD_ONS_PACK_URL .'/assets/css/owl.carousel.min.css', array(), '2.2.1' );
	wp_enqueue_style( 'font-awesome', XGENIOUS_TEAMS_SLIDER_ADD_ONS_PACK_URL .'/assets/css/font-awesome.css', array(), '4.7' );
	wp_enqueue_style( 'xgenious-team-custom-css', XGENIOUS_TEAMS_SLIDER_ADD_ONS_PACK_URL .'/assets/css/xgenious-team-slider-custom.css', array(), '1.0.0' );
	
	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_script( 'owl-carousel', XGENIOUS_TEAMS_SLIDER_ADD_ONS_PACK_URL .'/assets/js/owl.carousel.min.js', array('jquery'), '2.2.1', true );

}
add_action( 'wp_enqueue_scripts', 'Xgenious_teams_slider_add_ons_pack_script_and_style' );

function Xgenious_teams_slider_admin_css(){
	wp_enqueue_style( 'xgenious-team-slider-metabox-css', XGENIOUS_TEAMS_SLIDER_ADD_ONS_PACK_URL.'/assets/css/xgenious-metabox-css.css', array(), '1.0.0' );
	wp_enqueue_style( 'xgenious-team-slider-admin-dashboard-css', XGENIOUS_TEAMS_SLIDER_ADD_ONS_PACK_URL.'/assets/css/xgenious-team-admin-dashboard.css', array(), '1.0.0' );
	
	wp_enqueue_script( 'xgenious-team-slider', XGENIOUS_TEAMS_SLIDER_ADD_ONS_PACK_URL .'/assets/js/xgenious-team-slider-admin-dashboard.js', array('jquery'), '1.0.0', true );
	wp_localize_script('xgenious-team-slider', 'xTeamSliderJs', array('pluginsUrl' => XGENIOUS_TEAMS_SLIDER_ADD_ONS_PACK_URL));
}
add_action( 'admin_enqueue_scripts', 'Xgenious_teams_slider_admin_css' );
/*add custom image size for team section*/
add_image_size( 'xteam_thumb_1', '280', '320', true );
add_image_size( 'xteam_thumb_2', '280', '420', true );
add_image_size( 'xteam_thumb_3', '280', '240', true );
add_image_size( 'xteam_thumb_4', '150', '150', true );
add_image_size( 'xteam_thumb_5', '370', '450', true );
add_image_size( 'xteam_thumb_6', '270', '320', true );
add_image_size( 'xteam_thumb_7', '250', '270', true );
add_image_size( 'xteam_thumb_8', '270', '270', true );
add_image_size( 'xteam_thumb_9', '300', '300', true );
add_image_size( 'xteam_thumb_10', '200', '200', true );
add_image_size( 'xteam_thumb_11', '270', '240', true );
add_image_size( 'xteam_thumb_12', '450', '450', true );
add_image_size( 'xteam_thumb_13', '270', '350', true );
add_image_size( 'xteam_thumb_14', '250', '250', true );
add_image_size( 'xteam_thumb_15', '250', '200', true );
add_image_size( 'xteam_thumb_16', '270', '300', true );
/* include all the required file */
require_once( XGENIOUS_TEAMS_SLIDER_ADD_ONS_PACK_PATH .'/inc/xgenious-team-slider-custom-post-register.php');
require_once( XGENIOUS_TEAMS_SLIDER_ADD_ONS_PACK_PATH .'/inc/xgenious-team-slider-metabox.php');
require_once( XGENIOUS_TEAMS_SLIDER_ADD_ONS_PACK_PATH .'/inc/xgenious-team-slider-all-shortcode.php');
require_once( XGENIOUS_TEAMS_SLIDER_ADD_ONS_PACK_PATH .'/inc/xgenious-team-slider-admin-dashboard.php');



?>