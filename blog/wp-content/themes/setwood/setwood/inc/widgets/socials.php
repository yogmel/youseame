<?php
/**
 * Social Icons
 */

	class Setwood_Socials_Widget extends WP_Widget {

		function __construct() {
			$widget_ops  = array( 'description' => esc_html__( "Displays the site's social icons.", 'setwood' ) );
			$control_ops = array();
			parent::__construct( 'setwood_socials', $name = esc_html__( 'Setwood: Social Icons', 'setwood' ), $widget_ops, $control_ops );
		}

		function widget( $args, $instance ) {
			extract( $args );
			$title = apply_filters( 'widget_title', empty( $instance['title'] ) ? '' : $instance['title'], $instance, $this->id_base );

			echo $before_widget;

			if ( $title ) {
				echo $before_title . $title . $after_title;
			}
            get_template_part('inc/templates/social-icons');

			echo $after_widget;
		} // widget

		function update( $new_instance, $old_instance ) {
			$instance = $old_instance;

			$instance['title'] = sanitize_text_field( $new_instance['title'] );

			return $instance;
		}

		function form( $instance ) {
			$instance = wp_parse_args( (array) $instance, array(
				'title' => '',
			) );

			$title = $instance['title'];

			?>
			<p><label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_html__( 'Title:', 'setwood' ); ?></label><input id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" class="widefat" /></p>
			<p><?php esc_html_e( "This widget displays your site's social icons. In order to set them up, you need to visit Appearance > Customize > Social Networks and provide the appropriate URLs where desired.", 'setwood' ); ?></p>
			<?php
		} // form

	} // class

function social_widget_widgets_init() {
	register_widget('Setwood_Socials_Widget');
}
add_action('widgets_init', 'social_widget_widgets_init');
?>