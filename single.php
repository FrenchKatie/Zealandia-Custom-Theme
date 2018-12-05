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

                                                        //second_featured_image
               $carouselImageOne       = get_post_meta($id, 'first_carousel_image', true);
               $carouselImageTwo       = get_post_meta($id, 'second_carousel_image', true);
               $carouselImageThree       = get_post_meta($id, 'third_carousel_image', true);
               $carouselImageFour       = get_post_meta($id, 'fourth_carousel_image', true);

               // $carouselImageOne    = get_theme_mod('single_tour_carousel_image_one_setting');
               // $carouselImageTwo    = get_theme_mod('single_tour_carousel_image_two_setting');
               // $carouselImageThree    = get_theme_mod('single_tour_carousel_image_three_setting');
               // $carouselImageFour    = get_theme_mod('single_tour_carousel_image_four_setting');
            ?>

            <div class="row pt-3">
                <?php if(strlen($carouselImageOne OR $carouselImageTwo OR $carouselImageThree OR $carouselImageFour) > 0): ?>
                    <div id="carouselExampleControls" class="carousel slide col-md col-sm-12 mb-5" data-ride="carousel">
                      <div class="carousel-inner">



                        <?php if(strlen($carouselImageOne) > 0): ?>
                            <div class="carousel-item active">
                              <img class="d-block w-100" src="<?php echo wp_get_attachment_image($carouselImageOne,'full'); ?> " alt="First slide">
                            </div>
                        <?php endif; ?>


                        <?php if(strlen($carouselImageTwo) > 0): ?>
                            <div class="carousel-item">

                              <img class="d-block w-100" src="<?php echo wp_get_attachment_image($carouselImageTwo,'full'); ?>" alt="Second slide">
                            </div>
                        <?php endif; ?>


                        <?php if(strlen($carouselImageThree) > 0): ?>
                            <div class="carousel-item">
                              <img class="d-block w-100" src="<?php echo wp_get_attachment_image($carouselImageThree,'full'); ?>" alt="Third slide">
                            </div>
                        <?php endif; ?>


                        <?php if(strlen($carouselImageFour) > 0): ?>
                            <div class="carousel-item">
                              <img class="d-block w-100" src="<?php echo wp_get_attachment_image($carouselImageFour,'full'); ?>" alt="Fourth slide">
                            </div>
                        <?php endif; ?>



                      </div>
                      <a class="carousel-control-prev p-0" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next p-0" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
                <?php endif; ?>





                <ul class="list-group list-group-flush col-md col-sm-12 ml-3 mr-3 pr-0 body-list">
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

        </div>
        <div class="bg-img parent w-100 mb-5" style="background-image: url(<?php echo get_theme_mod('single_tour_header_image_setting'); ?>)"></div>
        <div class="container">
            <h3 class="text-center mb-3 subheader">Make a Booking</h3>
            <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

            <div class="mt-5">
                <form class="form-group mb-5 mt-5" action="index.html" method="post">
                    <h5 class="small-header">Select a date for your tour:</h5>
                    <select class="form-control mb-5">
                      <option>Default select</option>
                    </select>




                    <h5 class="small-header">Select a time for your tour:</h5>

                    <div class="mb-5">

                        <div class="custom-control custom-radio custom-control-inline mr-5">
                            <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                            <label class="custom-control-label" for="customRadioInline1">10:00 AM</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                            <label class="custom-control-label" for="customRadioInline2">2:00PM</label>
                        </div>
                    </div>




                    <h5 class="small-header">Select your tickets:</h5>

                        <div class="list-group list-group-flush col ml-3">
                            <div class="list-group-item row d-flex justify-content-between align-items-center body pl-0 pr-0 body-div">
                                <div class="col">
                                    <h6>Adult</h6>
                                    <p>$19.50</p>
                                </div>
                                <div class="form-group col col-4 col-md-2 col-lg-1">
                                    <input class="form-control" type="number" value="0" id="example-number-input">
                                </div>
                            </div>
                            <div class="list-group-item row d-flex justify-content-between align-items-center body pl-0 pr-0 body-div">
                                <div class="col">
                                    <h6>Children - ages 5 - 17</h6>
                                    <p>$19.50</p>
                                </div>
                                <div class="form-group col col-4 col-md-2 col-lg-1">
                                    <input class="form-control" type="number" value="0" id="example-number-input">
                                </div>
                            </div>
                            <div class="list-group-item row d-flex justify-content-between align-items-center body pl-0 pr-0 body-div">
                                <div class="col">
                                    <h6>Under 5's</h6>
                                    <p>$19.50</p>
                                </div>
                                <div class="form-group col col-4 col-md-2 col-lg-1">
                                    <input class="form-control" type="number" value="0" id="example-number-input">
                                </div>
                            </div>
                            <div class="list-group-item row d-flex justify-content-between align-items-center body pl-0 pr-0 body-div">
                                <div class="col">
                                    <h6>Family - up to 2 adults and 3 children</h6>
                                    <p>$19.50</p>
                                </div>
                                <div class="form-group col col-4 col-md-2 col-lg-1">
                                    <input class="form-control" type="number" value="0" id="example-number-input">
                                </div>
                            </div>
                            <div class="list-group-item row d-flex justify-content-between align-items-center body pl-0 pr-0 body-div">
                                <div class="col">
                                    <h6>Concession</h6>
                                    <p>$19.50</p>
                                </div>
                                <div class="form-group col col-4 col-md-2 col-lg-1">
                                    <input class="form-control" type="number" value="0" id="example-number-input">
                                </div>
                            </div>
                            <div class="list-group-item row d-flex justify-content-between align-items-center body pl-0 pr-0 body-div">
                                <div class="col">
                                    <h6>Zealandia Members</h6>
                                    <p>$19.50</p>
                                </div>
                                <div class="form-group col col-4 col-md-2 col-lg-1">
                                    <input class="form-control" type="number" value="0" id="example-number-input">
                                </div>
                            </div>
                            <div class="mt-5 mb-5 text-center">
                                <a class="text-uppercase button mb-5 w-25" href="#"><?php echo get_theme_mod('single_tour_page_button_text_setting'); ?></a>
                            </div>


                        </div>

                </form>
            </div>

        <?php endwhile; ?>
    <?php endif; ?>
</div>



<?php get_footer(); ?>
