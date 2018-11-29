<?php get_header(); ?>

<?php if(is_active_sidebar('front_page_sidebar')): ?>
                    <div class="col-4">
                        <div id"frontSidebar"=>
                            <?php dynamic_sidebar('front_page_sidebar'); ?>
                        </div>
                    </div>
 <?php endif; ?>


<?php get_footer(); ?>
