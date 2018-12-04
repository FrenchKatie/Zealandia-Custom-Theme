<?php
// GETS JS + CSS FILES
function add_custom_styles(){
   wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
   wp_enqueue_style('theme-style', get_template_directory_uri() . '/assets/css/theme-styles.css');

   wp_enqueue_script('jquery');
   wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '4.1.3', true);
   wp_enqueue_script('theme-scripts', get_template_directory_uri() . '/assets/js/theme-scripts.js', array(), '0.0.1', true);

}
add_action('wp_enqueue_scripts', 'add_custom_styles');

//GET CUSTOM CUSTOMIZER FILES
require get_parent_theme_file_path('/addons/custom_customizer.php');
require get_parent_theme_file_path('/addons/custom_fields.php');


//MENUS
function add_custom_menus(){
   add_theme_support('menus');
   register_nav_menu('header_nav', 'This is the header navigation that appears at the top of the page');
   register_nav_menu('footer_nav', 'This is the footer navigation that appears at the bottom of the page');
}
add_action('init', 'add_custom_menus');
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

//LOGOS
function add_custom_logo(){
    add_theme_support('custom-logo', array(
        'height'        => 100,
        'width'         => 300,
        'flex-width'    => true,
        'flex-height'   => true
    ));
}
add_action('init', 'add_custom_logo');

//POST TYPES
add_theme_support( 'post-formats', array( 'aside', 'gallery', 'image', 'video' ) );

function add_tours_post_type(){
   add_theme_support( 'post-thumbnails' );

   $labels = array(
        'name'          => _x('Tours', 'post type name', 'zealandiaTheme'),
        'singular_name' => _x('Tour', 'post types singluar name', 'zealandiaTheme'),
        'add_new_item'  => _x('Add a new tour', 'Adding a new tour', 'zealandiaTheme')
    );
    $args = array(
      'labels'                => $labels,
      'description'           => 'a post type for the tours',
      'public'                => true,
      'hierarchical'          => true,
      'exclude_from_search'   => false,
      'show_ui'               => true,
      'show_in_menu'          => true,
      'show_in_nav_menus'     => false,
      'menu_position'         => 20,
      'menu_icon'             => 'dashicons-groups',
      'supports'              => array(
           'title',
           'thumbnail',
           'editor',
           'excerpt'
      ),
      'query_var'             => true
  );
  register_post_type('tours', $args);
}
add_action('init', 'add_tours_post_type');

//SIDEBAR
function register_my_sidebars(){
    register_sidebar(array(
        'id' => 'front_page_sidebar',
        'name' => 'Front Page Sidebar',
        'description' => 'The sidebar which appears on the front page',
        'before_widget' => '<div id="%1$s" class="widget customWidget %2$s">',
        "after_widget" => '</div>',
        'before_title' => '<h3 class="widgetTitle">',
        'after_title' => '</h3>'
    ));
}
add_action('widgets_init', 'register_my_sidebars');








//init the meta box

function custom_postimage_setup(){
    add_action( 'add_meta_boxes', 'custom_postimage_meta_box' );
    add_action( 'save_post', 'custom_postimage_meta_box_save' );
}
add_action( 'after_setup_theme', 'custom_postimage_setup' );


function custom_postimage_meta_box(){

    //on which post types should the box appear?
    $post_types = array('tours');
    foreach($post_types as $pt){
        add_meta_box('custom_postimage_meta_box',__( 'Carousel Images', 'yourdomain'),'custom_postimage_meta_box_func',$pt,'side','low');
    }
}

function custom_postimage_meta_box_func($post){

    //an array with all the images (ba meta key). The same array has to be in custom_postimage_meta_box_save($post_id) as well.
    $meta_keys = array('first_carousel_image','second_carousel_image', 'third_carousel_image', 'fourth_carousel_image');

    foreach($meta_keys as $meta_key){
        $image_meta_val=get_post_meta( $post->ID, $meta_key, true);
        ?>
        <div class="custom_postimage_wrapper" id="<?php echo $meta_key; ?>_wrapper" style="margin-bottom:20px;">
            <img src="<?php echo ($image_meta_val!=''?wp_get_attachment_image_src( $image_meta_val)[0]:''); ?>" style="width:100%;display: <?php echo ($image_meta_val!=''?'block':'none'); ?>" alt="">
            <a class="addimage button" onclick="custom_postimage_add_image('<?php echo $meta_key; ?>');"><?php _e('add image','yourdomain'); ?></a><br>
            <a class="removeimage" style="color:#a00;cursor:pointer;display: <?php echo ($image_meta_val!=''?'block':'none'); ?>" onclick="custom_postimage_remove_image('<?php echo $meta_key; ?>');"><?php _e('remove image','yourdomain'); ?></a>
            <input type="hidden" name="<?php echo $meta_key; ?>" id="<?php echo $meta_key; ?>" value="<?php echo $image_meta_val; ?>" />
        </div>
    <?php } ?>
    <script>
    function custom_postimage_add_image(key){

        var $wrapper = jQuery('#'+key+'_wrapper');

        custom_postimage_uploader = wp.media.frames.file_frame = wp.media({
            title: '<?php _e('select image','yourdomain'); ?>',
            button: {
                text: '<?php _e('select image','yourdomain'); ?>'
            },
            multiple: false
        });
        custom_postimage_uploader.on('select', function() {

            var attachment = custom_postimage_uploader.state().get('selection').first().toJSON();
            var img_url = attachment['url'];
            var img_id = attachment['id'];
            $wrapper.find('input#'+key).val(img_id);
            $wrapper.find('img').attr('src',img_url);
            $wrapper.find('img').show();
            $wrapper.find('a.removeimage').show();
        });
        custom_postimage_uploader.on('open', function(){
            var selection = custom_postimage_uploader.state().get('selection');
            var selected = $wrapper.find('input#'+key).val();
            if(selected){
                selection.add(wp.media.attachment(selected));
            }
        });
        custom_postimage_uploader.open();
        return false;
    }

    function custom_postimage_remove_image(key){
        var $wrapper = jQuery('#'+key+'_wrapper');
        $wrapper.find('input#'+key).val('');
        $wrapper.find('img').hide();
        $wrapper.find('a.removeimage').hide();
        return false;
    }
    </script>
    <?php
    wp_nonce_field( 'custom_postimage_meta_box', 'custom_postimage_meta_box_nonce' );
}

function custom_postimage_meta_box_save($post_id){

    if ( ! current_user_can( 'edit_posts', $post_id ) ){ return 'not permitted'; }

    if (isset( $_POST['custom_postimage_meta_box_nonce'] ) && wp_verify_nonce($_POST['custom_postimage_meta_box_nonce'],'custom_postimage_meta_box' )){

        //same array as in custom_postimage_meta_box_func($post)
        $meta_keys = array('first_carousel_image','second_carousel_image', 'third_carousel_image', 'fourth_carousel_image' );
        foreach($meta_keys as $meta_key){
            if(isset($_POST[$meta_key]) && intval($_POST[$meta_key])!=''){
                update_post_meta( $post_id, $meta_key, intval($_POST[$meta_key]));
            }else{
                update_post_meta( $post_id, $meta_key, '');
            }
        }
    }
}
