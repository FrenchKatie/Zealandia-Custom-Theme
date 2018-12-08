<?php

function custom_theme_colors_customizer($wp_customize){
  //---------------
  //COLORS PANEL
  //---------------
  $wp_customize->add_panel('Colors_Panel', array(
      'title'             => __('Colours' , 'zealandiaTheme'),
      'priority'          => 30,
      'description'       => 'This panel will hold the colours'
  ));


  //Header Section
  $wp_customize->add_section('header_color_section', array(
      'title'             => __('Header Colours', 'zealandiaTheme'),
      'priority'          => 30,
      'panel'             => 'Colors_Panel'
  ));

  $wp_customize->add_setting('header_background_color_setting', array(
      'default'           => '',
      'transport'         => 'refresh'
  ));

  $wp_customize->add_control(
     new WP_Customize_Color_Control(
         $wp_customize,
         'header_background_color_control',
         array(
             'label'      => __( 'Background Colour', 'zealandiaTheme' ),
             'section'    => 'header_color_section',
             'settings'   => 'header_background_color_setting'
         )
     )
  );

  $wp_customize->add_setting('header_links_color_setting', array(
      'default'           => '',
      'transport'         => 'refresh'
  ));

  $wp_customize->add_control(
     new WP_Customize_Color_Control(
         $wp_customize,
         'header_links_color_control',
         array(
             'label'      => __( 'Links Colour', 'zealandiaTheme' ),
             'section'    => 'header_color_section',
             'settings'   => 'header_links_color_setting'
         )
     )
  );

  //Footer Background colour
  $wp_customize->add_section('footer_color_section', array(
      'title'             => __('Footer Colours', 'zealandiaTheme'),
      'priority'          => 30,
      'panel'             => 'Colors_Panel'
  ));

  $wp_customize->add_setting('footer_background_color_setting', array(
      'default'           => '',
      'transport'         => 'refresh'
  ));

  $wp_customize->add_control(
     new WP_Customize_Color_Control(
         $wp_customize,
         'footer_background_color_control',
         array(
             'label'      => __( 'Background Colour', 'zealandiaTheme' ),
             'section'    => 'footer_color_section',
             'settings'   => 'footer_background_color_setting'
         )
     )
  );

  //Header font colour
  $wp_customize->add_setting('footer_links_color_setting', array(
      'default'           => '',
      'transport'         => 'refresh'
  ));

  $wp_customize->add_control(
     new WP_Customize_Color_Control(
         $wp_customize,
         'footer_links_color_control',
         array(
             'label'      => __( 'Links Colour', 'zealandiaTheme' ),
             'section'    => 'footer_color_section',
             'settings'   => 'footer_links_color_setting'
         )
     )
  );

  //Home Header Image Text
  $wp_customize->add_section('home_page_header_image_text_colors_section', array(
      'title'             => __('Home Page', 'zealandiaTheme'),
      'priority'          => 30,
      'panel'             => 'Colors_Panel'
  ));
  //Home page header image title text color
  $wp_customize->add_setting('home_page_header_image_title_text_color_setting', array(
      'default'           => '',
      'transport'         => 'refresh'
  ));

  $wp_customize->add_control(
     new WP_Customize_Color_Control(
         $wp_customize,
         'home_page_header_image_title_text_color_control',
         array(
             'label'      => __( 'Header Image Title Text Colour', 'zealandiaTheme' ),
             'section'    => 'home_page_header_image_text_colors_section',
             'settings'   => 'home_page_header_image_title_text_color_setting'
         )
     )
  );
  //Home page header image paragraph text color
  $wp_customize->add_setting('home_page_header_image_subheader_text_color_setting', array(
      'default'           => '',
      'transport'         => 'refresh'
  ));

  $wp_customize->add_control(
     new WP_Customize_Color_Control(
         $wp_customize,
         'home_page_header_image_subheader_text_color_control',
         array(
             'label'      => __( 'Header Image Subheader Text Colour', 'zealandiaTheme' ),
             'section'    => 'home_page_header_image_text_colors_section',
             'settings'   => 'home_page_header_image_subheader_text_color_setting'
         )
     )
  );
  //Body
  $wp_customize->add_section('main_text_colors_section', array(
      'title'             => __('General', 'zealandiaTheme'),
      'priority'          => 30,
      'panel'             => 'Colors_Panel'
  ));
  //body text color
  $wp_customize->add_setting('body_header_text_color_setting', array(
      'default'           => '',
      'transport'         => 'refresh'
  ));

  $wp_customize->add_control(
     new WP_Customize_Color_Control(
         $wp_customize,
         'body_header_text_color_control',
         array(
             'label'      => __( 'Header Text Colour', 'zealandiaTheme' ),
             'section'    => 'main_text_colors_section',
             'settings'   => 'body_header_text_color_setting'
         )
     )
  );
  //body text color
  $wp_customize->add_setting('body_text_color_setting', array(
      'default'           => '',
      'transport'         => 'refresh'
  ));

  $wp_customize->add_control(
     new WP_Customize_Color_Control(
         $wp_customize,
         'body_text_color_control',
         array(
             'label'      => __( 'Body Text Colour', 'zealandiaTheme' ),
             'section'    => 'main_text_colors_section',
             'settings'   => 'body_text_color_setting'
         )
     )
  );
  //body bacgkround color
  $wp_customize->add_setting('body_background_color_setting', array(
      'default'           => '',
      'transport'         => 'refresh'
  ));

  $wp_customize->add_control(
     new WP_Customize_Color_Control(
         $wp_customize,
         'body_background_color_control',
         array(
             'label'      => __( 'Body Background Colour', 'zealandiaTheme' ),
             'section'    => 'main_text_colors_section',
             'settings'   => 'body_background_color_setting'
         )
     )
  );
  //small header text color
  $wp_customize->add_setting('body_smallheader_text_color_setting', array(
      'default'           => '',
      'transport'         => 'refresh'
  ));

  $wp_customize->add_control(
     new WP_Customize_Color_Control(
         $wp_customize,
         'body_smallheader_text_color_control',
         array(
             'label'      => __( 'Small Header Text Colour', 'zealandiaTheme' ),
             'section'    => 'main_text_colors_section',
             'settings'   => 'body_smallheader_text_color_setting'
         )
     )
  );
  //Buttons
  $wp_customize->add_section('button_colors_section', array(
      'title'             => __('Button Colours', 'zealandiaTheme'),
      'priority'          => 30,
      'panel'             => 'Colors_Panel'
  ));
  //button background colour
  $wp_customize->add_setting('button_background_color_setting', array(
      'default'           => '',
      'transport'         => 'refresh'
  ));

  $wp_customize->add_control(
     new WP_Customize_Color_Control(
         $wp_customize,
         'button_background_color_control',
         array(
             'label'      => __( 'Button Background Colour', 'zealandiaTheme' ),
             'section'    => 'button_colors_section',
             'settings'   => 'button_background_color_setting'
         )
     )
  );
  $wp_customize->add_setting('button_text_color_setting', array(
      'default'           => '',
      'transport'         => 'refresh'
  ));

  $wp_customize->add_control(
     new WP_Customize_Color_Control(
         $wp_customize,
         'button_text_color_control',
         array(
             'label'      => __( 'Button Text Colour', 'zealandiaTheme' ),
             'section'    => 'button_colors_section',
             'settings'   => 'button_text_color_setting'
         )
     )
  );




}
add_action('customize_register' , 'custom_theme_colors_customizer');








function custom_theme_customizer_styles(){
 ?>
      <style type="text/css">
         .header-bg{
             background-color: <?php echo get_theme_mod('header_background_color_setting'); ?>!important;
         }
         .header-nav li a{
             color: <?php echo get_theme_mod('header_links_color_setting'); ?>!important;
         }
         .footer-nav{
             background-color: <?php echo get_theme_mod('footer_background_color_setting'); ?>!important;
         }
         .footer-nav li a{
             color: <?php echo get_theme_mod('footer_links_color_setting'); ?>!important;
         }
         .header_img_header {
             color: <?php echo get_theme_mod('home_page_header_image_title_text_color_setting'); ?>!important;
         }
         .header_img_subheader {
             color: <?php echo get_theme_mod('home_page_header_image_subheader_text_color_setting'); ?>!important;
         }
         body {
             color: <?php echo get_theme_mod('body_text_color_setting'); ?>!important;
             background-color: <?php echo get_theme_mod('body_background_color_setting'); ?>!important;
         }
         .subheader {
             color: <?php echo get_theme_mod('body_header_text_color_setting'); ?>!important;
         }
         .subheader {
             color: <?php echo get_theme_mod('body_header_text_color_setting'); ?>!important;
         }
         .small-header {
             color: <?php echo get_theme_mod('body_smallheader_text_color_setting'); ?>!important;
         }
         .button {
             background-color: <?php echo get_theme_mod('button_background_color_setting'); ?>!important;
             color: <?php echo get_theme_mod('button_text_color_setting'); ?>!important;
         }
         .body-list li{
             background-color: <?php echo get_theme_mod('body_background_color_setting'); ?>!important;
         }
         .body-div{
             background-color: <?php echo get_theme_mod('body_background_color_setting'); ?>!important;
         }
     </style>
  <?php
}
add_action('wp_head', 'custom_theme_customizer_styles');
