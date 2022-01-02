<?php 

require_once(get_theme_file_path('/inc/tgm.php'));
require_once(get_theme_file_path('/inc/kriki-customizer.php'));

if (site_url() == 'http://localhost/kriki') {

    define('VERSION', time());
} else {
    define('VERSION', wp_get_theme()->get('VERSION'));
}

function kriki_setup(){
	load_theme_textdomain('ashraf_kiri',get_theme_file_path('/languages'));

	add_theme_support('post_thumbnails');
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
        	'main-menu'=>esc_html__('Primary','ashraf_kiri'),
        ));

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

    wp_enqueue_script('counterup-js', get_theme_file_uri('assets/js/jquery.counterup.min', array('jquery'),'VERSION', true));

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


//function to stop wp autosave
add_action( 'admin_init', 'disable_autosave' );
function disable_autosave() {
    wp_deregister_script( 'autosave' );
} 







