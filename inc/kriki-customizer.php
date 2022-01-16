<?php 

if ( class_exists( 'Kirki' ) ) {

Kirki::add_config( 'ashraf_kriki_config', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );

Kirki::add_panel( 'ashraf_kriki_panel', array(
    'priority'    => 10,
    'title'       => esc_html__( 'Theme  Options', 'ashraf_kirki' ),
    'description' => esc_html__( 'Theme Options description', 'ashraf_kirki' ),
) );

Kirki::add_section( 'banner_section', array(
    'title'          => esc_html__( 'Banner Section', 'ashraf_kirki' ),
    'panel'          => 'ashraf_kriki_panel',
    'priority'       => 160,
) );

//Banner Title

Kirki::add_field( 'ashraf_kriki_config', [
	'type'     => 'text',
	'settings' => 'banner_title_setting',
	'label'    => esc_html__( 'Banner Title', 'ashraf_kirki' ),
	'section'  => 'banner_section',
	'default'  => esc_html__( 'We Discover, Design & Build Digital
Presence of Businesses', 'ashraf_kirki' ),
	'priority' => 10,
	'transport'=>'postMessage',
	'js_vars'=>array(
		array(
			'element'=>'.head-title',
			'function'=>'html',

		)
	),
] );

//Banner Title Typography and color
Kirki::add_field( 'ashraf_kriki_config', [
	'type'        => 'typography',
	'settings'    => 'banner_title_typography_setting',
	'label'       => esc_html__( 'Title typography', 'ashraf_kirki' ),
	'section'     => 'banner_section',
	'default'     => [
		'font-family'    => 'Titillium Web',
		'font-weight'    => '700',
		'variant'        => 'regular',
		'font-size'      => '30px',
		'line-height'    => '48px',
		'letter-spacing' => '0',
		'color'          => '#585b60',
		'text-transform' => 'uppercase',
		'text-align'     => 'center',
	],
	'priority'    => 10,
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => '#hero-area .contents .head-title',
		],
	],
] );


//Banner Button Text
Kirki::add_field( 'ashraf_kriki_config', [
	'type'     => 'text',
	'settings' => 'banner_button_text',
	'label'    => __( 'Banner Button Text', 'ashraf_kirki' ),
	'section'  => 'banner_section',
	'default'  => 'Explore',
	'priority' => 10,
	'transport'=>'postMessage',
	'js_vars'=>array(
		array(
			'element'=>'.btn-common',
			'function'=>'html',

		)
	),
] );

//Banner Button URL
Kirki::add_field( 'ashraf_kriki_config', [
	'type'     => 'link',
	'settings' => 'banner_button_link',
	'label'    => __( 'Banner Button Link', 'ashraf_kirki' ),
	'section'  => 'banner_section',
	'default'  => 'https://kriki.ashrafbd.com/',
	'priority' => 10,
] );

//Banner Image
Kirki::add_field( 'ashraf_kriki_config', [
	'type'     => 'image',
	'settings' => 'banner_image',
	'label'    => __( 'Banner Image', 'ashraf_kirki' ),
	'section'  => 'banner_section',
	'default'  => '',
	
] );

//Banner secton Background Image

Kirki::add_field( 'ashraf_kriki_config', [
	'type'        => 'background',
	'settings'    => 'banner_background_image',
	'label'       => esc_html__( 'Banner Background Image', 'ashraf_kirki' ),
	'section'     => 'banner_section',
	'default'     => [
		'background-color'      => 'rgba(20,20,20,.8)',
		'background-image'      => '',
		'background-repeat'     => 'no-repeat',
		'background-position'   => 'center center',
		'background-size'       => 'cover',
		'background-attachment' => 'scroll',
	],
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => '#hero-area',
		],
	],
] );


//About Us section

Kirki::add_section( 'about_section', array(
    'title'          => esc_html__( 'About Section', 'ashraf_kirki' ),
    'panel'          => 'ashraf_kriki_panel',
    'priority'       => 160,
) );

//About Title

Kirki::add_field( 'ashraf_kriki_config', [
	'type'     => 'text',
	'settings' => 'about_title_setting',
	'label'    => esc_html__( 'About Title', 'ashraf_kirki' ),
	'section'  => 'about_section',
	'default'  => esc_html__( 'We are helping to grow
your business.', 'ashraf_kirki' ),
	'priority' => 10,
	'transport'=>'postMessage',
	'js_vars'=>array(
		array(
			'element'=>'.title-hl',
			'function'=>'html',

		)
	),
] );

//About description

Kirki::add_field( 'ashraf_kriki_config', [
	'type'     => 'text',
	'settings' => 'about_description_setting',
	'label'    => esc_html__( 'About Description', 'ashraf_kirki' ),
	'section'  => 'about_section',
	'default'  => esc_html__( 'A digital studio specialising in User Experience & eCommerce, we combine innovation with digital craftsmanship to help brands fulfill their potential.', 'ashraf_kirki' ),
	'priority' => 10,
	'transport'=>'postMessage',
	'js_vars'=>array(
		array(
			'element'=>'#feature p',
			'function'=>'html',

		)
	),
] );

//About Button Text
Kirki::add_field( 'ashraf_kriki_config', [
	'type'     => 'text',
	'settings' => 'about_button_text',
	'label'    => __( 'Abut Button Text', 'ashraf_kirki' ),
	'section'  => 'about_section',
	'default'  => 'More About Us',
	'priority' => 10,
	'transport'=>'postMessage',
	'js_vars'=>array(
		array(
			'element'=>'.btn-common',
			'function'=>'html',

		)
	),
] );

//About Button URL
Kirki::add_field( 'ashraf_kriki_config', [
	'type'     => 'link',
	'settings' => 'about_button_link',
	'label'    => __( 'About Button Link', 'ashraf_kirki' ),
	'section'  => 'about_section',
	'default'  => 'https://kriki.ashrafbd.com/',
	'priority' => 10,
] );

//About section Repeater Items

Kirki::add_field( 'ashraf_kriki_config', [
	'type'        => 'repeater',
	'label'       => esc_html__( 'About Items', 'ashraf_kirki' ),
	'section'     => 'about_section',
	'priority'    => 10,
	'row_label' => [
		'type'  => 'field',
		'value' => esc_html__( 'Add New Item', 'ashraf_kirki' ),
		'field' => 'about_item_title',
	],
	'button_label' => esc_html__('Add New About Item', 'ashraf_kirki' ),
	'settings'     => 'about_repeater',
	'default'      => [
		[
            'about_item_icon' => 'lni-microphone',
			'about_item_title' => __( 'What we do', 'ashraf_kirki' ),
			'about_item_desc'  => __( 'Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia con- sequuntur magni dolores ', 'ashraf_kirki' ),
		],
	],
	'fields' => [
        'about_item_icon' => [
			'type'        => 'select',
			'label'       => esc_html__( 'About Item Icon', 'ashraf_kirki' ),
			'default'     => '',
            'choices'     => array(
                'lni-microphone' => __('Icon 1', 'ashraf_kirki'),
                'lni-users' => __('Icon 2', 'ashraf_kirki'),
                'lni-medall-alt' => __('Icon 3', 'ashraf_kirki'),
            )
		],
		'about_item_title' => [
			'type'        => 'text',
			'label'       => esc_html__( 'About Item Title', 'ashraf_kirki' ),
			'default'     => '',
		],
		'about_item_desc' => [
			'type'        => 'textarea',
			'label'       => esc_html__( 'About Item Description', 'ashraf_kirki' ),
			'default'     => '',
		],
	],
    'choices' => [
		'limit' => 3
	],
] );



//Services section

Kirki::add_section( 'service_section', array(
    'title'          => esc_html__( 'Service Section', 'ashraf_kirki' ),
    'panel'          => 'ashraf_kriki_panel',
    'priority'       => 160,
) );

//Service Sedtion Show Hide
Kirki::add_field( 'ashraf_kriki_config', [
	'type'        => 'checkbox',
	'settings'    => 'service_show',
	'label'       => esc_html__( 'Show Service Section', 'kirki' ),
	'section'     => 'service_section',
	'default'     => true,
] );

//Service Title

Kirki::add_field( 'ashraf_kriki_config', [
	'type'     => 'text',
	'settings' => 'service_title',
	'label'    => esc_html__( 'Service Title', 'ashraf_kirki' ),
	'section'  => 'service_section',
	'default'  => esc_html__( 'Our Services', 'ashraf_kirki' ),
	'priority' => 10,
	'transport'=>'postMessage',
	'js_vars'=>array(
		array(
			'element'=>'#services h2',
			'function'=>'html',

		)
	),
] );

//Service description

Kirki::add_field( 'ashraf_kriki_config', [
	'type'     => 'text',
	'settings' => 'service_description',
	'label'    => esc_html__( 'Service Description', 'ashraf_kirki' ),
	'section'  => 'service_section',
	'default'  => esc_html__( 'A desire to help and empower others between community contributors in technology
began to grow in 2020.', 'ashraf_kirki' ),
	'priority' => 10,
	'transport'=>'postMessage',
	'js_vars'=>array(
		array(
			'element'=>'#services p',
			'function'=>'html',

		)
	),
] );


//Service section Repeater Items


Kirki::add_field( 'ashraf_kriki_config', [
	'type'        => 'repeater',
	'label'       => esc_html__( 'Service Items', 'ashraf_kirki' ),
	'section'     => 'service_section',
	'priority'    => 10,
	'row_label' => [
		'type'  => 'field',
		'value' => esc_html__( 'Add New Item', 'ashraf_kirki' ),
		'field' => 'service_item_title',
	],
	'button_label' => esc_html__('Add New About Item', 'ashraf_kirki' ),
	'settings'     => 'service_repeater',
	'default'      => [
		[
            'service_item_icon' => 'lni-pencil',
			'service_item_title' => __( 'Content Writing', 'ashraf_kirki' ),
			'service_item_desc'  => __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde perspiciatis dicta labore nulla beatae quaerat quia incidunt laborum aspernatur...', 'ashraf_kirki' ),
		],
	],
	'fields' => [
        'service_item_icon' => [
			'type'        => 'select',
			'label'       => esc_html__( 'Service Item Icon', 'ashraf_kirki' ),
			'default'     => 'lni-pencil',
            'choices'     => array(
                'lni-pencil' => __('Pencil', 'ashraf_kirki'),
                'lni-briefcase' => __('Briefcase', 'ashraf_kirki'),
                'lni-cog' => __('Cog', 'ashraf_kirki'),
                'lni-mobile' => __('Mobile', 'ashraf_kirki'),
                'lni-layers' => __('Layers', 'ashraf_kirki'),
                'lni-rocket' => __('Rocket', 'ashraf_kirki'),
            )
		],
		'service_item_title' => [
			'type'        => 'text',
			'label'       => esc_html__( 'Service Item Title', 'ashraf_kirki' ),
			'default'     => '',
		],
		'service_item_desc' => [
			'type'        => 'textarea',
			'label'       => esc_html__( 'Service Item Description', 'ashraf_kirki' ),
			'default'     => '',
		],
	],
    'choices' => [
		'limit' => 6
	],
] );

}


// service item align
Kirki::add_field( 'ashraf_kriki_config', [
	'type'        => 'radio-buttonset',
	'settings'    => 'service_item_align',
	'label'       => esc_html__( 'Service Item Align', 'ashraf_kirki' ),
	'section'     => 'service_section',
	'default'     => 'left',
	'priority'    => 10,
	'choices'     => [
		'left'   => esc_html__( 'Left', 'ashraf_kirki' ),
		'center' => esc_html__( 'Center', 'ashraf_kirki' ),
		'right'  => esc_html__( 'Right', 'ashraf_kirki' ),
	],
	'output'=>array(

		array(
			'element'=>'.services-item',
			'property'=>'text-align',

		)
	),
] );

//service item column 
Kirki::add_field( 'ashraf_kriki_config', [
	'type'        => 'radio-buttonset',
	'settings'    => 'service_item_column',
	'label'       => esc_html__( 'Service Item column', 'ashraf_kirki' ),
	'section'     => 'service_section',
	'default'     => 'col-lg-4',
	'priority'    => 10,
	'choices'     => [
		'col-lg-4'   => esc_html__( '03 columns', 'ashraf_kirki' ),
		'col-lg-6' => esc_html__( '02 columns', 'ashraf_kirki' ),
		'col-lg-3'  => esc_html__( '04 columns', 'ashraf_kirki' ),
	],
] );



//Promo video section
Kirki::add_section( 'video_section', array(
    'title'          => esc_html__( 'Video Section', 'ashraf_kirki' ),
    'panel'          => 'ashraf_kriki_panel',
    'priority'       => 160,
) );

//Video Section Show Hide
Kirki::add_field( 'ashraf_kriki_config', [
	'type'        => 'switch',
	'settings'    => 'video_show',
	'label'       => esc_html__( 'Show Video Section', 'kirki' ),
	'section'     => 'video_section',
	'default'     => true,
] );

//Video Title

Kirki::add_field( 'ashraf_kriki_config', [
	'type'     => 'text',
	'settings' => 'video_title',
	'label'    => esc_html__( 'Video Title', 'ashraf_kirki' ),
	'section'  => 'video_section',
	'default'  => esc_html__( 'Watch Video', 'ashraf_kirki' ),
	'priority' => 10,
	'transport'=>'postMessage',
	'js_vars'=>array(
		array(
			'element'=>'.video-promo .video-promo-content h2',
			'function'=>'html',

		)
	),
] );


//Video Link
Kirki::add_field( 'ashraf_kriki_config', [
	'type'     => 'link',
	'settings' => 'video_link',
	'label'    => esc_html__( 'Video Link', 'ashraf_kirki' ),
	'section'  => 'video_section',
	'default'  => 'https://www.youtube.com/watch?v=yP6kdOZHids'

	
] );

//Video icon
Kirki::add_field( 'ashraf_kriki_config', [
	'type'     => 'select',
	'settings' => 'video_icon',
	'label'    => esc_html__( 'Video Icon', 'ashraf_kirki' ),
	'section'  => 'video_section',
	'default'  => esc_html__( 'lni-film-play', 'ashraf_kirki' ),
	'choices'=>array(
		'lni-film-play'=>__('Play','ashraf_kirki'),
		'lni-video'=>__('Vieo','ashraf_kirki'),

	),

	
] );


//Video Background Image
Kirki::add_field( 'ashraf_kriki_config', [
	'type'     => 'background',
	'settings' => 'video_bg_image',
	'label'    => esc_html__( 'Video Background', 'ashraf_kirki' ),
	'section'  => 'video_section',
	'transport'=>'auto',
	'output'=>array(
		array(
			
			'element'=>'.video-promo',

		)
	),
	
	
] );

//Team Section

Kirki::add_section( 'team_section', array(
    'title'          => esc_html__( 'Team Section', 'ashraf_kirki' ),
    'panel'          => 'ashraf_kriki_panel',
    'priority'       => 160,
) );

//Team Section Show Hide
Kirki::add_field( 'ashraf_kriki_config', [
	'type'        => 'switch',
	'settings'    => 'team_section_show',
	'label'       => esc_html__( 'Show Team Section', 'kirki' ),
	'section'     => 'team_section',
	'default'     => true,
] );

//Team Section Title

Kirki::add_field( 'ashraf_kriki_config', [
	'type'     => 'text',
	'settings' => 'team_section_title',
	'label'    => esc_html__( 'Team Section Title', 'ashraf_kirki' ),
	'section'  => 'team_section',
	'default'  => esc_html__( 'Meet our team', 'ashraf_kirki' ),
	'priority' => 10,
	'transport'=>'postMessage',
	'js_vars'=>array(
		array(
			'element'=>'#team .section-header h2',
			'function'=>'html',

		)
	),
] );

//Team Section Description

Kirki::add_field( 'ashraf_kriki_config', [
	'type'     => 'text',
	'settings' => 'team_section_desc',
	'label'    => esc_html__( 'Team Section Description', 'ashraf_kirki' ),
	'section'  => 'team_section',
	'default'  => esc_html__( 'A desire to help and empower others between community contributors in technology
began to grow in 2020.', 'ashraf_kirki' ),
	'priority' => 10,
	'transport'=>'postMessage',
	'js_vars'=>array(
		array(
			'element'=>'#team .section-header p',
			'function'=>'html',

		)
	),
] );

//Team section Repeater Items

Kirki::add_field( 'ashraf_kriki_config', [
	'type'        => 'repeater',
	'label'       => esc_html__( 'Team Items', 'ashraf_kirki' ),
	'section'     => 'team_section',
	'priority'    => 10,
	'row_label' => [
		'type'  => 'field',
		'value' => esc_html__( 'Add New Item', 'ashraf_kirki' ),
		'field' => 'team_item_title',
	],
	'button_label' => esc_html__('Add New Team Item', 'ashraf_kirki' ),
	'settings'     => 'team_repeater',
	'default'      =>'',
	'fields' => [
        'team_member_facebook' => [
			'type'        => 'link',
			'label'       => esc_html__( 'Facebook', 'ashraf_kirki' ),
			'default'     => 'https://facebook.com',
           
		],
		'team_member_twitter' => [
			'type'        => 'link',
			'label'       => esc_html__( 'Twitter', 'ashraf_kirki' ),
			'default'     => 'https://twitter.com',
           
		],
		'team_member_instagram' => [
			'type'        => 'link',
			'label'       => esc_html__( 'Instagram', 'ashraf_kirki' ),
			'default'     => 'https://instagram.com',
           
		],
		'team_people_name' => [
			'type'        => 'text',
			'label'       => esc_html__( 'Teams People Name', 'ashraf_kirki' ),
			'default'     => 'Jon Doe',
		],
		'teams_people_desg' => [
			'type'        => 'text',
			'label'       => esc_html__( 'Teams Peolple Designation', 'ashraf_kirki' ),
			'default'     => 'Web developer',
		],
		'teams_people_image' => [
			'type'        => 'image',
			'label'       => esc_html__( 'Teams Peolple image', 'ashraf_kirki' ),
			'default'     => 'https://via.placeholder.com/480',
		],
	],
    'choices' => [
		'limit' => 4
	],
] );


//Counter Section

Kirki::add_section( 'counter_section', array(
    'title'          => esc_html__( 'Counter Section', 'ashraf_kirki' ),
    'panel'          => 'ashraf_kriki_panel',
    'priority'       => 160,
) );

//Counter Section Show Hide
Kirki::add_field( 'ashraf_kriki_config', [
	'type'        => 'switch',
	'settings'    => 'counter_section_show',
	'label'       => esc_html__( 'Show Counter Section', 'kirki' ),
	'section'     => 'counter_section',
	'default'     => true,
] );



//Counter section Repeater Items

Kirki::add_field( 'ashraf_kriki_config', [
	'type'        => 'repeater',
	'label'       => esc_html__( 'Counter Items', 'ashraf_kirki' ),
	'section'     => 'counter_section',
	'priority'    => 10,
	'row_label' => [
		'type'  => 'field',
		'value' => esc_html__( 'Add New Item', 'ashraf_kirki' ),
		'field' => 'counter_item_title',
	],
	'button_label' => esc_html__('Add New Counter Item', 'ashraf_kirki' ),
	'settings'     => 'counter_repeater',
	'default'      =>'',
	'fields' => [
        'counter_icon' => [
			'type'        => 'select',
			'label'       => esc_html__( 'User', 'ashraf_kirki' ),
			'default'     => 'lni-users',
			'choices'	=>array(
				 'lni-users' => __('Users', 'ashraf_kirki'),
				 'lni-emoji-smile' => __('Smile', 'ashraf_kirki'),
				 'lni-download' => __('Download', 'ashraf_kirki'),
				 'lni-thumbs-up' => __('Thumps Up', 'ashraf_kirki'),
			)
           
		],
		'counter_numbers' => [
			'type'        => 'number',
			'label'       => esc_html__( 'Conter Number', 'ashraf_kirki' ),
			'default'     => '100',
           
		],
		'counter_item_title' => [
			'type'        => 'text',
			'label'       => esc_html__( 'Counter Item Title', 'ashraf_kirki' ),
			'default'     => 'Users',
           
		],
		
	],
    'choices' => [
		'limit' => 4
	],
] );




//Price section

Kirki::add_section( 'price_section', array(
    'title'          => esc_html__( 'Price Section', 'ashraf_kirki' ),
    'panel'          => 'ashraf_kriki_panel',
    'priority'       => 160,
) );

//Price Sedtion Show Hide
Kirki::add_field( 'ashraf_kriki_config', [
	'type'        => 'switch',
	'settings'    => 'price_section_show',
	'label'       => esc_html__( 'Show Price Section', 'kirki' ),
	'section'     => 'price_section',
	'default'     => true,
] );

//Price Title

Kirki::add_field( 'ashraf_kriki_config', [
	'type'     => 'text',
	'settings' => 'price_section_title',
	'label'    => esc_html__( 'Price Section Title', 'ashraf_kirki' ),
	'section'  => 'price_section',
	'default'  => esc_html__( 'Best Pricing', 'ashraf_kirki' ),
	'priority' => 10,
	'transport'=>'postMessage',
	'js_vars'=>array(
		array(
			'element'=>'#pricing .section-header h2',
			'function'=>'html',

		)
	),
] );

//Price description

Kirki::add_field( 'ashraf_kriki_config', [
	'type'     => 'text',
	'settings' => 'price_section_description',
	'label'    => esc_html__( 'Price Section Description', 'ashraf_kirki' ),
	'section'  => 'price_section',
	'default'  => esc_html__( 'A desire to help and empower others between community contributors in technology
began to grow in 2020.', 'ashraf_kirki' ),
	'priority' => 10,
	'transport'=>'postMessage',
	'js_vars'=>array(
		array(
			'element'=>'#pricing .section-header p',
			'function'=>'html',

		)
	),
] );


//Price section Repeater Items


Kirki::add_field( 'ashraf_kriki_config', [
	'type'        => 'repeater',
	'label'       => esc_html__( 'Price Items', 'ashraf_kirki' ),
	'section'     => 'price_section',
	'priority'    => 10,
	'row_label' => [
		'type'  => 'field',
		'value' => esc_html__( 'Add New Item', 'ashraf_kirki' ),
		'field' => 'price_item_title',
	],
	'button_label' => esc_html__('Add New Price Item', 'ashraf_kirki' ),
	'settings'     => 'price_repeater',
	'fields' => [
			'pricing_item_options' => [
			'type'        => 'select',
			'label'       => esc_html__( 'Pricing Item options', 'ashraf_kirki' ),
			'default'     => array('Business Analyzing', '24/7 Tech Suport', 'Operational Excellence'),
			'multiple'	=>12,
			'choices'     => [
				'business-analyzing' => esc_html__( 'Business Analyzing', 'ashraf_kirki' ),
				'tech-support' => esc_html__( '24/7 Tech Suport', 'ashraf_kirki' ),
				'operational-excellence' => esc_html__( 'Operational Excellence', 'ashraf_kirki' ),
				'business-idea' => esc_html__( 'Business Idea Ready', 'ashraf_kirki' ),
				'database' => esc_html__( '2 Database', 'ashraf_kirki' ),
				'customer-support' => esc_html__( 'Customer Support', 'ashraf_kirki' ),
							],

		],
		
        'pricing_item_title' => [
			'type'        => 'text',
			'label'       => esc_html__( 'Pricing Item Title', 'ashraf_kirki' ),
			'default'     => 'Basic',
           
		],
		'pricing_item_value' => [
			'type'        => 'number',
			'label'       => esc_html__( 'Pricing Item Value', 'ashraf_kirki' ),
			'default'     => '12.90',
           
		],
		'pricing_item_button_url' => [
			'type'        => 'link',
			'label'       => esc_html__( 'Pricing  Item Button Link', 'ashraf_kirki' ),
			'default'     => 'https//kirki.ashrafbd.com',
		],
		'pricing_item_button_text' => [
			'type'        => 'text',
			'label'       => esc_html__( 'Pricing Item Button Text', 'ashraf_kirki' ),
			'default'     => 'GET IT',
		],
	
	],

    'choices' => [
		'limit' => 3
	],
] );


//Skill section

Kirki::add_section( 'skill_section', array(
    'title'          => esc_html__( 'Skill Section', 'ashraf_kirki' ),
    'panel'          => 'ashraf_kriki_panel',
    'priority'       => 160,
) );

//Skill Section Show Hide
Kirki::add_field( 'ashraf_kriki_config', [
	'type'        => 'switch',
	'settings'    => 'skill_section_show',
	'label'       => esc_html__( 'Show Skill Section', 'kirki' ),
	'section'     => 'skill_section',
	'default'     => true,
] );

//Skill Title

Kirki::add_field( 'ashraf_kriki_config', [
	'type'     => 'text',
	'settings' => 'skill_title_setting',
	'label'    => esc_html__( 'Skill Title', 'ashraf_kirki' ),
	'section'  => 'skill_section',
	'default'  => esc_html__( 'Our Skill.', 'ashraf_kirki' ),
	'priority' => 10,
	'transport'=>'postMessage',
	'js_vars'=>array(
		array(
			'element'=>'.skill-area .site-heading h2',
			'function'=>'html',

		)
	),
] );

//Skill description

Kirki::add_field( 'ashraf_kriki_config', [
	'type'     => 'text',
	'settings' => 'skill_description_setting',
	'label'    => esc_html__( 'Skill Description', 'ashraf_kirki' ),
	'section'  => 'skill_section',
	'default'  => esc_html__( ' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus architecto .', 'ashraf_kirki' ),
	'priority' => 10,
	'transport'=>'postMessage',
	'js_vars'=>array(
		array(
			'element'=>'.skill-area .site-heading p',
			'function'=>'html',

		)
	),
] );

//Skill image

Kirki::add_field( 'ashraf_kriki_config', [
	'type'     => 'image',
	'settings' => 'skill_image_setting',
	'label'    => esc_html__( 'Skill Description', 'ashraf_kirki' ),
	'section'  => 'skill_section',
	
] );

//Skill  Repeater Items

Kirki::add_field( 'ashraf_kriki_config', [
	'type'        => 'repeater',
	'label'       => esc_html__( 'Skill Items', 'ashraf_kirki' ),
	'section'     => 'skill_section',
	'priority'    => 10,
	'row_label' => [
		'type'  => 'field',
		'value' => esc_html__( 'Add New Item', 'ashraf_kirki' ),
		'field' => 'skill_item_title',
	],
	'button_label' => esc_html__('Add New Counter Item', 'ashraf_kirki' ),
	'settings'     => 'skill_repeater',
	'default'      =>'',
	'fields' => [
        'skill_item_title' => [
			'type'        => 'text',
			'label'       => esc_html__( 'Skill Title', 'ashraf_kirki' ),
			'default'     => '',
           
		],
		'skill_numbers' => [
			'type'        => 'number',
			'label'       => esc_html__( 'Skill Number', 'ashraf_kirki' ),
			'default'     => '98',
           
		],
		
	],
    'choices' => [
		'limit' => 3
	],
] );

// Work Section
Kirki::add_section( 'work_section', array(
    'title'          => esc_html__( 'Work Section', 'ashraf_kirki' ),
    'panel'          => 'ashraf_kriki_panel',
    'priority'       => 160,
) );

//  Work Show / Hide
Kirki::add_field( 'ashraf_kriki_config', [
	'type'     => 'switch',
	'settings' => 'work_show',
	'label'    => esc_html__( 'Work Show?', 'ashraf_kirki' ),
	'section'  => 'work_section',
	'default'  => 'show',
	'choices'     => [
		'show'  => esc_html__( 'Show', 'ashraf_kirki' ),
		'hide' => esc_html__( 'Hide', 'ashraf_kirki' ),
	],
] );

//  Work Title
Kirki::add_field( 'ashraf_kriki_config', [
	'type'     => 'text',
	'settings' => 'work_title',
	'label'    => esc_html__( 'Work Title', 'stack' ),
	'section'  => 'work_section',
	'default'  => __('Our Work', 'ashraf_kirki')
] );

//  Work Description
Kirki::add_field( 'ashraf_kriki_config', [
	'type'     => 'textarea',
	'settings' => 'work_desc',
	'label'    => esc_html__( 'Work Description', 'ashraf_kirki' ),
	'section'  => 'work_section',
	'default'  => __('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus architecto laudantium dolorem, ', 'ashraf_kirki')
] );

// Work Items
Kirki::add_field( 'ashraf_kriki_config', [
	'type'        => 'repeater',
	'label'       => esc_html__( 'Work Items', 'ashraf_kirki' ),
	'section'     => 'work_section',
	'priority'    => 10,
	'row_label' => [
		'type'  => 'field',
		'value' => esc_html__( 'Add New Item', 'ashraf_kirki' ),
		'field' => 'work_item_title',
	],
	'button_label' => esc_html__('Add New Work Item', 'ashraf_kirki' ),
	'settings'     => 'work_repeater',
	'fields' => [
        'work_item_title' => [
			'type'        => 'text',
			'label'       => esc_html__( 'Work Title', 'ashraf_kirki' ),
			'default'     => __('Creative Design', 'stack'),
		],
		'work_item_small_image' => [
			'type'        => 'image',
			'label'       => esc_html__( 'Work Small Image', 'ashraf_kirki' ),
			'default'     => '100',
		],
		'work_item_big_image' => [
			'type'        => 'image',
			'label'       => esc_html__( 'Work Big Image', 'ashraf_kirki' ),
			'default'     => '100',
		],
	],
    'choices' => [
		'limit' => 6
	],
] );



//Blog section

Kirki::add_section( 'blog_section', array(
    'title'          => esc_html__( 'Blog Section', 'ashraf_kirki' ),
    'panel'          => 'ashraf_kriki_panel',
    'priority'       => 160,
) );

//Blog Sedtion Show Hide
Kirki::add_field( 'ashraf_kriki_config', [
	'type'        => 'switch',
	'settings'    => 'blog_section_show',
	'label'       => esc_html__( 'Show Blog Section', 'kirki' ),
	'section'     => 'blog_section',
	'default'     => true,
] );

//Blog Title

Kirki::add_field( 'ashraf_kriki_config', [
	'type'     => 'text',
	'settings' => 'blog_section_title',
	'label'    => esc_html__( 'Price Blog Title', 'ashraf_kirki' ),
	'section'  => 'blog_section',
	'default'  => esc_html__( 'Best Pricing', 'ashraf_kirki' ),
	'priority' => 10,
	'transport'=>'postMessage',
	'js_vars'=>array(
		array(
			'element'=>'#blog .section-header h2',
			'function'=>'html',

		)
	),
] );

//Blog description

Kirki::add_field( 'ashraf_kriki_config', [
	'type'     => 'text',
	'settings' => 'blog_section_description',
	'label'    => esc_html__( 'Blog Section Description', 'ashraf_kirki' ),
	'section'  => 'blog_section',
	'default'  => esc_html__( 'A desire to help and empower others between community contributors in technology
began to grow in 2020.', 'ashraf_kirki' ),
	'priority' => 10,
	'transport'=>'postMessage',
	'js_vars'=>array(
		array(
			'element'=>'#blog .section-header p',
			'function'=>'html',

		)
	),
] );

//Testimonial section

Kirki::add_section( 'testimonial_section', array(
    'title'          => esc_html__( 'Testimonial Section', 'ashraf_kirki' ),
    'panel'          => 'ashraf_kriki_panel',
    'priority'       => 160,
) );

//Testimonial Sedtion Show Hide
Kirki::add_field( 'ashraf_kriki_config', [
	'type'        => 'switch',
	'settings'    => 'testimonial_section_show',
	'label'       => esc_html__( 'Show Testimonial Section', 'kirki' ),
	'section'     => 'testimonial_section',
	'default'     => true,
] );

//Testimonial Section Backgroud Image

Kirki::add_field( 'ashraf_kriki_config', [
	'type'     => 'background',
	'settings' => 'testimonial_section_bg',
	'label'    => esc_html__( 'Testimonial Section Background', 'ashraf_kirki' ),
	'section'  => 'testimonial_section',
	'transport'=>'auto',
	'output'=>array(
		array(
			
			'element'=>'.testimonial',

		)
	),
	
	
] );

//Testimonial Repeater Section
Kirki::add_field( 'ashraf_kriki_config', [
	'type'        => 'repeater',
	'label'       => esc_html__( 'Team Items', 'ashraf_kirki' ),
	'section'     => 'testimonial_section',
	'priority'    => 10,
	'row_label' => [
		'type'  => 'field',
		'value' => esc_html__( 'Add New Item', 'ashraf_kirki' ),
		'field' => 'testimonial_item_title',
	],
	'button_label' => esc_html__('Add New Testimonial Item', 'ashraf_kirki' ),
	'settings'     => 'testimonial_repeater',
	'default'      =>'',
	'fields' => [
        'testimonial_item_image' => [
			'type'        => 'image',
			'label'       => esc_html__( 'Testimonial Item Image', 'ashraf_kirki' ),
			'default'     => 'https://via.placeholder.com/480',
           
		],
		'info_name' => [
			'type'        => 'text',
			'label'       => esc_html__( 'Testimonial Info Name', 'ashraf_kirki' ),
			'default'     => 'Jon Doe',
           
		],
		'info_desig' => [
			'type'        => 'text',
			'label'       => esc_html__( 'Testimonial Info Designation', 'ashraf_kirki' ),
			'default'     => 'Boston Brothers co.com',
           
		],
		'testimonial_item_description' => [
			'type'        => 'text',
			'label'       => esc_html__( 'Testimonial Item Description', 'ashraf_kirki' ),
			'default'     => 'Holisticly empower leveraged ROI whereas effective web-readiness. Completely enable emerging meta-services with cross-platform web services. Quickly initiate inexpensive total linkage rather than extensible scenarios. Holisticly empower leveraged ROI whereas effective web-readiness.',
		],
	],
    'choices' => [
		'limit' => 5
	],
] );


//Clients section

Kirki::add_section( 'clients_section', array(
    'title'          => esc_html__( 'Clients Section', 'ashraf_kirki' ),
    'panel'          => 'ashraf_kriki_panel',
    'priority'       => 160,
) );

//Testimonial Sedtion Show Hide
Kirki::add_field( 'ashraf_kriki_config', [
	'type'        => 'switch',
	'settings'    => 'clients_section_show',
	'label'       => esc_html__( 'Show Clients Section', 'kirki' ),
	'section'     => 'clients_section',
	'default'     => true,
] );

//Clients Section Title

Kirki::add_field( 'ashraf_kriki_config', [
	'type'     => 'text',
	'settings' => 'clients_section_title',
	'label'    => esc_html__( 'Clients Section Title', 'ashraf_kirki' ),
	'section'  => 'clients_section',
	'default'  => esc_html__( 'NOTABLE CLIENTS', 'ashraf_kirki' ),
	'priority' => 10,
	'transport'=>'postMessage',
	'js_vars'=>array(
		array(
			'element'=>'#clients .section-header h2',
			'function'=>'html',

		)
	),
	
	
] );

//Clients Section Description

Kirki::add_field( 'ashraf_kriki_config', [
	'type'     => 'text',
	'settings' => 'clients_section_desc',
	'label'    => esc_html__( 'Clients Section Description', 'ashraf_kirki' ),
	'section'  => 'clients_section',
	'default'  => esc_html__( 'Over the last 20 years, we have helped and guided organisations to achieve outstanding results', 'ashraf_kirki' ),
	'priority' => 10,
	'transport'=>'postMessage',
	'js_vars'=>array(
		array(
			'element'=>'#clients .section-header p',
			'function'=>'html',

		)
	),
	
	
] );


// Clietns Items
Kirki::add_field( 'ashraf_kriki_config', [
	'type'        => 'repeater',
	'label'       => esc_html__( 'Clients Items', 'ashraf_kirki' ),
	'section'     => 'clients_section',
	'priority'    => 10,
	'row_label' => [
		'type'  => 'field',
		'value' => esc_html__( 'Add New Item', 'ashraf_kirki' ),
		'field' => 'clients_item_title',
	],
	'button_label' => esc_html__('Add New Work Item', 'ashraf_kirki' ),
	'settings'     => 'clients_repeater',
	'fields' => [
        'clients_item_title' => [
			'type'        => 'text',
			'label'       => esc_html__( 'Work Title', 'ashraf_kirki' ),
			'default'     => __('Company Name', 'stack'),
		],
		'clients_item_image' => [
			'type'        => 'image',
			'label'       => esc_html__( 'Work Item Image', 'ashraf_kirki' ),
			'default'     => 'https://via.placeholder.com/480',
		],
		
	],
   'choices' => [
		'limit' => 4
	],
] );


//Contact section

Kirki::add_section( 'contact_section', array(
    'title'          => esc_html__( 'Contact Section', 'ashraf_kirki' ),
    'panel'          => 'ashraf_kriki_panel',
    'priority'       => 160,
) );

//Contact Sedtion Show Hide
Kirki::add_field( 'ashraf_kriki_config', [
	'type'        => 'switch',
	'settings'    => 'contact_section_show',
	'label'       => esc_html__( 'Show Contact Section', 'kirki' ),
	'section'     => 'contact_section',
	'default'     => true,
] );

//Contact Section Title

Kirki::add_field( 'ashraf_kriki_config', [
	'type'     => 'text',
	'settings' => 'contact_section_title',
	'label'    => esc_html__( 'Contact Section Title', 'ashraf_kirki' ),
	'section'  => 'contact_section',
	'default'  => esc_html__( 'We are a friendly bunch.', 'ashraf_kirki' ),
	'priority' => 10,
	'transport'=>'postMessage',
	'js_vars'=>array(
		array(
			'element'=>'.contact-title h1',
			'function'=>'html',

		)
	),	
	
] );

//Contact Section Description

Kirki::add_field( 'ashraf_kriki_config', [
	'type'     => 'text',
	'settings' => 'contact_section_desc',
	'label'    => esc_html__( 'Contact Section Description', 'ashraf_kirki' ),
	'section'  => 'contact_section',
	'default'  => esc_html__( 'We create projects for companies and startups with a passion for quality', 'ashraf_kirki' ),
	'priority' => 10,
	'transport'=>'postMessage',
	'js_vars'=>array(
		array(
			'element'=>'.contact-title p',
			'function'=>'html',

		)
	),
	
	
] );

//Contact Section Sub title

Kirki::add_field( 'ashraf_kriki_config', [
	'type'     => 'text',
	'settings' => 'contact_section_subtitle',
	'label'    => esc_html__( 'Contact Section Sub Title', 'ashraf_kirki' ),
	'section'  => 'contact_section',
	'default'  => esc_html__( 'CONTACT US.', 'ashraf_kirki' ),
	'priority' => 10,
	'transport'=>'postMessage',
	'js_vars'=>array(
		array(
			'element'=>'.contact-title h2',
			'function'=>'html',

		)
	),	
	
] );

// Contact Repeater Items
Kirki::add_field( 'ashraf_kriki_config', [
	'type'        => 'repeater',
	'label'       => esc_html__( 'Clients Items', 'ashraf_kirki' ),
	'section'     => 'contact_section',
	'priority'    => 10,
	'row_label' => [
		'type'  => 'field',
		'value' => esc_html__( 'Add New Item', 'ashraf_kirki' ),
		'field' => 'contact_item_title',
	],
	'button_label' => esc_html__('Add New Contact Item', 'ashraf_kirki' ),
	'settings'     => 'contact_repeater',
	'fields' => [
        'contact_item_title' => [
			'type'        => 'text',
			'label'       => esc_html__( 'Contact Item Title', 'ashraf_kirki' ),
			'default'     => __('ADDRESS: ', 'stack'),
		],
		'contact_item_icon' => [
			'type'        => 'select',
			'label'       => esc_html__( 'Work Item Icon', 'ashraf_kirki' ),
			'default'     => 'lni-map-marker',
			'choices'     => array(
				'lni-map-marker'	=>__('Address','ashraf_kirki'),
				'lni-envelope'	=>__('Email','ashraf_kirki'),
				'lni-phone-handset'	=>__('Phone','ashraf_kirki'),
			),
		],
		
	],
   'choices' => [
		'limit' => 3
	],
] );


//Footer section

Kirki::add_section( 'footer_section', array(
    'title'          => esc_html__( 'Footer Section', 'ashraf_kirki' ),
    'panel'          => 'ashraf_kriki_panel',
    'priority'       => 160,
) );

//Footer Sedtion Show Hide
Kirki::add_field( 'ashraf_kriki_config', [
	'type'        => 'switch',
	'settings'    => 'footer_section_show',
	'label'       => esc_html__( 'Show Footer Section', 'kirki' ),
	'section'     => 'footer_section',
	'default'     => true,
] );

//Footer Logo

Kirki::add_field( 'ashraf_kriki_config', [
	'type'     => 'image',
	'settings' => 'footer_logo',
	'label'    => esc_html__( 'Footer Logo', 'ashraf_kirki' ),
	'section'  => 'footer_section',
	
	
] );

//Footer Social Links
Kirki::add_field( 'ashraf_kriki_config', [
	'type'     => 'link',
	'settings' => 'footer_social_facebook',
	'label'    => esc_html__( 'Footer Social Facebook', 'ashraf_kirki' ),
	'section'  => 'footer_section',
	'default'	=>'https://facebook.com'
	
] );

Kirki::add_field( 'ashraf_kriki_config', [
	'type'     => 'link',
	'settings' => 'footer_social_twitter',
	'label'    => esc_html__( 'Footer Social Twitter', 'ashraf_kirki' ),
	'section'  => 'footer_section',
	'default'	=>'https://twitter.com'
	
] );

Kirki::add_field( 'ashraf_kriki_config', [
	'type'     => 'link',
	'settings' => 'footer_social_instagram',
	'label'    => esc_html__( 'Footer Social Instagram', 'ashraf_kirki' ),
	'section'  => 'footer_section',
	'default'	=>'https://instagram.com'
	
] );

Kirki::add_field( 'ashraf_kriki_config', [
	'type'     => 'link',
	'settings' => 'footer_social_linkedin',
	'label'    => esc_html__( 'Footer Social Linkedin', 'ashraf_kirki' ),
	'section'  => 'footer_section',
	'default'	=>'https://linkedin.com'
	
] );



//Footer Credit

Kirki::add_field( 'ashraf_kriki_config', [
	'type'     => 'editor',
	'settings' => 'footer_credit',
	'label'    => esc_html__( 'Footer credit', 'ashraf_kirki' ),
	'section'  => 'footer_section',
	
	
] );