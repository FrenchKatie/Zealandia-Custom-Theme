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
            <div class="text-center mb-5 mt-5">
                <h3 class="subheader mb-3"><?php the_title(); ?></h3>
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

            <div class="row pt-3">
                <?php if(strlen($carouselImageOne OR $carouselImageTwo OR $carouselImageThree OR $carouselImageFour) > 0): ?>
                    <div id="carouselExampleControls" class="carousel slide col" data-ride="carousel">
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
                        <div class="carousel-item">
                          <img class="d-block w-100" src="<?php echo get_theme_mod('single_tour_carousel_image_four_setting'); ?>" alt="Second slide">
                        </div>


                      </div>
                      <a class="carousel-control-prev pl-0" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
                <?php endif; ?>





                <ul class="list-group list-group-flush col ml-3">
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

            <div class="mt-5">
                <h3 class="text-center mb-3">Make a Booking</h3>
                <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <div class="">
                    <img src="" alt="">
                </div>
                <h5 class="small-header">Select a date for your tour:</h5>
                <select class="form-control mb-4">
                  <option>Default select</option>
                </select>
                <h5 class="small-header">Select a time for your tour:</h5>
                <div class="mb-4">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                      <label class="form-check-label" for="inlineCheckbox1">10:00AM</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                      <label class="form-check-label" for="inlineCheckbox2">2:00PM</label>
                    </div>
                </div>
                <h5 class="small-header">Select your tickets:</h5>
                <div class="">
                    <div class="list-group list-group-flush col ml-3">
                        <div class="list-group-item d-flex justify-content-between align-items-center body pl-0 pr-0">
                            <div class="">
                                <h6>Adult</h6>
                                <p>$19.50</p>
                            </div>
                            <div class="">
                                <input type="number" name="" value="">
                            </div>
                        </div>
                        <div class="list-group-item d-flex justify-content-between align-items-center body pl-0 pr-0">
                            <div class="">
                                <h6>Children - ages 5 - 17</h6>
                                <p>$19.50</p>
                            </div>
                            <div class="">
                                <input type="number" name="" value="">
                            </div>
                        </div>
                        <div class="list-group-item d-flex justify-content-between align-items-center body pl-0 pr-0">
                            <div class="">
                                <h6>Under 5's</h6>
                                <p>$19.50</p>
                            </div>
                            <div class="">
                                <input type="number" name="" value="">
                            </div>
                        </div>
                        <div class="list-group-item d-flex justify-content-between align-items-center body pl-0 pr-0">
                            <div class="">
                                <h6>Family - up to 2 adults and 3 children</h6>
                                <p>$19.50</p>
                            </div>
                            <div class="">
                                <input type="number" name="" value="">
                            </div>
                        </div>
                        <div class="list-group-item d-flex justify-content-between align-items-center body pl-0 pr-0">
                            <div class="">
                                <h6>Concession</h6>
                                <p>$19.50</p>
                            </div>
                            <div class="">
                                <input type="number" name="" value="">
                            </div>
                        </div>
                        <div class="list-group-item d-flex justify-content-between align-items-center body pl-0 pr-0">
                            <div class="">
                                <h6>Zealandia Members</h6>
                                <p>$19.50</p>
                            </div>
                            <div class="">
                                <input type="number" name="" value="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        <?php endwhile; ?>
    <?php endif; ?>
</div>



<?php get_footer(); ?>
