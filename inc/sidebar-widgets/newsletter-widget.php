<?php
/**
 * @version  1.0
 * @package  Robotics
 *
 */
 
 
/**************************************
*Creating Newsletter Widget
***************************************/
 
class robotics_newsletter_widget extends WP_Widget {


function __construct() {

parent::__construct(
// Base ID of your widget
'robotics_newsletter_widget',


// Widget name will appear in UI
esc_html__( '[ Robotics ] Newsletter Form', 'robotics-companion' ),

// Widget description
array( 'description' => esc_html__( 'Add footer newsletter signup form.', 'robotics-companion' ), ) 
);

}

// This is where the action happens
public function widget( $args, $instance ) {
	
$title 		= apply_filters( 'widget_title', $instance['title'] );
$actionurl 	= apply_filters( 'widget_actionurl', $instance['actionurl'] );
$desc 		= apply_filters( 'widget_desc', $instance['desc'] );

// mc validation
wp_enqueue_script( 'mc-validate');

// before and after widget arguments are defined by themes
echo wp_kses_post( $args['before_widget'] );
if ( ! empty( $title ) )
echo wp_kses_post( $args['before_title'] . $title . $args['after_title'] );


if( $desc ){
	echo '<p>'.esc_html( $desc ).'</p>';
}
?>

<div id="mc_embed_signup" class="single-footer-widget newsletter">
	<form target="_blank" novalidate action="<?php echo esc_url( $actionurl ); ?>" id="mc-embedded-subscribe-form" method="post" class="navbar-form">

		<div class="form-group row" style="width: 100%">

		<div class="col-lg-8 col-md-12">
			<input type="email" name="EMAIL" placeholder="<?php esc_html_e( 'Email address', 'robotics-companion' ); ?>" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required>
		</div>

		<div class="col-lg-4 col-md-12">
			<button type="submit" class="nw-btn primary-btn">Subscribe<span class="lnr lnr-arrow-right"></span></button>
		</div>

		</div>

		<div style="position: absolute; left: -5000px;">
			<input type="text" name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="">
		</div>

		<div class="info"></div>

	</form>
</div>

<?php
echo wp_kses_post( $args['after_widget'] );
}
		
// Widget Backend 
public function form( $instance ) {
	
if ( isset( $instance[ 'title' ] ) ) {
	$title = $instance[ 'title' ];
}else {
	$title = esc_html__( 'Newsletter', 'robotics-companion' );
}


//	Action Url
if ( isset( $instance[ 'actionurl' ] ) ) {
	$actionurl = $instance[ 'actionurl' ];
}else {
	$actionurl = '';
}

//	Text Area
if ( isset( $instance[ 'desc' ] ) ) {
	$desc = $instance[ 'desc' ];
}else {
	$desc = '';
}


// Widget admin form
?>
<p>
<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_html_e( 'Title:' ,'robotics-companion'); ?></label> 
<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
</p>

<p>
<label for="<?php echo esc_attr( $this->get_field_id( 'actionurl' ) ); ?>"><?php esc_html_e( 'Action URL:' ,'robotics-companion'); ?></label> 
<p >Enter here your MailChimp action URL. <a href="http://docs.creativegigs.net/docs/aproch/how-to-use-optin-form/how-to-locate-mailchimp-newsletter-form-action-url/" target="_blank">How to</a></p>
<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'actionurl' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'actionurl' ) ); ?>" type="text" value="<?php echo esc_attr( $actionurl ); ?>" />

</p>
<p>
<label for="<?php echo esc_attr( $this->get_field_id( 'desc' ) ); ?>"><?php esc_html_e( 'Short Description:' ,'fashe'); ?></label> 
<textarea class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'desc' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'desc' ) ); ?>"><?php echo esc_textarea( $desc ); ?></textarea>
</p>

<?php 
}

	
// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {

	
$instance = array();
$instance['title'] 	  = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
$instance['actionurl'] = ( ! empty( $new_instance['actionurl'] ) ) ? strip_tags( $new_instance['actionurl'] ) : '';
$instance['desc'] = ( ! empty( $new_instance['desc'] ) ) ? strip_tags( $new_instance['desc'] ) : '';

return $instance;

}

} // Class robotics_newsletter_widget ends here


// Register and load the widget
function robotics_newsletter_load_widget() {
	register_widget( 'robotics_newsletter_widget' );
}
add_action( 'widgets_init', 'robotics_newsletter_load_widget' );