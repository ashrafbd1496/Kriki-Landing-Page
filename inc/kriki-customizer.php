<?php 

if ( class_exists( 'Kirki' ) ) {
	
Kirki::add_config( 'ashraf_kriki_config', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );

Kirki::add_panel( 'ashraf_kriki_panel', array(
    'priority'    => 10,
    'title'       => esc_html__( 'Header Options', 'ashraf_kirki' ),
    'description' => esc_html__( 'Header Options description', 'ashraf_kirki' ),
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