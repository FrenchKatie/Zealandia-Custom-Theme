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
               $id = get_the_id();
               $tourduration = get_post_meta($id, 'duration', true);
               $tourdepartureTime = get_post_meta($id, 'departureTime', true);
               $tourAvailability = get_post_meta($id, 'availability', true);
               $tourMaxCapacity = get_post_meta($id, 'maxCapacity', true);
               $tourMaxAge = get_post_meta($id, 'maxAge', true);
            ?>


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

                </ul>
            </div>





        <?php endwhile; ?>
    <?php endif; ?>
</div>



<?php get_footer(); ?>
