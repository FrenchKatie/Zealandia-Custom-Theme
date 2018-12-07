<?php
    /* Template Name: Tours Page Template */
 ?>

<?php get_header(); ?>


<?php $HeaderImage = get_theme_mod('tours_header_image_setting'); ?>
<?php if(strlen($HeaderImage) > 0): ?>
    <div class="bg-img w-100" style="background-image: url(<?php echo get_theme_mod('tours_header_image_setting'); ?>)">
    </div>
<?php endif; ?>

<div class="container">
    <h3 class="w-75 auto-margins pt-5 pb-5 text-center subheader"><?php echo get_theme_mod('tours_body_title_setting'); ?></h3>
</div>

<?php if(have_posts()): ?>
    <?php while(have_posts()): the_post();?>
        <div class="container">

            <?php
                // $allTours = new WP_Query('post_type=tours&order=ASC&orderby=title');

                $args = array(
                    'post_type' => 'tours',
                    'order' => 'ASC',
                    'orderby' => 'title'
                );
                $allTours = new WP_Query($args);
             ?>
             <?php if( $allTours->have_posts() ): ?>
                 <?php while($allTours->have_posts()): $allTours->the_post();?>
                     <div class="text-center mt-5">
                       <?php if( has_post_thumbnail() ): ?>
                           <?php  $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                           echo '<div class="bg-img" style="background: url('. $url.')"></div>'; ?>
                       <?php endif; ?>
                       <div class="mt-5 mb-5">
                         <h5 class="subheader"><?php the_title(); ?></h5>
                         <p class="body"><?php the_excerpt(); ?></p>
                         <a class="text-uppercase button" href="<?= esc_url(get_permalink()); ?>"><?php echo get_theme_mod('tours_page_button_text_setting'); ?></a>

                       </div>
                     </div>
                 <?php endwhile; ?>
             <?php endif; ?>
        </div>
    <?php endwhile; ?>
<?php endif; ?>





<?php get_footer(); ?>
