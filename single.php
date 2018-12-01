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



        <?php endwhile; ?>
    <?php endif; ?>
</div>



<?php get_footer(); ?>
