<?php

function custom_theme_customizer($wp_customize){
    //---------------
    //HOME PAGE PANEL
    //---------------
    $wp_customize->add_panel('Home_Page_Panel', array(
        'title'             => __('Home Page' , 'zealandiaTheme'),
        'priority'          => 30,
        'description'       => 'This panel will hold the home page sections'
    ));


    //Home Header Image section
    $wp_customize->add_section('home_header_image_section', array(
        'title'             => __('Header Image', 'zealandiaTheme'),
        'priority'          => 30,
        'panel'             => 'Home_Page_Panel'
    ));

    $wp_customize->add_setting('home_header_image_setting', array(
        'default'           => '',
        'transport'         => 'refresh'
    ));

    $wp_customize->add_control(
       new WP_Customize_Image_Control(
           $wp_customize,
           'home_header_image_control',
           array(
               'label'      => __( 'Upload an image', 'zealandiaTheme' ),
               'section'    => 'home_header_image_section',
               'settings'   => 'home_header_image_setting'
           )
       )
   );


   //Home Header Image Text section
   $wp_customize->add_section('home_header_image_title_section', array(
        'title'             => __('Header Image Text' , 'zealandiaTheme'),
        'priority'          => 53,
        'panel'             => 'Home_Page_Panel'
    ));

    //Header Image Text - Title
    $wp_customize->add_setting('home_header_image_title_setting', array(
        'default'           => '',
        'transport'         => 'refresh'
    ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'home_header_image_title_control',
            array(
                'label'     => __('Title' , 'zealandiaTheme'),
                'section'   => 'home_header_image_title_section',
                'settings'  => 'home_header_image_title_setting'
            )
        )
    );

    //Header Image Text - Paragraph
    $wp_customize->add_setting('home_header_image_paragraph_setting', array(
        'default'           => '',
        'transport'         => 'refresh'
    ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'home_header_image_text_control',
            array(
                'label'     => __('Paragraph' , 'zealandiaTheme'),
                'section'   => 'home_header_image_title_section',
                'settings'  => 'home_header_image_paragraph_setting'
            )
        )
    );

}
add_action('customize_register' , 'custom_theme_customizer');
