<?php

/**
 * @pakage Xgenious TEAM SLIDER Shortcode PACK
 * Version: 1.0.0
 **/
if(!defined('ABSPATH')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

/*team slider 1 short code register*/
function xgenious_team_slidet_shortcode_1($atts){

	extract(shortcode_atts( array(
		'count' => -1,
		'items' => 4,
		'loop' => true,
		'dots'=>true,	
		'autoplay'=>true,
		'autoplayTimeout'=>5000,
		'category' => '',
		'social' =>"true",
		'social_color' => '#88C425',
		'dots_color'=>'#ddd',
		'dots_active_color'=>'#00ABEF'
	),$atts));

	if (!empty($category)) {
		$arg = array(
			'post_type' => 'xgenious_teams',
			'posts_per_page'=> $count,
			'tax_query' => array(
				array(
					'taxonomy' => 'teams_cat',
					'field' => 'term_id',
					'terms' => $category
				)
			)
		);
	}else{
		$arg = array(
			'post_type' => 'xgenious_teams',
			'posts_per_page'=> $count,
		);
	}
	
	$get_post_data = new WP_Query($arg);

	$slide_random_number = rand(6982887,74634636);

	$xgenious_team_slider_markup_1 = '
	<style>
		.xgenious-team-slider-1 .img-box ul li{
			border-color: '.esc_attr( $social_color ).';
		}
		.xgenious-team-slider-1 .img-box a:hover li,
		.xgenious-team-slider-1 a,
		.xgenious-team-slider-1 a:hover{
			color: '.esc_attr( $social_color ).';
		}
	</style>
	<script>
		jQuery(window).load(function(){
			jQuery("#xgenious-team-slider-'.$slide_random_number.'").owlCarousel({
				loop:'.$loop.',
				dots:'.$dots.',
				nav:false,
				navText:["<i class=\'fa fa-angle-left\'></i>","<i class=\'fa fa-angle-right\'></i>"],
				autoplay:'.$autoplay.',
				autoplayTimeout:'.$autoplayTimeout.',
				margin:30,
				responsiveClass:true,
				 responsive : {
					0 : {
					items: 1
					},
					768 : {
					items: 2
					},
					960 : {
					items: 2
					},
					1200 : {
					items: '.$items.'
					},
					1920 : {
					items: '.$items.'
					}
				}
			});
		});
	</script> 

	<div class="xgenious-team-slider-1 owl-carousel" id="xgenious-team-slider-'.$slide_random_number.'" >';

	while($get_post_data->have_posts()): $get_post_data->the_post();

		$post_id = get_the_ID();

		$position = get_post_meta( $post_id, 'position', true ); 
		if (!empty($position)) {
			$position = get_post_meta( $post_id, 'position', true ); 
		}else{
			$position = ''; 
		}
		$facebook_link = get_post_meta( $post_id, 'facebook_link', true ); 
		if (!empty($facebook_link)) {
			$facebook_link = get_post_meta( $post_id, 'facebook_link', true ); 
		}else{
			$facebook_link = '#'; 
		}
	
		$twitter_link = get_post_meta( $post_id, 'twitter_link', true ); 
		if (!empty($twitter_link)) {
			$twitter_link = get_post_meta( $post_id, 'twitter_link', true ); 
		}else{
			$twitter_link = '#'; 
		}
	
		$google_plus_link = get_post_meta( $post_id, 'google_plus_link', true ); 
		if (!empty($google_plus_link)) {
			$google_plus_link = get_post_meta( $post_id, 'google_plus_link', true ); 
		}else{
			$google_plus_link = '#'; 
		}
		$linkedin_link = get_post_meta( $post_id, 'linkedin_link', true ); 
		if (!empty($linkedin_link)) {
			$linkedin_link = get_post_meta( $post_id, 'linkedin_link', true ); 
		}else{
			$linkedin_link = '#'; 
		}

		$xgenious_team_slider_markup_1 .= '<div class="single-team-member profile">
						<div class="img-box">
							<img src="'.esc_url(get_the_post_thumbnail_url( $post_id,'xteam_thumb_1' )).'" alt="'.esc_attr( get_the_title( $post_id ) ).'">';
		if ($social == "true") {
			$xgenious_team_slider_markup_1 .='
			<ul class="text-center">
				<a href="'.esc_url( $facebook_link ).'"><li><i class="fa fa-facebook"></i></li></a>
				<a href="'.esc_url( $twitter_link ).'"><li><i class="fa fa-twitter"></i></li></a>
				<a href="'.esc_url( $linkedin_link ).'"><li><i class="fa fa-linkedin"></i></li></a>
				<a href="'.esc_url( $google_plus_link ).'"><li><i class="fa fa-google-plus"></i></li></a>
			</ul>';
		}
		
		$xgenious_team_slider_markup_1 .='
			              </div>
			              <h1>'.esc_html(get_the_title($post_id)).'</h1>
			              <h2>'.esc_html( $position ).'</h2>
					</div>';
	endwhile;

$xgenious_team_slider_markup_1 .='</div>';

	wp_reset_query();

	return $xgenious_team_slider_markup_1;

}
add_shortcode( 'xgenious_team_slider_01', 'xgenious_team_slidet_shortcode_1' );

/*team slider 2 short code register*/
function xgenious_team_slidet_shortcode_2($atts){

	extract(shortcode_atts( array(
		'count' => -1,
		'items' => 4,
		'loop' => true,
		'dots'=>true,	
		'autoplay'=>true,
		'autoplayTimeout'=>5000,
		'category' => '',
		'social' =>"true",
		'social_color' => '#e16831',
		'dots_color'=>'#ddd',
		'dots_active_color'=>'#00ABEF'
	),$atts));

	if (!empty($category)) {
		$arg = array(
			'post_type' => 'xgenious_teams',
			'posts_per_page'=> $count,
			'tax_query' => array(
				array(
					'taxonomy' => 'teams_cat',
					'field' => 'term_id',
					'terms' => $category
				)
			)
		);
	}else{
		$arg = array(
			'post_type' => 'xgenious_teams',
			'posts_per_page'=> $count,
		);
	}
	
	$get_post_data = new WP_Query($arg);

	$slide_random_number = rand(6982887,74634636);

	$xgenious_team_slider_markup_2 = '
	<style>
		.xgenious-team-slider-2 .social-icons a:hover,
		.xgenious-team-slider-2 .xgenious-team-slider-2 .xgenious-team-slider-2 .member-info span {
			color: '.esc_attr( $social_color ).';
		}
		.xgenious-team-slider-2 .team-member:hover .member-info {
			background-color: '.esc_attr( $social_color ).';
		}
	</style>
	<script>
		jQuery(window).load(function(){
			jQuery("#xgenious-team-slider-'.$slide_random_number.'").owlCarousel({
				loop:'.$loop.',
				dots:'.$dots.',
				nav:false,
				navText:["<i class=\'fa fa-angle-left\'></i>","<i class=\'fa fa-angle-right\'></i>"],
				autoplay:'.$autoplay.',
				autoplayTimeout:'.$autoplayTimeout.',
				margin:0,
				responsiveClass:true,
				 responsive : {
					0 : {
					items: 1
					},
					768 : {
					items: 2
					},
					960 : {
					items: 2
					},
					1200 : {
					items: '.$items.'
					},
					1920 : {
					items: '.$items.'
					}
				}
			});
		});
	</script> 

	<div class="xgenious-team-slider-2 owl-carousel" id="xgenious-team-slider-'.$slide_random_number.'" >';

	while($get_post_data->have_posts()): $get_post_data->the_post();

		$post_id = get_the_ID();

		$position = get_post_meta( $post_id, 'position', true ); 
		if (!empty($position)) {
			$position = get_post_meta( $post_id, 'position', true ); 
		}else{
			$position = ''; 
		}
		$facebook_link = get_post_meta( $post_id, 'facebook_link', true ); 
		if (!empty($facebook_link)) {
			$facebook_link = get_post_meta( $post_id, 'facebook_link', true ); 
		}else{
			$facebook_link = '#'; 
		}
	
		$twitter_link = get_post_meta( $post_id, 'twitter_link', true ); 
		if (!empty($twitter_link)) {
			$twitter_link = get_post_meta( $post_id, 'twitter_link', true ); 
		}else{
			$twitter_link = '#'; 
		}
	
		$google_plus_link = get_post_meta( $post_id, 'google_plus_link', true ); 
		if (!empty($google_plus_link)) {
			$google_plus_link = get_post_meta( $post_id, 'google_plus_link', true ); 
		}else{
			$google_plus_link = '#'; 
		}
		$linkedin_link = get_post_meta( $post_id, 'linkedin_link', true ); 
		if (!empty($linkedin_link)) {
			$linkedin_link = get_post_meta( $post_id, 'linkedin_link', true ); 
		}else{
			$linkedin_link = '#'; 
		}

		$xgenious_team_slider_markup_2 .= '<div class="team-member ">
		<img src="'.esc_url(get_the_post_thumbnail_url( $post_id,'xteam_thumb_1' )).'" class="attachment-member-thumbnail" alt="'.esc_attr( get_the_title( $post_id ) ).'">
								<div class="member-info">
									<h5 class="name">'.esc_html(get_the_title($post_id)).'</h5>
									<span class="position">'.esc_html( $position ).'</span>
								</div>';
		if ($social == "true") {
			$xgenious_team_slider_markup_2 .='<ul class="social-icons">
									<li>
										<a href="'.esc_url( $facebook_link ).'" >
											<i class="fa fa-facebook"></i>
										</a>
									</li>
									<li>
										<a href="'.esc_url( $twitter_link ).'" >
											<i class="fa fa-twitter"></i>
										</a>
									</li>
									<li>
										<a href="'.esc_url( $google_plus_link ).'">
											<i class="fa fa-google-plus"></i>
										</a>
									</li>
									<li>
										<a href="'.esc_url( $linkedin_link ).'">
											<i class="fa fa-linkedin"></i>
										</a>
									</li>
								</ul>';
		}
		
		$xgenious_team_slider_markup_2 .='</div>';
	endwhile;

$xgenious_team_slider_markup_2 .='</div>';

	wp_reset_query();

	return $xgenious_team_slider_markup_2;

}
add_shortcode( 'xgenious_team_slider_02', 'xgenious_team_slidet_shortcode_2' );
/*team slider 3 short code register*/
function xgenious_team_slidet_shortcode_3($atts){

	extract(shortcode_atts( array(
		'count' => -1,
		'items' => 4,
		'loop' => true,
		'dots'=>true,	
		'autoplay'=>true,
		'autoplayTimeout'=>5000,
		'category' => '',
		'social' =>"true",
		'social_color' => '#16A2E8',
		'dots_color'=>'#ddd',
		'dots_active_color'=>'#16A2E8'
	),$atts));

	if (!empty($category)) {
		$arg = array(
			'post_type' => 'xgenious_teams',
			'posts_per_page'=> $count,
			'tax_query' => array(
				array(
					'taxonomy' => 'teams_cat',
					'field' => 'term_id',
					'terms' => $category
				)
			)
		);
	}else{
		$arg = array(
			'post_type' => 'xgenious_teams',
			'posts_per_page'=> $count,
		);
	}
	
	$get_post_data = new WP_Query($arg);

	$slide_random_number = rand(6982887,74634636);

	$xgenious_team_slider_markup_3 = '
	<style>
		.xgenious-team-slider-3 .single_team .icon li a,
		.xgenious-team-slider-3 .single_team .team_content {
			background: '.esc_attr( $social_color ).';
		}
	</style>
	<script>
		jQuery(window).load(function(){
			jQuery("#xgenious-team-slider-'.$slide_random_number.'").owlCarousel({
				loop:'.$loop.',
				dots:'.$dots.',
				nav:false,
				navText:["<i class=\'fa fa-angle-left\'></i>","<i class=\'fa fa-angle-right\'></i>"],
				autoplay:'.$autoplay.',
				autoplayTimeout:'.$autoplayTimeout.',
				margin:30,
				responsiveClass:true,
				 responsive : {
					0 : {
					items: 1
					},
					768 : {
					items: 2
					},
					960 : {
					items: 2
					},
					1200 : {
					items: '.$items.'
					},
					1920 : {
					items: '.$items.'
					}
				}
			});
		});
	</script> 

	<div class="xgenious-team-slider-3 owl-carousel" id="xgenious-team-slider-'.$slide_random_number.'" >';

	while($get_post_data->have_posts()): $get_post_data->the_post();

		$post_id = get_the_ID();

		$position = get_post_meta( $post_id, 'position', true ); 
		if (!empty($position)) {
			$position = get_post_meta( $post_id, 'position', true ); 
		}else{
			$position = ''; 
		}
		$facebook_link = get_post_meta( $post_id, 'facebook_link', true ); 
		if (!empty($facebook_link)) {
			$facebook_link = get_post_meta( $post_id, 'facebook_link', true ); 
		}else{
			$facebook_link = '#'; 
		}
	
		$twitter_link = get_post_meta( $post_id, 'twitter_link', true ); 
		if (!empty($twitter_link)) {
			$twitter_link = get_post_meta( $post_id, 'twitter_link', true ); 
		}else{
			$twitter_link = '#'; 
		}
	
		$google_plus_link = get_post_meta( $post_id, 'google_plus_link', true ); 
		if (!empty($google_plus_link)) {
			$google_plus_link = get_post_meta( $post_id, 'google_plus_link', true ); 
		}else{
			$google_plus_link = '#'; 
		}
		$linkedin_link = get_post_meta( $post_id, 'linkedin_link', true ); 
		if (!empty($linkedin_link)) {
			$linkedin_link = get_post_meta( $post_id, 'linkedin_link', true ); 
		}else{
			$linkedin_link = '#'; 
		}

		$xgenious_team_slider_markup_3 .= '<div class="single_team">
						<img src="'.esc_url(get_the_post_thumbnail_url( $post_id,'xteam_thumb_2' )).'"  alt="'.esc_attr( get_the_title( $post_id ) ).'">
						<div class="team_content text-center">
							<h3 class="title">'.esc_html(get_the_title($post_id)).'</h3>
							<p>'.esc_html( $position ).'</p>
						</div>
						<div class="box-content">';
		if ($social == "true") {
			$xgenious_team_slider_markup_3 .='<ul class="icon">
									<li>
										<a href="'.esc_url( $facebook_link ).'" >
											<i class="fa fa-facebook"></i>
										</a>
									</li>
									<li>
										<a href="'.esc_url( $twitter_link ).'" >
											<i class="fa fa-twitter"></i>
										</a>
									</li>
									<li>
										<a href="'.esc_url( $google_plus_link ).'">
											<i class="fa fa-google-plus"></i>
										</a>
									</li>
									<li>
										<a href="'.esc_url( $linkedin_link ).'">
											<i class="fa fa-linkedin"></i>
										</a>
									</li>
								</ul>';
		}
		
		$xgenious_team_slider_markup_3 .='</div></div>';
	endwhile;

$xgenious_team_slider_markup_3 .='</div>';

	wp_reset_query();

	return $xgenious_team_slider_markup_3;

}
add_shortcode( 'xgenious_team_slider_03', 'xgenious_team_slidet_shortcode_3' );
/*team slider 4 short code register*/
function xgenious_team_slidet_shortcode_4($atts){

	extract(shortcode_atts( array(
		'count' => -1,
		'items' => 4,
		'loop' => true,
		'dots'=>true,	
		'autoplay'=>true,
		'autoplayTimeout'=>5000,
		'category' => '',
		'social' =>"true",
		'social_color' => '#5798ef',
		'dots_color'=>'#ddd',
		'dots_active_color'=>'#16A2E8'
	),$atts));

	if (!empty($category)) {
		$arg = array(
			'post_type' => 'xgenious_teams',
			'posts_per_page'=> $count,
			'tax_query' => array(
				array(
					'taxonomy' => 'teams_cat',
					'field' => 'term_id',
					'terms' => $category
				)
			)
		);
	}else{
		$arg = array(
			'post_type' => 'xgenious_teams',
			'posts_per_page'=> $count,
		);
	}
	
	$get_post_data = new WP_Query($arg);

	$slide_random_number = rand(6982887,74634636);

	$xgenious_team_slider_markup_4 = '
	<style>
		.xgenious-team-slider-4 .single-team-member:hover,
		.xgenious-team-slider-4 .single-team-member:hover{
			background: '.esc_attr( $social_color ).';
		}
	</style>
	<script>
		jQuery(window).load(function(){
			jQuery("#xgenious-team-slider-'.$slide_random_number.'").owlCarousel({
				loop:'.$loop.',
				dots:'.$dots.',
				nav:false,
				navText:["<i class=\'fa fa-angle-left\'></i>","<i class=\'fa fa-angle-right\'></i>"],
				autoplay:'.$autoplay.',
				autoplayTimeout:'.$autoplayTimeout.',
				margin:30,
				responsiveClass:true,
				 responsive : {
					0 : {
					items: 1
					},
					768 : {
					items: 2
					},
					960 : {
					items: 2
					},
					1200 : {
					items: '.$items.'
					},
					1920 : {
					items: '.$items.'
					}
				}
			});
		});
	</script> 

	<div class="xgenious-team-slider-4 owl-carousel" id="xgenious-team-slider-'.$slide_random_number.'" >';

	while($get_post_data->have_posts()): $get_post_data->the_post();

		$post_id = get_the_ID();

		$position = get_post_meta( $post_id, 'position', true ); 
		if (!empty($position)) {
			$position = get_post_meta( $post_id, 'position', true ); 
		}else{
			$position = ''; 
		}
		$facebook_link = get_post_meta( $post_id, 'facebook_link', true ); 
		if (!empty($facebook_link)) {
			$facebook_link = get_post_meta( $post_id, 'facebook_link', true ); 
		}else{
			$facebook_link = '#'; 
		}
	
		$twitter_link = get_post_meta( $post_id, 'twitter_link', true ); 
		if (!empty($twitter_link)) {
			$twitter_link = get_post_meta( $post_id, 'twitter_link', true ); 
		}else{
			$twitter_link = '#'; 
		}
	
		$google_plus_link = get_post_meta( $post_id, 'google_plus_link', true ); 
		if (!empty($google_plus_link)) {
			$google_plus_link = get_post_meta( $post_id, 'google_plus_link', true ); 
		}else{
			$google_plus_link = '#'; 
		}
		$linkedin_link = get_post_meta( $post_id, 'linkedin_link', true ); 
		if (!empty($linkedin_link)) {
			$linkedin_link = get_post_meta( $post_id, 'linkedin_link', true ); 
		}else{
			$linkedin_link = '#'; 
		}

		$xgenious_team_slider_markup_4 .= '<div class="single-team-member">
		<img src="'.esc_url(get_the_post_thumbnail_url( $post_id,'xteam_thumb_4' )).'" class="thumbnail-image"  alt="'.esc_attr( get_the_title( $post_id ) ).'">
						<div class="thumbnail-body">
							<a class="thumbnail-title" href="#">'.esc_html(get_the_title($post_id)).'</a>
							<p class="thumbnail-subtitle">'.esc_html( $position ).' </p>
							<hr class="thumbnail-divider">';
		if ($social == "true") {
			$xgenious_team_slider_markup_4 .='<ul class="inline-list-xs thumbnail-list">
								<li>
									<a class="icon novi-icon icon-xs icon-gray-darker icon-effect-1 fa fa-facebook" href="'.esc_url( $facebook_link ).'"></a>
								</li>
								<li>
									<a class="icon novi-icon icon-xs icon-gray-darker icon-effect-1 fa fa-twitter" href="'.esc_url( $twitter_link ).'"></a>
								</li>
								<li>
									<a class="icon novi-icon icon-xs icon-gray-darker icon-effect-1 fa fa-google-plus" href="'.esc_url( $google_plus_link ).'"></a>
								</li>
								<li>
									<a class="icon novi-icon icon-xs icon-gray-darker icon-effect-1 fa fa-linkedin" href="'.esc_url( $linkedin_link ).'"></a>
								</li>
							</ul>';
		}
		
		$xgenious_team_slider_markup_4 .='</div></div>';
	endwhile;

$xgenious_team_slider_markup_4 .='</div>';

	wp_reset_query();

	return $xgenious_team_slider_markup_4;

}
add_shortcode( 'xgenious_team_slider_04', 'xgenious_team_slidet_shortcode_4' );
/*team slider 5 short code register*/
function xgenious_team_slidet_shortcode_5($atts){

	extract(shortcode_atts( array(
		'count' => -1,
		'items' => 4,
		'loop' => true,
		'dots'=>true,	
		'autoplay'=>true,
		'autoplayTimeout'=>5000,
		'category' => '',
		'social' =>"true",
		'social_color' => '#37ab75',
		'dots_color'=>'#ddd',
		'dots_active_color'=>'#16A2E8'
	),$atts));

	if (!empty($category)) {
		$arg = array(
			'post_type' => 'xgenious_teams',
			'posts_per_page'=> $count,
			'tax_query' => array(
				array(
					'taxonomy' => 'teams_cat',
					'field' => 'term_id',
					'terms' => $category
				)
			)
		);
	}else{
		$arg = array(
			'post_type' => 'xgenious_teams',
			'posts_per_page'=> $count,
		);
	}
	
	$get_post_data = new WP_Query($arg);

	$slide_random_number = rand(6982887,74634636);

	$xgenious_team_slider_markup_5 = '
	<style>
		.xgenious-team-slider-5 .team_item:hover .hover_content .icon a:hover {
			color: '.esc_attr( $social_color ).';
		}
		.xgenious-team-slider-5 .team_item .hover_content:before {
			background: '.esc_attr( $social_color ).';
		}
	</style>
	<script>
		jQuery(window).load(function(){
			jQuery("#xgenious-team-slider-'.$slide_random_number.'").owlCarousel({
				loop:'.$loop.',
				dots:'.$dots.',
				nav:false,
				navText:["<i class=\'fa fa-angle-left\'></i>","<i class=\'fa fa-angle-right\'></i>"],
				autoplay:'.$autoplay.',
				autoplayTimeout:'.$autoplayTimeout.',
				margin:30,
				responsiveClass:true,
				 responsive : {
					0 : {
					items: 1
					},
					768 : {
					items: 2
					},
					960 : {
					items: 2
					},
					1200 : {
					items: '.$items.'
					},
					1920 : {
					items: '.$items.'
					}
				}
			});
		});
	</script> 

	<div class="xgenious-team-slider-5 owl-carousel" id="xgenious-team-slider-'.$slide_random_number.'" >';

	while($get_post_data->have_posts()): $get_post_data->the_post();

		$post_id = get_the_ID();

		$position = get_post_meta( $post_id, 'position', true ); 
		if (!empty($position)) {
			$position = get_post_meta( $post_id, 'position', true ); 
		}else{
			$position = ''; 
		}
		$facebook_link = get_post_meta( $post_id, 'facebook_link', true ); 
		if (!empty($facebook_link)) {
			$facebook_link = get_post_meta( $post_id, 'facebook_link', true ); 
		}else{
			$facebook_link = '#'; 
		}
	
		$twitter_link = get_post_meta( $post_id, 'twitter_link', true ); 
		if (!empty($twitter_link)) {
			$twitter_link = get_post_meta( $post_id, 'twitter_link', true ); 
		}else{
			$twitter_link = '#'; 
		}
	
		$google_plus_link = get_post_meta( $post_id, 'google_plus_link', true ); 
		if (!empty($google_plus_link)) {
			$google_plus_link = get_post_meta( $post_id, 'google_plus_link', true ); 
		}else{
			$google_plus_link = '#'; 
		}
		$linkedin_link = get_post_meta( $post_id, 'linkedin_link', true ); 
		if (!empty($linkedin_link)) {
			$linkedin_link = get_post_meta( $post_id, 'linkedin_link', true ); 
		}else{
			$linkedin_link = '#'; 
		}

		$xgenious_team_slider_markup_5 .= '<div class="team_item">
	                    <img src="'.esc_url(get_the_post_thumbnail_url( $post_id,'xteam_thumb_5' )).'" alt="'.esc_attr( get_the_title( $post_id ) ).'">
	                    <div class="hover_content">
	                        <div class="text">
	                            <h3>'.esc_html(get_the_title($post_id)).'</h3>
	                            <h6>'.esc_html( $position ).'</h6>
							</div>';
		if ($social == "true") {
			$xgenious_team_slider_markup_5 .='<div class="icon">
	                            <a href="'.esc_url( $facebook_link ).'"><i class="fa fa-facebook"></i></a>
	                            <a href="'.esc_url( $twitter_link ).'"><i class="fa fa-twitter"></i></a>
	                            <a href="'.esc_url( $google_plus_link ).'"><i class="fa fa-google-plus"></i></a>
	                            <a href="'.esc_url( $linkedin_link ).'"><i class="fa fa-linkedin"></i></a>
							</div>';
		}
		
		$xgenious_team_slider_markup_5 .='</div></div>';
	endwhile;

$xgenious_team_slider_markup_5 .='</div>';

	wp_reset_query();

	return $xgenious_team_slider_markup_5;

}
add_shortcode( 'xgenious_team_slider_05', 'xgenious_team_slidet_shortcode_5' );
