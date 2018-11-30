<!-- <h3>This is coming from the footer</h3> -->
        <footer class="mt-5">
            <div class="container">
                <div class="row">
                    <nav class="navbar navbar-expand w-100" role="navigation">
                      <div class="container">
                        <?php
                            wp_nav_menu( array(
                    			'theme_location'    => 'footer_nav',
                                'menu_id' => 'footer-nav',
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
        </footer>


        <?php wp_footer(); ?>
    </body>
</html>
