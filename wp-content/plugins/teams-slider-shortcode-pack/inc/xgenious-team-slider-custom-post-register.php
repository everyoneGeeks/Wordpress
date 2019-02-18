<?php

/**
 * @package Xgenious VC – teams slider Add-ons Pack 
 * @version 1.0
 *
**/
/***************************************
	CUSTOM POST TYPE REGISTER 
***************************************/
if(!defined('ABSPATH')) {
    header('HTTP/1.0 403 Forbidden');
    exit;
}

function xgenious_Teams_slider_custom_posts() {
    register_post_type( 'xgenious_teams',
        array(
            'labels' => array(
                'name' 					=> __( 'Team' ),
                'singular_name' 		=> __( 'Team' ),
            ),
            'supports' 					=> array('title','thumbnail'),
            'public' 					=> false,
            'show_ui'					=>true,
            'menu_icon' 				=> 'dashicons-admin-users'
        )
    );
   register_taxonomy(
		'teams_cat',
		'xgenious_teams',
		array(
			'label' => __( 'Category' ),
			'rewrite' => array( 
                'slug' => 'team-category', 
                'with_front' => true
            ),
            'hierarchical' => true,
            'query_var' => true,
            'show_admin_column' => true
		)
	);
}

add_action( 'init', 'xgenious_Teams_slider_custom_posts' );

function get_team_category(){
    $team_category = get_terms( 'teams_cat' );
         $team_category_options = '<option value="">All Category</option>';
        if ($team_category) {
            foreach ($team_category as $t_cat) {
                 $team_category_options  .= '<option value="'.$t_cat->term_id.'">'.$t_cat->name.'</option>';
            }
        }
        return  $team_category_options;
    }
?>