<?php 

require_once(get_theme_file_path('/inc/tgm.php'));
require_once(get_theme_file_path('/inc/kriki-customizer.php'));

if (site_url() == 'http://localhost/kriki') {

    define('VERSION', time());
} else {
    define('VERSION', wp_get_theme()->get('VERSION'));
}

function kriki_setup(){
	load_theme_textdomain('kirki',get_theme_file_path('/languages'));

	add_theme_support( 'post-thumbnails');
    set_post_thumbnail_size( 350, 230 );
	add_theme_support('custom-logo');
	add_theme_support('title-tag');
	add_theme_support('automatic-feed-links');

	add_theme_support('html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
			

		));

	   // Set up the WordPress core custom background feature.
        add_theme_support(
            'custom-background',
            apply_filters(
                'ashraf_kriki_custom_background_args',
                array(
                    'default-color' => 'ffffff',
                    'default-image' => '',
                )
            )
        );

       
        add_theme_support('custom-logo', array(
            'height'      => 250,
            'width'       => 250,
            'flex-width'  => true,
            'flex-height' => true,
        ));

        register_nav_menus(array(
        	'main-menu'=>esc_html__('Primary','kirki'),
        ));

        add_image_size( 'kirki', 600, 400, true );

}

add_action('after_setup_theme','kriki_setup');


function ashraf_kriki_assets()
{
    //stylesheets
    wp_enqueue_style('fontawesome-css', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css');

    wp_enqueue_style('fotns-css', '//fonts.googleapis.com/css?family=Open+Sans|Titillium+Web:600,700', false);

   wp_enqueue_style('bootstrap-css', get_theme_file_uri('assets/css/bootstrap.min.css'),null,time());

    wp_enqueue_style('line-icon-css', get_theme_file_uri('assets/fonts/line-icons.css'),null,time());

    wp_enqueue_style('slicknav-css', get_theme_file_uri('assets/css/slicknav.css'),null,time());

    wp_enqueue_style('owl-carousel-css', get_theme_file_uri('assets/css/owl.carousel.min.css'),null,time());

    wp_enqueue_style('owl-theme-css', get_theme_file_uri('assets/css/owl.theme.css'),null,time());

    wp_enqueue_style('magnific-popup-css', get_theme_file_uri('assets/css/magnific-popup.css'),null,time());

    wp_enqueue_style('nivo-css', get_theme_file_uri('assets/css/nivo-lightbox.css'),null,time());

    wp_enqueue_style('main-css', get_theme_file_uri('assets/css/main.css'),null,time());

    wp_enqueue_style('responsive-css', get_theme_file_uri('assets/css/responsive.css'),null,time());

    wp_enqueue_style('style', get_stylesheet_uri(), null, time());



    //scripts
    wp_enqueue_script('jquery-js', get_theme_file_uri('assets/js/jquery-min.js', array('jquery'), 'VERSION', true));

    wp_enqueue_script('popper-js', get_theme_file_uri('assets/js/popper.min.js', array('jquery'), 'VERSION', true));

    wp_enqueue_script('booststrap-js', get_theme_file_uri('assets/js/bootstrap.min.js', array('jquery'),'VERSION', true));

    wp_enqueue_script('owl-carousel-js', get_theme_file_uri('assets/js/owl.carousel.min.js', array('jquery'),'VERSION', true));

    wp_enqueue_script('mixitup-js', get_theme_file_uri('assets/js/jquery.mixitup.js', array('jquery'),'VERSION', true));

    wp_enqueue_script('wow-js', get_theme_file_uri('assets/js/wow.js', array('jquery'),'VERSION', true));

    wp_enqueue_script('jquery-nav-js', get_theme_file_uri('assets/js/jquery.nav.js', array('jquery'),'VERSION', true));

    wp_enqueue_script('scrolling-nav-js', get_theme_file_uri('assets/js/scrolling-nav.js', array('jquery'),'VERSION', true));

    wp_enqueue_script('jquery-easing-js', get_theme_file_uri('assets/js/jquery.easing.min.js', array('jquery'),'VERSION', true));

    wp_enqueue_script('counterup-js', get_theme_file_uri('assets/js/jquery.counterup.min.js', array('jquery'),'VERSION', true));

    wp_enqueue_script('nivo-lightbox-js', get_theme_file_uri('assets/js/nivo-lightbox.js', array('jquery'),'VERSION', true));

    wp_enqueue_script('magnific-popup-js', get_theme_file_uri('assets/js/jquery.magnific-popup.min.js', array('jquery'),'VERSION', true));

    wp_enqueue_script('waypoints-js', get_theme_file_uri('assets/js/waypoints.min.js', array('jquery'),'VERSION', true));

    wp_enqueue_script('slicknav-js', get_theme_file_uri('assets/js/jquery.slicknav.js', array('jquery'),'VERSION', true));

    wp_enqueue_script('main-js', get_theme_file_uri('assets/js/main.js', array('jquery'),'VERSION', true));

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
   
}
add_action('wp_enqueue_scripts', 'ashraf_kriki_assets');


/**
 * Register widget area.
 */
function kirki_widgets_init() {

    /**
     * Blog Sidebar widget
     */

   
    register_sidebar( array(
        'name'          => __('Blog Sidebar', 'kirki' ),
        'id'            => 'blog_sidebar',
        'description'   => __('Blog Sidebar widget.', 'kirki'),
        'before_widget' => '<li class="widget-latest-post single-widget">',
        'after_widget'  => '</li>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );
}
add_action( 'widgets_init', 'kirki_widgets_init' );



/**
 * Recent Post  widget 
 *  */ 
class kirki_latest_post_widget extends WP_Widget {
  
    function __construct() {
    parent::__construct(
      
    // Base ID of your widget
    'latest_post_widget', 
      
    // Widget name will appear in UI
    __('Latest Post Widget', 'kirki'), 
      
    // Widget description
    array( 'description' => __( 'Latest Post Widget', 'kirki' ), ) 
    );
    }
      
    // Creating widget front-end
      
    public function widget( $args, $instance ) {
    $title = apply_filters( 'widget_title', $instance['title'] );
      
    // before and after widget arguments are defined by themes
    echo $args['before_widget'];
    if ( ! empty( $title ) )
    echo $args['before_title'] . $title . $args['after_title'];
        $post = array(
            'post_type' =>'post',
            'posts_per_page'    => 3,
        );
        $kirki_query = New WP_Query($post);
        while($kirki_query->have_posts()){
            $kirki_query->the_post();
            ?>
            <div class="block-21 mb-4 d-flex">
            <a class="blog-img mr-4" style="background-image: url('<?php echo the_post_thumbnail_url(); ?>');"></a>
                <div class="text">
                    <h3 class="heading"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                    <div class="meta">
                        <div><a href="<?php echo get_day_link(get_post_time('Y'), get_post_time('m'), get_post_time('j'));  ?>" class="entry-date"><?php the_time('F j, Y') ?></a></div>
                        <div><a><?php acf_ashraf_posted_by();?></a></div>

                    </div>
                </div>
            </div>
            <?php
        }
      ?>
         
      <?php
    
    echo $args['after_widget'];
    }
              
    // Widget Backend 
    public function form( $instance ) {
    if ( isset( $instance[ 'title' ] ) ) {
    $title = $instance[ 'title' ];
    }
    else {
    $title = __( 'Latest Post', 'kirki' );
    }
    // Widget admin form
    ?>
    <p>
    <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php __e( 'Title:' ); ?></label> 
    <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
    </p>
    <?php 
    }
          
    // Updating widget replacing old instances with new
    public function update( $new_instance, $old_instance ) {
    $instance = array();
    $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
    return $instance;
    }
     
    // Class cat_widget ends here
    } 
     
     
    // Register and load the widget
    function kirki_latest_post_widget() {
        register_widget('kirki_latest_post_widget');
    }
    add_action( 'widgets_init', 'kirki_latest_post_widget' );




