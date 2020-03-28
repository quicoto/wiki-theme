<?php

class My_Widget extends WP_Widget {

    function __construct() {

        parent::__construct(
            'wiki-pages-list',  // Base ID
            'Wiki pages list'   // Name
        );

        add_action( 'widgets_init', function() {
            register_widget( 'My_Widget' );
        });

    }

    public $args = array(
        'before_title'  => '<h4 class="pagenav">',
        'after_title'   => '</h4>',
        'before_widget' => '<div class="widget-wrap">',
        'after_widget'  => '</div></div>'
    );

    public function widget( $args, $instance ) {
      echo $args['before_widget'];

      if ( ! empty( $instance['title'] ) ) {
          echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
      }

      echo '<div class="pagenav">';
        echo '<ul>';
          print_r(wp_list_pages(array(
            'sort_column' => 'post_name',
            'title_li' => '',
            'exclude' => '24',
          )));
        echo "</ul>";
      echo '</div>';

      echo $args['after_widget'];
    }

    public function form( $instance ) {

        $title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( '', 'text_domain' );
        $text = ! empty( $instance['text'] ) ? $instance['text'] : esc_html__( '', 'text_domain' );
        ?>
        <p>
        <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php echo esc_html__( 'Title:', 'text_domain' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
        </p>
        <?php

    }

    public function update( $new_instance, $old_instance ) {

        $instance = array();

        $instance['title'] = ( !empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';

        return $instance;
    }

}
$my_widget = new My_Widget();
