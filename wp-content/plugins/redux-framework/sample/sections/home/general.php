<?php
/**
 * Redux Framework text config.
 * For full documentation, please visit: http://docs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__( 'Tabs', 'your-textdomain-here' ),
		'desc'             => esc_html__( 'For full documentation on this field, visit: ', 'your-textdomain-here' ) . '<a href="//docs.redux.io/core/fields/text/" target="_blank">docs.redux.io/core/fields/text/</a>',
		'id'               => 'tab',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
			array(
				'id'       => 'tab1',
				'type'     => 'text',
				'title'    => esc_html__( 'tab 1 Heading ', 'your-textdomain-here' ),
				'subtitle' => esc_html__( '', 'your-textdomain-here' ),
				'desc'     => esc_html__( '', 'your-textdomain-here' ),
				'default'  => '',
			),
            
            array(
				'id'       => 'tab1a',
				'type'     => 'textarea',
				'title'    => esc_html__( 'tab 1 Text', 'your-textdomain-here' ),
				'subtitle' => esc_html__( '', 'your-textdomain-here' ),
				'desc'     => esc_html__( '', 'your-textdomain-here' ),
				'default'  => '',
			),
            
            array(
				'id'       => 'tab2',
				'type'     => 'text',
				'title'    => esc_html__( 'tab 2 Heading ', 'your-textdomain-here' ),
				'subtitle' => esc_html__( '', 'your-textdomain-here' ),
				'desc'     => esc_html__( '', 'your-textdomain-here' ),
				'default'  => '',
			),
            
            array(
				'id'       => 'tab2a',
				'type'     => 'textarea',
				'title'    => esc_html__( 'tab 2 Text', 'your-textdomain-here' ),
				'subtitle' => esc_html__( '', 'your-textdomain-here' ),
				'desc'     => esc_html__( '', 'your-textdomain-here' ),
				'default'  => '',
			),
            
            array(
				'id'       => 'tab3',
				'type'     => 'text',
				'title'    => esc_html__( 'tab 3 Heading ', 'your-textdomain-here' ),
				'subtitle' => esc_html__( '', 'your-textdomain-here' ),
				'desc'     => esc_html__( '', 'your-textdomain-here' ),
				'default'  => '',
			),
            
            array(
				'id'       => 'tab3a',
				'type'     => 'textarea',
				'title'    => esc_html__( 'tab 3 Text', 'your-textdomain-here' ),
				'subtitle' => esc_html__( '', 'your-textdomain-here' ),
				'desc'     => esc_html__( '', 'your-textdomain-here' ),
				'default'  => '',
			),
            
            array(
				'id'       => 'tab4',
				'type'     => 'text',
				'title'    => esc_html__( 'tab 4 Heading ', 'your-textdomain-here' ),
				'subtitle' => esc_html__( '', 'your-textdomain-here' ),
				'desc'     => esc_html__( '', 'your-textdomain-here' ),
				'default'  => '',
			),
            
            array(
				'id'       => 'tab4a',
				'type'     => 'textarea',
				'title'    => esc_html__( 'tab 4 Text', 'your-textdomain-here' ),
				'subtitle' => esc_html__( '', 'your-textdomain-here' ),
				'desc'     => esc_html__( '', 'your-textdomain-here' ),
				'default'  => '',
			),
            
            array(
				'id'       => 'tab5',
				'type'     => 'text',
				'title'    => esc_html__( 'tab 5 Heading ', 'your-textdomain-here' ),
				'subtitle' => esc_html__( '', 'your-textdomain-here' ),
				'desc'     => esc_html__( '', 'your-textdomain-here' ),
				'default'  => '',
			),
            
            array(
				'id'       => 'tab5a',
				'type'     => 'textarea',
				'title'    => esc_html__( 'tab 5 Text', 'your-textdomain-here' ),
				'subtitle' => esc_html__( '', 'your-textdomain-here' ),
				'desc'     => esc_html__( '', 'your-textdomain-here' ),
				'default'  => '',
			),
             array(
				'id'       => 'tab6',
				'type'     => 'text',
				'title'    => esc_html__( 'tab 6 Heading ', 'your-textdomain-here' ),
				'subtitle' => esc_html__( '', 'your-textdomain-here' ),
				'desc'     => esc_html__( '', 'your-textdomain-here' ),
				'default'  => '',
			),
            
            array(
				'id'       => 'tab6a',
				'type'     => 'textarea',
				'title'    => esc_html__( 'tab 6 Text', 'your-textdomain-here' ),
				'subtitle' => esc_html__( '', 'your-textdomain-here' ),
				'desc'     => esc_html__( '', 'your-textdomain-here' ),
				'default'  => '',
			),
           
            
            
            
            
		),
	)
);
