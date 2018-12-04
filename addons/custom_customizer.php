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

    //Home Title section
    $wp_customize->add_section('home_body_title_section', array(
         'title'             => __('Body Title Text' , 'zealandiaTheme'),
         'priority'          => 53,
         'panel'             => 'Home_Page_Panel'
     ));

     $wp_customize->add_setting('home_body_title_setting', array(
         'default'           => '',
         'transport'         => 'refresh'
     ));

     $wp_customize->add_control(
         new WP_Customize_Control(
             $wp_customize,
             'home_body_title_control',
             array(
                 'label'     => __('Body Title' , 'zealandiaTheme'),
                 'section'   => 'home_body_title_section',
                 'settings'  => 'home_body_title_setting'
             )
         )
     );

     //Opening hours section
     $wp_customize->add_section('home_opening_hours_section', array(
          'title'             => __('Opening Hours' , 'zealandiaTheme'),
          'priority'          => 53,
          'panel'             => 'Home_Page_Panel'
      ));

      $wp_customize->add_setting('home_opening_hours_setting', array(
          'default'           => '',
          'transport'         => 'refresh'
      ));

      $wp_customize->add_control(
          new WP_Customize_Date_Time_Control(
              $wp_customize,
              'home_opening_hours_control',
              array(
                  'label'     => __('General Admission Opening Hours' , 'zealandiaTheme'),
                  'section'   => 'home_opening_hours_section',
                  'settings'  => 'home_opening_hours_setting'
              )
          )
      );

     //Map Image section
     $wp_customize->add_section('home_map_image_section', array(
          'title'             => __('Map Image' , 'zealandiaTheme'),
          'priority'          => 53,
          'panel'             => 'Home_Page_Panel'
      ));

      $wp_customize->add_setting('home_map_image_setting', array(
          'default'           => '',
          'transport'         => 'refresh'
      ));

      $wp_customize->add_control(
          new WP_Customize_Image_Control(
              $wp_customize,
              'home_map_image_control',
              array(
                  'label'     => __('Choose an Image' , 'zealandiaTheme'),
                  'section'   => 'home_map_image_section',
                  'settings'  => 'home_map_image_setting'
              )
          )
      );
     //Home body lower section
     $wp_customize->add_section('home_body_lower_section_title_section', array(
          'title'             => __('Lower Section of Body' , 'zealandiaTheme'),
          'priority'          => 53,
          'panel'             => 'Home_Page_Panel'
      ));

      $wp_customize->add_setting('home_body_lower_section_title_setting', array(
          'default'           => '',
          'transport'         => 'refresh'
      ));

      $wp_customize->add_control(
          new WP_Customize_Control(
              $wp_customize,
              'home_body_lower_section_title_control',
              array(
                  'label'     => __('Title' , 'zealandiaTheme'),
                  'section'   => 'home_body_lower_section_title_section',
                  'settings'  => 'home_body_lower_section_title_setting'
              )
          )
      );

      //---------------
      //TOURS PAGE PANEL
      //---------------
      $wp_customize->add_panel('Tours_Page_Panel', array(
          'title'             => __('Tours Page' , 'zealandiaTheme'),
          'priority'          => 30,
          'description'       => 'This panel will hold the tours page sections'
      ));


      //Tours Header Image section
      $wp_customize->add_section('tours_header_image_section', array(
          'title'             => __('Header Image', 'zealandiaTheme'),
          'priority'          => 30,
          'panel'             => 'Tours_Page_Panel'
      ));

      $wp_customize->add_setting('tours_header_image_setting', array(
          'default'           => '',
          'transport'         => 'refresh'
      ));

      $wp_customize->add_control(
         new WP_Customize_Image_Control(
             $wp_customize,
             'tours_header_image_control',
             array(
                 'label'      => __( 'Upload an image', 'zealandiaTheme' ),
                 'section'    => 'tours_header_image_section',
                 'settings'   => 'tours_header_image_setting'
             )
         )
     );

     //Home Title section
     $wp_customize->add_section('tours_body_title_section', array(
          'title'             => __('Body Title Text' , 'zealandiaTheme'),
          'priority'          => 53,
          'panel'             => 'Tours_Page_Panel'
      ));

      $wp_customize->add_setting('tours_body_title_setting', array(
          'default'           => '',
          'transport'         => 'refresh'
      ));

      $wp_customize->add_control(
          new WP_Customize_Control(
              $wp_customize,
              'tours_body_title_control',
              array(
                  'label'     => __('Body Title' , 'zealandiaTheme'),
                  'section'   => 'tours_body_title_section',
                  'settings'  => 'tours_body_title_setting'
              )
          )
      );

      //---------------
      //SINGLE TOUR PAGE PANEL
      //---------------
      $wp_customize->add_panel('Single_Tour_Page_Panel', array(
          'title'             => __('Single Tour Page' , 'zealandiaTheme'),
          'priority'          => 30,
          'description'       => 'This panel will hold the single tour page sections'
      ));


      //Single tour Header Image section
      $wp_customize->add_section('single_tour_header_image_section', array(
          'title'             => __('Header Image', 'zealandiaTheme'),
          'priority'          => 30,
          'panel'             => 'Single_Tour_Page_Panel'
      ));

      $wp_customize->add_setting('single_tour_header_image_setting', array(
          'default'           => '',
          'transport'         => 'refresh'
      ));

      $wp_customize->add_control(
         new WP_Customize_Image_Control(
             $wp_customize,
             'single_tour_header_image_control',
             array(
                 'label'      => __( 'Upload an image', 'zealandiaTheme' ),
                 'section'    => 'single_tour_header_image_section',
                 'settings'   => 'single_tour_header_image_setting'
             )
         )
     );



      //Single tour carousel images
      $wp_customize->add_section('single_tour_carousel_images_section', array(
          'title'             => __('Carousel Images', 'zealandiaTheme'),
          'priority'          => 30,
          'panel'             => 'Single_Tour_Page_Panel'
      ));




      //Single tour carousel image one
      $wp_customize->add_setting('single_tour_carousel_image_one_setting', array(
          'default'           => '',
          'transport'         => 'refresh'
      ));

      $wp_customize->add_control(
         new WP_Customize_Image_Control(
             $wp_customize,
             'single_tour_carousel_image_one_control',
             array(
                 'label'      => __( 'Image One', 'zealandiaTheme' ),
                 'section'    => 'single_tour_carousel_images_section',
                 'settings'   => 'single_tour_carousel_image_one_setting'
             )
         )
     );



     //Single tour carousel image two
      $wp_customize->add_setting('single_tour_carousel_image_two_setting', array(
          'default'           => '',
          'transport'         => 'refresh'
      ));

      $wp_customize->add_control(
         new WP_Customize_Image_Control(
             $wp_customize,
             'single_tour_carousel_image_two_control',
             array(
                 'label'      => __( 'Image Two', 'zealandiaTheme' ),
                 'section'    => 'single_tour_carousel_images_section',
                 'settings'   => 'single_tour_carousel_image_two_setting'
             )
         )
     );



     //Single tour carousel image three
      $wp_customize->add_setting('single_tour_carousel_image_three_setting', array(
          'default'           => '',
          'transport'         => 'refresh'
      ));

      $wp_customize->add_control(
         new WP_Customize_Image_Control(
             $wp_customize,
             'single_tour_carousel_image_three_control',
             array(
                 'label'      => __( 'Image Three', 'zealandiaTheme' ),
                 'section'    => 'single_tour_carousel_images_section',
                 'settings'   => 'single_tour_carousel_image_three_setting'
             )
         )
     );



     //Single tour carousel image four
      $wp_customize->add_setting('single_tour_carousel_image_four_setting', array(
          'default'           => '',
          'transport'         => 'refresh'
      ));

      $wp_customize->add_control(
         new WP_Customize_Image_Control(
             $wp_customize,
             'single_tour_carousel_image_four_control',
             array(
                 'label'      => __( 'Image Four', 'zealandiaTheme' ),
                 'section'    => 'single_tour_carousel_images_section',
                 'settings'   => 'single_tour_carousel_image_four_setting'
             )
         )
     );

     //---------------
     //HEADER COLORS PANEL
     //---------------
     $wp_customize->add_panel('Header_Colors_Panel', array(
         'title'             => __('Header Colours' , 'zealandiaTheme'),
         'priority'          => 30,
         'description'       => 'This panel will hold the header colours'
     ));


     //Header Background colour
     $wp_customize->add_section('header_background_color_section', array(
         'title'             => __('Header Background Colour', 'zealandiaTheme'),
         'priority'          => 30,
         'panel'             => 'Header_Colors_Panel'
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
                'section'    => 'header_background_color_section',
                'settings'   => 'header_background_color_setting'
            )
        )
     );

     //Header font colour
     $wp_customize->add_section('header_links_color_section', array(
         'title'             => __('Header Link Colour', 'zealandiaTheme'),
         'priority'          => 30,
         'panel'             => 'Header_Colors_Panel'
     ));
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
                'section'    => 'header_links_color_section',
                'settings'   => 'header_links_color_setting'
            )
        )
     );
     //---------------
     //FOOTER COLORS PANEL
     //---------------
     $wp_customize->add_panel('Footer_Colors_Panel', array(
         'title'             => __('Footer Colours' , 'zealandiaTheme'),
         'priority'          => 30,
         'description'       => 'This panel will hold the footer colours'
     ));


     //Header Background colour
     $wp_customize->add_section('footer_background_color_section', array(
         'title'             => __('Footer Background Colour', 'zealandiaTheme'),
         'priority'          => 30,
         'panel'             => 'Footer_Colors_Panel'
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
                'section'    => 'footer_background_color_section',
                'settings'   => 'footer_background_color_setting'
            )
        )
     );

     //Header font colour
     $wp_customize->add_section('footer_links_color_section', array(
         'title'             => __('Footer Link Colour', 'zealandiaTheme'),
         'priority'          => 30,
         'panel'             => 'Footer_Colors_Panel'
     ));
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
                'section'    => 'footer_links_color_section',
                'settings'   => 'footer_links_color_setting'
            )
        )
     );

}
add_action('customize_register' , 'custom_theme_customizer');


function custom_theme_customizer_styles(){
    ?>
         <style type="text/css">
            .header-bg{
                background-color: <?php echo get_theme_mod('header_background_color_setting', '#ffffff'); ?>!important;
            }
            .header-nav li a{
                color: <?php echo get_theme_mod('header_links_color_setting', '#ffffff'); ?>!important;
            }
            .footer-nav{
                background-color: <?php echo get_theme_mod('footer_background_color_setting', '#ffffff'); ?>!important;
            }
            .footer-nav li a{
                color: <?php echo get_theme_mod('footer_links_color_setting', '#ffffff'); ?>!important;

            }
        </style>
     <?php
}
add_action('wp_head', 'custom_theme_customizer_styles');
