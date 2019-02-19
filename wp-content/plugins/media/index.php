<?php

/** 
* Plugin Name: Social Profile 
* Plugin URI: http://designmodo
* Description: Links to Author social media profile
* Author: pop
* Author URI: </abdomohamed00001@gmail>
*/
class Social_Profile extends WP_Widget { 
	/**
	 * Sets up the widgets name etc
	 */    
    function __construct() {
        parent::__construct(
                'Social_Profile',
                __('Social', 'translation_domain'),
                array('description'=>__('Links to Author social media profile', 'translation_domain'),)
        );
    }

    public function form( $instance ) {
        isset ( $instance['title'] ) ? $title = $instance['title'] : null;
        empty ( $instance['title'] ) ? $title = 'My Social Profile' : null;
        isset ( $instance['facebook'] ) ?  $facebook = $instance['facebook'] : null;
        isset ( $instance['twitter'] )  ?  $twitter = $instance['twitter'] : null;
        isset ( $instance['google'] )   ?  $google = $instance['google'] : null;
        isset ( $instance['linkedin'] )   ?  $linkedin = $instance['linkedin'] : null;
        isset ( $instance['email'] )   ?  $email = $instance['email'] : null;
        isset ( $instance['phone'] )   ?  $phone = $instance['phone'] : null;
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label> 
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
        </p>
 
        <p>
            <label for="<?php echo $this->get_field_id('facebook'); ?>"><?php _e('Facebook Page Username:'); ?></label> 
            <input class="widefat" id="<?php echo $this->get_field_id('facebook'); ?>" name="<?php echo $this->get_field_name('facebook'); ?>" type="text" value="<?php echo esc_attr( $facebook ); ?>">
        </p>
 
        <p>
            <label for="<?php echo $this->get_field_id('twitter'); ?>"><?php _e('Twitter Username:'); ?></label> 
            <input class="widefat" id="<?php echo $this->get_field_id('twitter'); ?>" name="<?php echo $this->get_field_name('twitter'); ?>" type="text" value="<?php echo esc_attr( $twitter ); ?>">
        </p>
 
        <p>
            <label for="<?php echo $this->get_field_id('google'); ?>"><?php _e('Google+ Username or ID:'); ?></label> 
            <input class="widefat" id="<?php echo $this->get_field_id( 'google' ); ?>" name="<?php echo $this->get_field_name( 'google' ); ?>" type="text" value="<?php echo esc_attr( $google ); ?>">
        </p>

        <p>
            <label for="<?php echo $this->get_field_id('linkedin'); ?>"><?php _e('linkedin Username or ID:'); ?></label> 
            <input class="widefat" id="<?php echo $this->get_field_id( 'linkedin' ); ?>" name="<?php echo $this->get_field_name( 'linkedin' ); ?>" type="text" value="<?php echo esc_attr( $linkedin ); ?>">
        </p>

        <p>
            <label for="<?php echo $this->get_field_id('email'); ?>"><?php _e('email '); ?></label> 
            <input class="widefat" id="<?php echo $this->get_field_id( 'email' ); ?>" name="<?php echo $this->get_field_name( 'email' ); ?>" type="email" value="<?php echo esc_attr( $email ); ?>">
        </p>

        <p>
            <label for="<?php echo $this->get_field_id('phone'); ?>"><?php _e('phone'); ?></label> 
            <input class="widefat" id="<?php echo $this->get_field_id( 'phone' ); ?>" name="<?php echo $this->get_field_name( 'phone' ); ?>" type="number" value="<?php echo esc_attr( $phone ); ?>">
        </p>
 
<?php
}    
    public function widget($args, $instance) {
 
        $title = apply_filters('Social', $instance['title']);
        $facebook = $instance['facebook'];
        $twitter = $instance['twitter'];
        $google = $instance['google'];
        $linkedin = $instance['linkedin'];
        $email = $instance['email'];
        $phone = $instance['phone'];
 
// social profile link
        $facebook_profile = '<li><a href="'.$facebook.'"><i class="fa fa-facebook"></i></a></li>';
        $twitter_profile = '<li><a href="'.$twitter.'"><i class="fa fa-twitter"></i></a></li>';
        $google_profile = '<li><a href="'.$google.'"><i class="fa fa-instagram"></i></a></li>';
        $linkedin_profile = '<li><a href="'.$linkedin.'"><i class="fa fa-linkedin"></i></a></li>';
        $email_profile = '<li><a href="'.$email.'"><i class="fa fa-email"></i></a></li>';
        $phone_profile = '<li><a href="'.$phone.'"><i class="fa fa-phone"></i></a></li>';
 
// echo $args['before_widget'];
// if (!empty($title)) {
// echo $args['before_title'] . $title . $args['after_title'];
// }

echo '<div class="col-sm-6">';
echo '<div class="top-bar-address">';
echo  '<ul class="list-unstyled list-inline">';
echo '<li><a href="#"><i class="fa fa-envelope"></i>'.$email.'</a></li>';
echo  '<li><i class="fa fa-phone"></i>'.$phone.'</li>';
echo '</ul></div></div>';
 
echo '<div class="col-sm-6">';
        echo '<div class="social-icon"><ul class="list-inline list-unstyled">';
        echo (!empty($facebook) ) ? $facebook_profile : null;
        echo (!empty($twitter) ) ? $twitter_profile : null;
        echo (!empty($google) ) ? $google_profile : null;
        echo (!empty($linkedin) ) ? $linkedin_profile : null;
        echo '</ul></div></div>';
        echo $args['after_widget'];
}


public function update( $new_instance, $old_instance ) {
     
    $instance = array();
    $instance['title']      =   ( ! empty ( $new_instance['title']) ) ? strip_tags( $new_instance['title'] ) : '';
    $instance['facebook']   =   ( ! empty ( $new_instance['facebook']) ) ? strip_tags( $new_instance['facebook'] ) : '';
    $instance['twitter']    =   ( ! empty ( $new_instance['twitter']) ) ? strip_tags( $new_instance['twitter'] ) : '';
    $instance['google']     =   ( ! empty ( $new_instance['google']) ) ? strip_tags( $new_instance['google'] ) : '';
    $instance['linkedin']   =   ( ! empty ( $new_instance['linkedin']) ) ? strip_tags( $new_instance['linkedin'] ) : '';
    $instance['email']     =   ( ! empty ( $new_instance['email']) ) ? strip_tags( $new_instance['email'] ) : '';
    $instance['phone']   =   ( ! empty ( $new_instance['phone']) ) ? strip_tags( $new_instance['phone'] ) : '';
 
    return $instance;
     
}



 }