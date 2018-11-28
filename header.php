<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Zealandia</title>
      <?php wp_head(); ?>
   </head>
   <body>

      <nav class=" bg-light">
          <div class="container">
             <div class="row">
                  <nav class="navbar navbar-expand w-100" role="navigation">
                    <div class="container">
                      <?php
                          wp_nav_menu( array(
                              'theme_location'    => 'header_nav',
                              'menu_id'           => 'header-nav',
                              'depth'             => 2,
                              'container'         => 'div',
                              'container_class'   => 'collapse navbar-collapse',
                              'menu_class'        => 'nav justify-content-end w-100',
                              'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                              'walker'            => new WP_Bootstrap_Navwalker(),
                      ) );
                       ?>
                      </div>
                  </div>
             </div>
          </div>
      </nav>
