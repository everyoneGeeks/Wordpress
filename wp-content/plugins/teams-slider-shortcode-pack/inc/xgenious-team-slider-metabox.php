<?php

/**
 * @package Xgenious VC – team slider Add-ons Pack 
 * @version 1.0
 *
**/
/***************************************
	METABOX OPTIONS 
***************************************/
if(!defined('ABSPATH')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

function xgenious_team_slider_meta_box(){
	add_meta_box( 'xteam_slider_meta', esc_html( 'Team Member Details' ), 'xgenious_team_slider_meta_box_callback', 'xgenious_teams', 'advanced', 'high', 2 );
}
add_action( 'add_meta_boxes','xgenious_team_slider_meta_box');

/*--------------------------------------------------------------
 *			Create team slider social meta box
*-------------------------------------------------------------*/
function xgenious_team_slider_meta_box_callback($xgenious_social_info){

	wp_nonce_field( 'xgenious_team_slider_meta_box','xgenious_team_slider_meta_box_nonce' );
	$position = get_post_meta( $xgenious_social_info->ID, 'position', true ); 
	$facebook_link = get_post_meta( $xgenious_social_info->ID, 'facebook_link', true ); 
	$twitter_link = get_post_meta( $xgenious_social_info->ID, 'twitter_link', true ); 
	$google_plus_link = get_post_meta( $xgenious_social_info->ID, 'google_plus_link', true ); 
	$linkedin_link = get_post_meta( $xgenious_social_info->ID, 'linkedin_link', true ); 
	echo  '
	<div class="xgenious_team_slider_meta_box">
		<label for="position">'.esc_html( 'Position / Post' ).'</label>
		<input type="text" name="position" id="position" placeholder="Position/Post" value="'.esc_html( $position ).'"/>
	</div>
	<div class="xgenious_team_slider_meta_box">
		<label for="facebook_link">'.esc_html( 'Facebook Link' ).'</label>
		<input type="text" name="facebook_link" id="facebook_link" placeholder="Facebook Profile Link" value="'.esc_html( $facebook_link ).'"/>
	</div>
	<div class="xgenious_team_slider_meta_box">
		<label for="twitter_link">'.esc_html( 'Twitter Link' ).'</label>
		<input type="text" name="twitter_link" id="twitter_link" placeholder="Twitter Profile Link" value="'.esc_html( $twitter_link ).'"/>
	</div>
	<div class="xgenious_team_slider_meta_box">
		<label for="google_plus_link">'.esc_html( 'Google Plus Link' ).'</label>
		<input type="text" name="google_plus_link" id="google_plus_link" placeholder="Google Plus Profile Link" value="'.esc_html( $google_plus_link ).'"/>
	</div>
	<div class="xgenious_team_slider_meta_box">
		<label for="linkedin_link">'.esc_html( 'Linkedin Plus Link' ).'</label>
		<input type="text" name="linkedin_link" id="linkedin_link" placeholder="Linkedin Profile Link" value="'.esc_html( $linkedin_link ).'"/>
	</div>
	';
}
/*--------------------------------------------------------------
 *			Save team slider social meta
*-------------------------------------------------------------*/
function xgenious_team_slider_meta_box_save($post_id){
	if ( ! isset( $_POST['xgenious_team_slider_meta_box_nonce'] ) ) {
			return $post_id;
		}

	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return $post_id;
	}

	if ( 'xgenious_teams' == $_POST['post_type'] ) {
		if ( ! current_user_can( 'edit_post', $post_id ) ) {
			return $post_id;
		}
	}
	if( isset( $_POST[ 'facebook_link' ] ) ) {
        update_post_meta( $post_id, 'facebook_link', $_POST[ 'facebook_link' ] );
    }
	if( isset( $_POST[ 'position' ] ) ) {
        update_post_meta( $post_id, 'position', $_POST[ 'position' ] );
    }
	if( isset( $_POST[ 'twitter_link' ] ) ) {
        update_post_meta( $post_id, 'twitter_link', $_POST[ 'twitter_link' ] );
    }
	if( isset( $_POST[ 'google_plus_link' ] ) ) {
        update_post_meta( $post_id, 'google_plus_link', $_POST[ 'google_plus_link' ] );
    }
	if( isset( $_POST[ 'linkedin_link' ] ) ) {
        update_post_meta( $post_id, 'linkedin_link', $_POST[ 'linkedin_link' ] );
    }
}

add_action( 'save_post','xgenious_team_slider_meta_box_save' );

?>