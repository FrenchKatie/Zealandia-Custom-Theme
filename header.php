<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
        <link href="https://fonts.googleapis.com/css?family=Catamaran:400,600|Merriweather+Sans:300,400" rel="stylesheet">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <!-- <h3>This is coming from header.php</h3> -->
        <nav class="navbar navbar-expand-md navbar-light header-bg" role="navigation">
          <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


            <?php
               $custom_logo = get_theme_mod('custom_logo');
               $logo_url = wp_get_attachment_image_url($custom_logo, 'medium');
             ?>
             <?php if($custom_logo): ?>
                 <a class="navbar-brand" href="<?= bloginfo('home');?>">
                  <img src="<?= $logo_url  ?>" height="50" alt="">
                </a>
             <?php else: ?>
                 <a class="navbar-brand" href="<?= bloginfo('home');?>"><?= bloginfo('name');  ?></a>
             <?php endif; ?>

                <?php
                wp_nav_menu( array(
                    'theme_location'    => 'header_nav',
                    'menu_id'           => 'header-nav',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse',
                    'container_id'      => 'bs-example-navbar-collapse-1',
                    'menu_class'        => 'nav navbar-nav justify-content-end w-100 header-nav small-header text-uppercase',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker(),
                ) );
                ?>
            </div>
        </nav>
