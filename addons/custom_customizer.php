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


    //Header image button link
    $wp_customize->add_section('home_page_header_image_button_section', array(
       'title' => __('Header Image Button ' , 'zealandiaTheme'),
       'priority' => 21,
       'panel' => 'Home_Page_Panel'
   ));
    $wp_customize->add_setting('home_page_header_image_button_link_setting', array(
       'default' => '',
       'transport' => 'refresh'
   ));


    $wp_customize->add_control(
       new WP_Customize_Control(
           $wp_customize,
           'home_page_header_image_button_link_control',
           array(
               'label' => __('Button Link', 'zealandiaTheme'),
               'section' => 'home_page_header_image_button_section',
               'settings' => 'home_page_header_image_button_link_setting'
           )
       )
   );
    //Header image button text
    $wp_customize->add_section('home_page_header_image_button_text_section', array(
       'title' => __('Button Text ' , 'zealandiaTheme'),
       'priority' => 21,
       'panel' => 'Home_Page_Panel'
   ));
    $wp_customize->add_setting('home_page_header_image_button_text_setting', array(
       'default' => '',
       'transport' => 'refresh'
   ));
    $wp_customize->add_control(
       new WP_Customize_Control(
           $wp_customize,
           'home_page_header_image_button_text_control',
           array(
               'label' => __('Button Text', 'zealandiaTheme'),
               'section' => 'home_page_header_image_button_section',
               'settings' => 'home_page_header_image_button_text_setting'
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
      //general admission opening hours
      $wp_customize->add_setting('home_general_admission_opening_hours_setting', array(
          'default'           => '',
          'transport'         => 'refresh'
      ));

      $wp_customize->add_control(
          new WP_Customize_Control(
              $wp_customize,
              'home_general_admission_opening_hours_control',
              array(
                  'label'     => __('General Admission Opening Hours' , 'zealandiaTheme'),
                  'section'   => 'home_opening_hours_section',
                  'settings'  => 'home_general_admission_opening_hours_setting'
              )
          )
      );

      //rata cafe weekdays hours
      $wp_customize->add_setting('home_cafe_weekday_opening_hours_setting', array(
          'default'           => '',
          'transport'         => 'refresh'
      ));

      $wp_customize->add_control(
          new WP_Customize_Control(
              $wp_customize,
              'home_cafe_weekday_opening_hours_control',
              array(
                  'label'     => __('Rata Cafe Weekdays Opening Hours' , 'zealandiaTheme'),
                  'section'   => 'home_opening_hours_section',
                  'settings'  => 'home_cafe_weekday_opening_hours_setting'
              )
          )
      );

      //rata cafe weekends hours
      $wp_customize->add_setting('home_cafe_weekends_opening_hours_setting', array(
          'default'           => '',
          'transport'         => 'refresh'
      ));

      $wp_customize->add_control(
          new WP_Customize_Control(
              $wp_customize,
              'home_cafe_weekends_opening_hours_control',
              array(
                  'label'     => __('Rata Cafe Weekends Opening Hours' , 'zealandiaTheme'),
                  'section'   => 'home_opening_hours_section',
                  'settings'  => 'home_cafe_weekends_opening_hours_setting'
              )
          )
      );

      //Address section
      $wp_customize->add_section('home_address_section', array(
           'title'             => __('Address' , 'zealandiaTheme'),
           'priority'          => 53,
           'panel'             => 'Home_Page_Panel'
       ));
       //address
       $wp_customize->add_setting('home_address_setting', array(
           'default'           => '',
           'transport'         => 'refresh'
       ));

       $wp_customize->add_control(
           new WP_Customize_Control(
               $wp_customize,
               'home_address_control',
               array(
                   'label'     => __('Address' , 'zealandiaTheme'),
                   'section'   => 'home_address_section',
                   'settings'  => 'home_address_setting'
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

      //Tickets page button text
      $wp_customize->add_section('tours_page_button_section', array(
         'title' => __('Button' , 'zealandiaTheme'),
         'priority' => 21,
         'panel' => 'Tours_Page_Panel'
     ));


      $wp_customize->add_setting('tours_page_button_text_setting', array(
         'default' => '',
         'transport' => 'refresh'
     ));
      $wp_customize->add_control(
         new WP_Customize_Control(
             $wp_customize,
             'tours_page_button_text_control',
             array(
                 'label' => __('Button Text', 'zealandiaTheme'),
                 'section' => 'tours_page_button_section',
                 'settings' => 'tours_page_button_text_setting'
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
          'title'             => __('Booking Feature Image', 'zealandiaTheme'),
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

     //Tickets page button text
     $wp_customize->add_section('single_tour_page_button_section', array(
        'title' => __('Button' , 'zealandiaTheme'),
        'priority' => 21,
        'panel' => 'Single_Tour_Page_Panel'
    ));


     $wp_customize->add_setting('single_tour_page_button_text_setting', array(
        'default' => '',
        'transport' => 'refresh'
    ));
     $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'single_tour_page_button_text_control',
            array(
                'label' => __('Button Text', 'zealandiaTheme'),
                'section' => 'single_tour_page_button_section',
                'settings' => 'single_tour_page_button_text_setting'
            )
        )
    );
     //---------------
     //TICKETS PAGE PANEL
     //---------------
     $wp_customize->add_panel('Tickets_Page_Panel', array(
         'title'             => __('Tickets Page' , 'zealandiaTheme'),
         'priority'          => 30,
         'description'       => 'This panel will hold the tickets page sections'
     ));


     //Tickets Header Image section
     $wp_customize->add_section('tickets_header_image_section', array(
         'title'             => __('Header Image', 'zealandiaTheme'),
         'priority'          => 30,
         'panel'             => 'Tickets_Page_Panel'
     ));

     $wp_customize->add_setting('tickets_header_image_setting', array(
         'default'           => '',
         'transport'         => 'refresh'
     ));

     $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'tickets_header_image_control',
            array(
                'label'      => __( 'Upload an image', 'zealandiaTheme' ),
                'section'    => 'tickets_header_image_section',
                'settings'   => 'tickets_header_image_setting'
            )
        )
    );
     //Tickets Title Text section
     $wp_customize->add_section('tickets_body_title_section', array(
         'title'             => __('Title', 'zealandiaTheme'),
         'priority'          => 30,
         'panel'             => 'Tickets_Page_Panel'
     ));

     $wp_customize->add_setting('tickets_body_title_setting', array(
         'default'           => '',
         'transport'         => 'refresh'
     ));

     $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'tickets_body_title_control',
            array(
                'label'      => __( 'Title Text', 'zealandiaTheme' ),
                'section'    => 'tickets_body_title_section',
                'settings'   => 'tickets_body_title_setting'
            )
        )
    );
     //Tickets Subtitle Text section
     $wp_customize->add_section('tickets_body_subtitle_section', array(
         'title'             => __('Subtitle', 'zealandiaTheme'),
         'priority'          => 30,
         'panel'             => 'Tickets_Page_Panel'
     ));

     $wp_customize->add_setting('tickets_body_subtitle_setting', array(
         'default'           => '',
         'transport'         => 'refresh'
     ));

     $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'tickets_body_subtitle_control',
            array(
                'label'      => __( 'Subtitle Text', 'zealandiaTheme' ),
                'section'    => 'tickets_body_subtitle_section',
                'settings'   => 'tickets_body_subtitle_setting'
            )
        )
    );

    //Tickets page button link
    $wp_customize->add_section('tickets_page_button_section', array(
       'title' => __('Button ' , 'zealandiaTheme'),
       'priority' => 21,
       'panel' => 'Tickets_Page_Panel'
   ));


    $wp_customize->add_setting('tickets_page_button_link_setting', array(
       'default' => '',
       'transport' => 'refresh'
   ));
    $wp_customize->add_control(
       new WP_Customize_Control(
           $wp_customize,
           'tickets_page_button_link_control',
           array(
               'label' => __('Button Link', 'zealandiaTheme'),
               'section' => 'tickets_page_button_section',
               'settings' => 'tickets_page_button_link_setting'
           )
       )
   );
    //Tickets page button text
    $wp_customize->add_section('tickets_page_button_text_section', array(
       'title' => __('Button Text ' , 'zealandiaTheme'),
       'priority' => 21,
       'panel' => 'Home_Page_Panel'
   ));
    $wp_customize->add_setting('tickets_page_button_text_setting', array(
       'default' => '',
       'transport' => 'refresh'
   ));
    $wp_customize->add_control(
       new WP_Customize_Control(
           $wp_customize,
           'tickets_page_button_text_control',
           array(
               'label' => __('Button Text', 'zealandiaTheme'),
               'section' => 'tickets_page_button_section',
               'settings' => 'tickets_page_button_text_setting'
           )
       )
   );






}
add_action('customize_register' , 'custom_theme_customizer');
