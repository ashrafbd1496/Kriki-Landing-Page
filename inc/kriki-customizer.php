<?php 

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

//Banner Title Color
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
		'text-align'     => 'left',
	],
	'priority'    => 10,
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => '#hero-area .contents .head-title',
		],
	],
] );



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

Kirki::add_field( 'ashraf_kriki_config', [
	'type'     => 'link',
	'settings' => 'banner_button_link',
	'label'    => __( 'Banner Button Link', 'ashraf_kirki' ),
	'section'  => 'banner_section',
	'default'  => 'https://kriki.ashrafbd.com/',
	'priority' => 10,
] );

Kirki::add_field( 'ashraf_kriki_config', [
	'type'     => 'image',
	'settings' => 'banner_image',
	'label'    => __( 'Banner Image', 'ashraf_kirki' ),
	'section'  => 'banner_section',
	'default'  => '',
	
] );

