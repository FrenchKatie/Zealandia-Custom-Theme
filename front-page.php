<?php get_header(); ?>

<?php $HeaderImage = get_theme_mod('home_header_image_setting'); ?>
<?php if(strlen($HeaderImage) > 0): ?>
    <div class="bg-img parent w-100" style="background-image: url(<?php echo get_theme_mod('home_header_image_setting'); ?>)">
        <div class="child w-50 auto-margins text-center image-text">
            <h1 class="header header_img_header"><?php echo get_theme_mod('home_header_image_title_setting'); ?></h1>
            <h2 class="body header_img_subheader mb-5"><?php echo get_theme_mod('home_header_image_paragraph_setting'); ?></h2>
             <a class="text-uppercase button mt-5" href="<?php echo get_theme_mod('home_page_header_image_button_link_setting'); ?>"><?php echo get_theme_mod('home_page_header_image_button_text_setting'); ?></a>
        </div>
    </div>

<?php endif; ?>
    <div class="container pb-5">
        <h3 class="w-75 auto-margins pt-5 pb-5 text-center subheader"><?php echo get_theme_mod('home_body_title_setting'); ?></h3>
        <div class="">
            <h6 class="small-header pb-1">Opening Hours:</h6>
            <ul class="list-group list-group-flush body-list">
              <li class="list-group-item d-flex justify-content-between align-items-center body pl-0 pr-0">General Admission<span class="">9:00am - 5:00am</span></li>
              <li class="list-group-item d-flex justify-content-between align-items-center body pl-0 pr-0">Rata Cafe - Weekdays<span class="">9:00am - 4.30pm</span></li>
              <li class="list-group-item d-flex justify-content-between align-items-center body pl-0 pr-0">Rata Cafe - Weekends<span class="">9:00am - 5:00pm</span></li>
            </ul>
            <h6 class="small-header mt-5 pb-1">Address:</h6>
            <p class="body">53 Waiapu Road, Karori, Wellington, New Zealand, 6012</p>
        </div>
    </div>
    <div class="bg-img" style="background-image: url(<?php echo get_theme_mod('home_map_image_setting'); ?>)"></div>

    <div class="container">
        <h3 class="subheader text-center mt-5 mb-5"><?php echo get_theme_mod('home_body_lower_section_title_setting'); ?></h3>
    </div>

<?php get_footer(); ?>
