<?php
    /* Template Name: Tours Page Template */



 ?>

<?php get_header(); ?>


    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post();?>
            <?php get_template_part('content', get_post_format()); ?>

            <?php if( has_post_thumbnail() ): ?>
                <?php  $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                echo '<div class="bg-img" style="background: url('. $url.')"></div>'; ?>
            <?php endif; ?>
            <div class="container">
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

            <div class="row pt-3 mb-5">
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

                    <?php
                        $obj_id = get_queried_object_id();
                        $current_url = get_permalink( $obj_id );
                     ?>


                    <div class="container">
                        <h5 class="small-header mt-5">Select your tickets:</h5>
                        <div class="list-group list-group-flush col ml-3 mb-5">



                    <?php
                    $args = array(
                        'posts_per_page' => -1,
                        'tax_query' => array(
                            'relation' => 'AND',
                            array(
                                'taxonomy' => 'product_cat',
                                'field' => 'slug',
                                'terms' => 'Zealandia by Day'
                            )
                        ),
                        'post_type' => 'product',
                        'orderby' => 'title',
                    );
                    $the_query = new WP_Query( $args );
                    if($the_query->have_posts()){
                        while($the_query->have_posts()){
                            $the_query->the_post();
                            $product = wc_get_product( get_the_id() );
                    ?>

                    <div class="list-group-item row d-flex justify-content-between align-items-center body pl-0 pr-0 body-div">
                        <div class="col">
                            <h6><?php echo(get_the_title()); ?></h6>
                            <p>$<?php echo($product->get_price()); ?></p>
                        </div>
                        <form class="form-group col justify-content-end d-flex" action="<?php echo($current_url.'?add-to-cart=' . get_the_id()); ?>" method="post" enctype="multipart/form-data">
                            <div class="quantity form-group col-9 col-sm-7 col-md-4 col-lg-3 col-xl-2">
                                <input class="form-control input-text qty text" name="quantity" type="number" value="0" id="example-number-input" >
                            </div>
                            <button class="text-uppercase button alt " href="" type="submit">Add to Cart</button>
                        </form>
                    </div>
                </div>
                    <?php
                }
            }

            ?>
        </div>
        <?php endwhile; ?>
    <?php endif; ?>
</div>



<?php get_footer(); ?>
