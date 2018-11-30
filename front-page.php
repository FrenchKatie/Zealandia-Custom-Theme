<?php get_header(); ?>

<?php $HeaderImage = get_theme_mod('home_header_image_setting'); ?>
<?php if(strlen($HeaderImage) > 0): ?>
    <div class="header_img">
        <img src="<?php echo get_theme_mod('home_header_image_setting'); ?>" alt="">
    </div>
    <div class="w-100 text-center image-text">
        <h1 class="header"><?php echo get_theme_mod('home_header_image_title_setting'); ?></h1>
        <h2 class="secondary-header"><?php echo get_theme_mod('home_header_image_paragraph_setting'); ?></h2>
    </div>
<?php endif; ?>
    <div class="container">
        <h3><?php echo get_theme_mod('home_body_title_setting'); ?></h3>
        <div class="">
            <h6 class="small-header">Opening Hours</h6>
            <ul class="list-group list-group-flush">
              <li class="list-group-item d-flex justify-content-between align-items-center body">General Admission<span class="">9:00am - 5:00am</span></li>
              <li class="list-group-item d-flex justify-content-between align-items-center body">Rata Cafe - Weekdays<span class="">9:00am - 4.30pm</span></li>
              <li class="list-group-item d-flex justify-content-between align-items-center body">Rata Cafe - Weekends<span class="">9:00am - 5:00pm</span></li>
            </ul>
            <h6 class="small-header">Address</h6>
            <p class="body">53 Waiapu Road, Karori, Wellington, New Zealand, 6012</p>
        </div>
    </div>
    <div class="map">
        <img src="<?php echo get_theme_mod('home_map_image_setting'); ?>" class="w-100">
    </div>
    <div class="container">
        <h3><?php echo get_theme_mod('home_body_lower_section_title_setting'); ?></h3>
    </div>

<?php get_footer(); ?>
