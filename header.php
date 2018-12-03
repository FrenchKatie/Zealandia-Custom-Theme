<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Zealandia</title>
      <?php wp_head(); ?>
      <link href="https://fonts.googleapis.com/css?family=Catamaran:400,600|Merriweather+Sans:300,400" rel="stylesheet">

   </head>
   <body>

      <nav>
          <div class="container">
             <div class="row">
               <nav class="navbar navbar-expand w-100 p-0" role="navigation">
                  <div class="container test">
                     <?php
                        $custom_logo = get_theme_mod('custom_logo');
                        $logo_url = wp_get_attachment_image_url($custom_logo, 'medium');
                      ?>
                      <?php if($custom_logo): ?>
                          <a class="navbar-brand" href="#">
                           <img src="<?= $logo_url  ?>" height="50" alt="">
                         </a>
                      <?php else: ?>
                          <a class="navbar-brand" href="#"><?= bloginfo('name');  ?></a>
                      <?php endif; ?>

                      <?php
                          wp_nav_menu( array(
                              'theme_location'    => 'header_nav',
                              'menu_id'           => 'header-nav',
                              'depth'             => 2,
                              'container'         => 'div',
                              'container_class'   => 'collapse navbar-collapse',
                              'menu_class'        => 'nav justify-content-end w-100 header-nav small-header text-uppercase',
                              'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                              'walker'            => new WP_Bootstrap_Navwalker(),
                      ) );
                       ?>
                      </div>
                  </div>
             </div>
          </div>
      </nav>
