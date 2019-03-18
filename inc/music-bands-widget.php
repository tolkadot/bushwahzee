<?php
// Register and load the widget
function music_load_widget() {
    register_widget( 'music_widget' );
}
add_action( 'widgets_init', 'music_load_widget' );

// Creating the widget
class music_widget extends WP_Widget {

function __construct() {
parent::__construct(

// Base ID of your widget
'music_widget',

// Widget name will appear in UI
__('Music & Bands', 'music_widget_domain'),

// Widget description
array( 'description' => __( 'Add your music & bands info', 'music_widget_domain' ), )
);
}

// Widget Backend
public function form( $instance ) {
isset($instance['name']) ? $name = $instance['name'] : null;
isset($instance['blurb']) ? $blurb = $instance['blurb'] : null;
isset($instance['link']) ? $link = $instance['link'] : null;
isset($instance['link2_title']) ? $link2_title = $instance['link2_title'] : null;
isset($instance['link2']) ? $link2 = $instance['link2'] : null;
isset($instance['link3_title']) ? $link2_title = $instance['link3_title'] : null;
isset($instance['link3']) ? $link3 = $instance['link3'] : null;
isset($instance['image']) ? $image = $instance['image'] : null;
isset($instance['image_alt']) ? $image_alt = $instance['image_alt'] : null;

// Widget admin form
?>
<p>
<label for="<?php echo $this->get_field_id( 'name' ); ?>"><?php _e( 'name:' ); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id( 'name' ); ?>" name="<?php echo $this->get_field_name( 'name' ); ?>" type="text" value="<?php echo esc_attr( $name ); ?>" />

<label for="<?php echo $this->get_field_id( 'blurb' ); ?>"><?php _e( 'blurb:' ); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id( 'blurb' ); ?>" name="<?php echo $this->get_field_name( 'blurb' ); ?>" type="text" value="<?php echo esc_attr( $blurb ); ?>" />

<label for="<?php echo $this->get_field_id( 'link' ); ?>"><?php _e( 'link:' ); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id( 'link' ); ?>" name="<?php echo $this->get_field_name( 'link' ); ?>" type="text" value="<?php echo esc_attr( $link ); ?>" />

<label for="<?php echo $this->get_field_id( 'link2_title' ); ?>"><?php _e( 'Facebook link title:' ); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id( 'link2_title' ); ?>" name="<?php echo $this->get_field_name( 'link2_title' ); ?>" type="text" value="<?php echo esc_attr( $link2_title ); ?>" />

<label for="<?php echo $this->get_field_id( 'link2' ); ?>"><?php _e( 'Facebook link:' ); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id( 'link2' ); ?>" name="<?php echo $this->get_field_name( 'link2' ); ?>" type="text" value="<?php echo esc_attr( $link2 ); ?>" />

<label for="<?php echo $this->get_field_id( 'link3_title' ); ?>"><?php _e( 'Facebook 2 link title:' ); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id( 'link3_title' ); ?>" name="<?php echo $this->get_field_name( 'link3_title' ); ?>" type="text" value="<?php echo esc_attr( $link3_title ); ?>" />

<label for="<?php echo $this->get_field_id( 'link3' ); ?>"><?php _e( 'Facebook 2 link:' ); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id( 'link3' ); ?>" name="<?php echo $this->get_field_name( 'link3' ); ?>" type="text" value="<?php echo esc_attr( $link3 ); ?>" />

<label for="<?php echo $this->get_field_id( 'image' ); ?>"><?php _e( 'image:' ); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id( 'image' ); ?>" name="<?php echo $this->get_field_name( 'image' ); ?>" type="text" value="<?php echo esc_attr( $image ); ?>" />

<label for="<?php echo $this->get_field_id( 'image_alt' ); ?>"><?php _e( 'image alt:' ); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id( 'image_alt' ); ?>" name="<?php echo $this->get_field_name( 'image_alt' ); ?>" type="text" value="<?php echo esc_attr( $image_alt ); ?>" />

</p>

<?php
}

// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
$instance = array();
$instance['name'] = ( ! empty( $new_instance['name'] ) ) ? strip_tags( $new_instance['name'] ) : '';
$instance['blurb'] = ( ! empty( $new_instance['blurb'] ) ) ? strip_tags( $new_instance['blurb'] ) : '';
$instance['link'] = ( ! empty( $new_instance['link'] ) ) ? strip_tags( $new_instance['link'] ) : '';
$instance['link2'] = ( ! empty( $new_instance['link2'] ) ) ? strip_tags( $new_instance['link2'] ) : '';
$instance['link2_title'] = ( ! empty( $new_instance['link2_title'] ) ) ? strip_tags( $new_instance['link2_title'] ) : '';
$instance['link3'] = ( ! empty( $new_instance['link3'] ) ) ? strip_tags( $new_instance['link3'] ) : '';
$instance['link3_title'] = ( ! empty( $new_instance['link3_title'] ) ) ? strip_tags( $new_instance['link3_title'] ) : '';
$instance['image'] = ( ! empty( $new_instance['image'] ) ) ? strip_tags( $new_instance['image'] ) : '';
$instance['image_alt'] = ( ! empty( $new_instance['image_alt'] ) ) ? strip_tags( $new_instance['image_alt'] ) : '';
return $instance;
}


// Creating widget front-end

public function widget( $args, $instance ) {
        $name = $instance['name'];
        $blurb = $instance['blurb'];
        $link = $instance['link'];
        $link2 = $instance['link2'];
        $link2_title = $instance['link2_title'];
        $link3 = $instance['link3'];
        $link3_title = $instance['link3_title'];
        $image = $instance['image'];
        $image_alt = $instance['image_alt'];

        $output = '<a href="'.$link.'"><img class="bands-image" src="'. $image . '" alt="'. $image_alt .'" /></a>';
        $output .= '<a href="'.$link.'"><h3 class="mt-3">'. $name .'</h3></a>';
        $output .= '<p>'. $blurb .'</p>';
        if($link2){
        $output .= '<p class="d-flex justify-content-start mb-0"><span class="bold">'. $link2_title .' facebook &nbsp</span>|<a href="'. $link2 .'"><i class=" pr-1 pl-1 fa fa-facebook-square"></i></a></p>';
        }
        if($link3){
        $output .= '<p class="d-flex justify-content-start mb-0"><span class="bold">'. $link3_title .' facebook &nbsp</span>|<a href="'. $link3 .'"><i class=" pr-1 pl-1 fa fa-facebook-square"></i></a></p>';
        }


// before and after widget arguments are defined by themes
echo $args['before_widget'];
// if ( ! empty( $name ) )
// echo $args['before_name'] . $name . $args['after_name'];

// This is where you run the code and display the output
        echo '<div class="music-bands">';
        echo $output;
        echo '</div>';
echo $args['after_widget'];
}

} // Class music_widget ends here
