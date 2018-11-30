<?php get_header(); ?>

<?php $HeaderImage = get_theme_mod('home_header_image_setting'); ?>
<?php if(strlen($HeaderImage) > 0): ?>
    <div class="header_img">
        <img src="<?php echo get_theme_mod('home_header_image_setting'); ?>" alt="">
    </div>
    <div class="w-100 text-center image-text">
        <h2 class="header"><?php echo get_theme_mod('home_header_image_title_setting'); ?></h2>
        <h3 class="secondary_header"><?php echo get_theme_mod('home_header_image_paragraph_setting'); ?></h3>
    </div>
<?php endif; ?>

<?php get_footer(); ?>
