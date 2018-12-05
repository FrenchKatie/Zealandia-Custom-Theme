<?php
    /* Template Name: Tickets Page Template */
 ?>

<?php get_header(); ?>


<?php $HeaderImage = get_theme_mod('tickets_header_image_setting'); ?>
<?php if(strlen($HeaderImage) > 0): ?>
    <div class="bg-img w-100" style="background-image: url(<?php echo get_theme_mod('tickets_header_image_setting'); ?>)">

    </div>
<?php endif; ?>

<div class="container">
    <h3 class="w-75 auto-margins pt-5 pb-5 text-center subheader"><?php echo get_theme_mod('tickets_body_title_setting'); ?></h3>
    <p class="text-center mb-5"><?php echo get_theme_mod('tickets_body_subtitle_setting'); ?></p>


    <h5 class="small-header mt-5">Select your tickets:</h5>

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
                <!-- <a class="text-uppercase button mb-5 w-25" href="#">Add tickets to cart</a> -->
                <a class="text-uppercase button mt-5" href="<?php echo get_theme_mod('tickets_page_button_link_setting'); ?>"><?php echo get_theme_mod('tickets_page_button_text_setting'); ?></a>

            </div>


        </div>
</div>







<?php get_footer(); ?>
