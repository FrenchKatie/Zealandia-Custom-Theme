        <footer>
            <nav class="navbar navbar-expand w-100 p-0" role="navigation">
                    <?php
                        wp_nav_menu( array(
                			'theme_location'    => 'footer_nav',
                            'menu_id'           => 'footer-nav',
                            'depth'             => 2,
                            'container'         => 'div',
                            'container_class'   => 'collapse navbar-collapse',
                            'menu_class'        => 'nav footer-nav justify-content-center w-100 small-header text-uppercase pt-5 pb-5 footer-nav ',
                            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                            'walker'            => new WP_Bootstrap_Navwalker(),
                		) );
                     ?>
                </nav>
        </footer>
        <?php wp_footer(); ?>
    </body>
</html>
