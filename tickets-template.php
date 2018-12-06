<?php
    /* Template Name: Tickets Page Template */
 ?>

<?php get_header();

$obj_id = get_queried_object_id();
$current_url = get_permalink( $obj_id );


var_dump($current_url);
var_dump($current_url.'?add-to-cart=100');
?>


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



    <?php
    $args = array(
        'posts_per_page' => -1,
        'tax_query' => array(
            'relation' => 'AND',
            array(
                'taxonomy' => 'product_cat',
                'field' => 'slug',
                'terms' => 'tickets'
            )
        ),
        'post_type' => 'product',
        'orderby' => 'title',
    );
    $the_query = new WP_Query( $args );
    // var_dump($the_query);
    if($the_query->have_posts()){
        while($the_query->have_posts()){
            $the_query->the_post();
            $product = wc_get_product( get_the_id() );
            // var_dump(get_the_title());
            // var_dump(get_the_id());
            // var_dump($product->get_price());

            ?>
                <div class="col">
                    <h6><?php echo(get_the_title()); ?></h6>
                    <p>$<?php echo($product->get_price()); ?></p>
                </div>
                <div class="form-group col col-4 col-md-2 col-lg-1">
                    <input class="form-control" type="number" value="0" id="example-number-input">
                </div>
            <?php
        }
    }





    ?>

    </div>
</div>









<?php get_footer(); ?>
