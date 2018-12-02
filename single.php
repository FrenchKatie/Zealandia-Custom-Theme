<?php
    /* Template Name: Tours Page Template */
 ?>

<?php get_header(); ?>

<div class="container">
    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post();?>
            <?php get_template_part('content', get_post_format()); ?>
            <?php if( has_post_thumbnail() ): ?>
                <?php the_post_thumbnail('thumbnail', ['class'=>'', 'alt'=>'']); ?>
            <?php endif; ?>
            <div class="text-center">
                <h3 class="subheader"><?php the_title(); ?></h3>
                <h6 class="body"><?php the_content(); ?></h6>
            </div>


            <?php
               $id                  = get_the_id();
               $tourduration        = get_post_meta($id, 'duration', true);
               $tourdepartureTime   = get_post_meta($id, 'departureTime', true);
               $tourAvailability    = get_post_meta($id, 'availability', true);
               $tourMaxCapacity     = get_post_meta($id, 'maxCapacity', true);
               $tourMaxAge          = get_post_meta($id, 'maxAge', true);
               $tourMinAge          = get_post_meta($id, 'minAge', true);

               $carouselImageOne    = get_theme_mod('single_tour_carousel_image_one_setting');
               $carouselImageTwo    = get_theme_mod('single_tour_carousel_image_two_setting');
               $carouselImageThree    = get_theme_mod('single_tour_carousel_image_three_setting');
               $carouselImageFour    = get_theme_mod('single_tour_carousel_image_four_setting');
            ?>


            <?php if(strlen($carouselImageOne OR $carouselImageTwo OR $carouselImageThree OR $carouselImageFour) > 0): ?>
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">

                        <div class="carousel-item active">
                          <img class="d-block w-100" src="<?php echo get_theme_mod('single_tour_carousel_image_one_setting'); ?>" alt="First slide">
                        </div>
                    
                    <div class="carousel-item">
                      <img class="d-block w-100" src="<?php echo get_theme_mod('single_tour_carousel_image_two_setting'); ?>" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="<?php echo get_theme_mod('single_tour_carousel_image_three_setting'); ?>" alt="Second slide">
                    </div>


                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
            <?php endif; ?>




            <div class="container">
                <ul class="list-group list-group-flush">
                    <?php if($tourduration): ?>
                        <li class="list-group-item d-flex justify-content-between align-items-center body pl-0 pr-0">Duration<span class=""><?= $tourduration; ?> Hours</span></li>
                    <?php endif; ?>
                    <?php if($tourdepartureTime): ?>
                        <li class="list-group-item d-flex justify-content-between align-items-center body pl-0 pr-0">Departs<span class=""><?= $tourdepartureTime; ?></span></li>
                    <?php endif; ?>
                    <?php if($tourAvailability): ?>
                        <li class="list-group-item d-flex justify-content-between align-items-center body pl-0 pr-0">Tours Availiable<span class=""><?= $tourAvailability; ?></span></li>
                    <?php endif; ?>
                    <?php if($tourMaxCapacity): ?>
                        <li class="list-group-item d-flex justify-content-between align-items-center body pl-0 pr-0">Max Capacity<span class=""><?= $tourMaxCapacity; ?> People</span></li>
                    <?php endif; ?>
                    <?php if($tourMaxAge): ?>
                        <li class="list-group-item d-flex justify-content-between align-items-center body pl-0 pr-0">Max Age<span class=""><?= $tourMaxAge; ?> Years</span></li>
                    <?php endif; ?>
                    <?php if($tourMinAge): ?>
                        <li class="list-group-item d-flex justify-content-between align-items-center body pl-0 pr-0">Min Age<span class=""><?= $tourMinAge; ?> Years</span></li>
                    <?php endif; ?>

                </ul>
            </div>





        <?php endwhile; ?>
    <?php endif; ?>
</div>



<?php get_footer(); ?>
