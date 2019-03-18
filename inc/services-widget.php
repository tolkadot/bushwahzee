<?php
// Register and load the widget
function services_load_widget() {
    register_widget( 'services_widget' );
}
add_action( 'widgets_init', 'services_load_widget' );

// Creating the widget
class services_widget extends WP_Widget {

function __construct() {
parent::__construct(

// Base ID of your widget
'services_widget',

// Widget name will appear in UI
__('Services', 'services_widget_domain'),

// Widget description
array( 'description' => __( 'Add your services info', 'services_widget_domain' ), )
);
}

// Widget Backend
public function form( $instance ) {
isset($instance['name']) ? $name = $instance['name'] : null;
isset($instance['blurb']) ? $blurb = $instance['blurb'] : null;
isset($instance['link']) ? $link = $instance['link'] : null;

// Widget admin form
?>
<p>
<label for="<?php echo $this->get_field_id( 'name' ); ?>"><?php _e( 'name:' ); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id( 'name' ); ?>" name="<?php echo $this->get_field_name( 'name' ); ?>" type="text" value="<?php echo esc_attr( $name ); ?>" />
<label for="<?php echo $this->get_field_id( 'blurb' ); ?>"><?php _e( 'blurb:' ); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id( 'blurb' ); ?>" name="<?php echo $this->get_field_name( 'blurb' ); ?>" type="text" value="<?php echo esc_attr( $blurb ); ?>" />
<label for="<?php echo $this->get_field_id( 'link' ); ?>"><?php _e( 'link:' ); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id( 'link' ); ?>" name="<?php echo $this->get_field_name( 'link' ); ?>" type="text" value="<?php echo esc_attr( $link ); ?>" />

</p>

<?php
}

// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
$instance = array();
$instance['name'] = ( ! empty( $new_instance['name'] ) ) ? strip_tags( $new_instance['name'] ) : '';
$instance['blurb'] = ( ! empty( $new_instance['blurb'] ) ) ? strip_tags( $new_instance['blurb'] ) : '';
$instance['link'] = ( ! empty( $new_instance['link'] ) ) ? strip_tags( $new_instance['link'] ) : '';
return $instance;
}


// Creating widget front-end

public function widget( $args, $instance ) {
        $name = $instance['name'];
        $blurb = $instance['blurb'];
        $link = $instance['link'];

        $output .= '<a href="'.$link.'"><h3 class="services-heading d-flex justify-align-center">'. $name .'</h3>';
        $output .= '<p class="services-body text-center t-pb-10">'. $blurb .'</p></a>';
        $output .= '<div class="d-flex justify-content-center"><a class="bush-button" href="'.$link.'">Find out more</a></div>';


// before and after widget arguments are defined by themes
echo $args['before_widget'];
// if ( ! empty( $name ) )
// echo $args['before_name'] . $name . $args['after_name'];

// This is where you run the code and display the output
        echo '<div class="services">';
        echo $output;
        echo '</div>';
echo $args['after_widget'];
}

} // Class services_widget ends here
