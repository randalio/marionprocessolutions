<?php
//wp_set_password( 'password', 1 );

if ( ! function_exists( 'ggc_setup' ) ) :
  /**
   * Sets up theme defaults and registers support for various WordPress features.
   *
   * Note that this function is hooked into the after_setup_theme hook, which
   * runs before the init hook. The init hook is too late for some features, such
   * as indicating support for post thumbnails.
   */
  function ggc_setup() {

    // Set Theme Image Sizes
    add_theme_support( 'post-thumbnails' );
    add_image_size( 'grid-one-item', 1200 );
    add_image_size( 'grid-two-items', 700, 275, true );
    add_image_size( 'grid-three-items', 480, 320, true );
    add_image_size( 'grid-four-items', 360, 240, true );
    add_image_size( 'resource-image', 250, 334, true );
    add_image_size( 'ex-large', 1600, 1600 );
    add_image_size( 'video-cover', 640, 320, true );
    add_image_size( 'cover-small', 480, 270, true );
    add_image_size( 'hero-tile-large', 1280, 1280, true );
    add_image_size( 'hero-tile-small', 500, 500, true );
    add_image_size( 'product-grid', 443, 272, true );
    add_image_size( 'product-image', 977, 600, true );



    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     * If you're building a theme based on Twenty Nineteen, use a find and replace
     * to change 'twentynineteen' to the name of your theme in all the template files.
     */
    //load_theme_textdomain( 'twentynineteen', get_template_directory() . '/languages' );

    // Add default posts and comments RSS feed links to head.
    // add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     * By adding theme support, we declare that this theme does not use a
     * hard-coded <title> tag in the document head, and expect WordPress to
     * provide it for us.
     */
    add_theme_support( 'title-tag' );

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support(
      'html5',
      array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
      )
    );

    add_theme_support( 'menus' );
    // Add theme support for selective refresh for widgets.
    add_theme_support( 'customize-selective-refresh-widgets' );
    // Add support for Block Styles.
    add_theme_support( 'wp-block-styles' );
    // Add support for full and wide align images.
    add_theme_support( 'align-wide' );
    // Add support for editor styles.
    add_theme_support( 'editor-styles' );
    // Enqueue editor styles.
    add_editor_style( 'style-editor.css' );
    // Add support for responsive embedded content.
    add_theme_support( 'responsive-embeds' );
  }
endif;
add_action( 'after_setup_theme', 'ggc_setup' );



// Load CSS
function ggc_css() {
  wp_enqueue_style('ggc_bootstrap_css', '//cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css');
  //wp_enqueue_style('ggc_bootstrap_css', '//cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css');
  wp_enqueue_style('ggc_fontawesome', '//use.fontawesome.com/releases/v5.15.3/css/all.css');
  wp_enqueue_style('ggc_animate_css', get_template_directory_uri() . '/css/animate.min.css');
  wp_enqueue_style('plyr', '//cdn.plyr.io/3.6.8/plyr.css');
  wp_enqueue_style('owl_carousel_default', get_template_directory_uri() . '/css/owl.theme.default.css');
  wp_enqueue_style('owl_carousel', get_template_directory_uri() . '/css/owl.carousel.css');
  wp_enqueue_style('ggc_style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'ggc_css');

function ggc_add_google_fonts() {
  wp_enqueue_style('ggc_google_fonts_montserrat', '//fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap', false);
}
add_action( 'wp_enqueue_scripts', 'ggc_add_google_fonts' );


// Load JavaScript Front End
function ggc_javascript() {
  wp_enqueue_script('ggc_bootstrap_js', '//cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js', array('jquery'), '4.6.1', true);
  //wp_enqueue_script('ggc_bootstrap_js', '//cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js', array('jquery'), '5.1.3', true);
  if (is_singular() && comments_open()) {wp_enqueue_script('comment-reply');}
  wp_enqueue_script('hoverintent', get_template_directory_uri() . '/js/jquery.hoverIntent.min.js', array('jquery'), '1.0', true);
  // wp_enqueue_script('plyr', '//cdn.plyr.io/3.6.8/plyr.js', array('jquery'), '1.0', true);
  wp_enqueue_script('isotope', '//unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js', array('jquery'), '1.0', true);
  wp_enqueue_script('owl_carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array('jquery'), '1.0', true);
  wp_enqueue_script('ggc_script', get_template_directory_uri() . '/js/ggcscript.js', array('jquery'), '1.0', true);
  wp_enqueue_script('particles_js', '//cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js');
  wp_enqueue_script('smoothState', get_template_directory_uri() . '/js/jquery.smoothState.js', array('jquery'), '1.0', true);
  //wp_enqueue_script('tinysort', '//cdnjs.cloudflare.com/ajax/libs/tinysort/3.2.5/tinysort.min.js', array('jquery'), '3.2.5', true);
}
add_action('wp_enqueue_scripts', 'ggc_javascript');

// Load JavaScript Admin
function add_styles_to_admin(){
    wp_enqueue_style('ggc_fontawesome', 'https://use.fontawesome.com/releases/v5.15.3/css/all.css');
    wp_enqueue_style('ggc_admin', get_template_directory_uri() . '/css/admin.css');
}
add_action( 'admin_enqueue_scripts', 'add_styles_to_admin' );

//CHANGE "POST" to "BLOG"
function ggc_change_post_label() {
  global $menu;
  global $submenu;
  $menu[5][0] = 'Blog';
  $submenu['edit.php'][5][0] = 'Blog';
  $submenu['edit.php'][10][0] = 'Add Blog';
  $submenu['edit.php'][16][0] = 'Tags';
}
function ggc_change_post_object() {
  global $wp_post_types;
  $labels = &$wp_post_types['post']->labels;
  $labels->name = 'Blog';
  $labels->singular_name = 'Blog';
  $labels->add_new = 'Add Blog';
  $labels->add_new_item = 'Add Blog';
  $labels->edit_item = 'Edit Blog';
  $labels->new_item = 'Blog';
  $labels->view_item = 'View Blog';
  $labels->search_items = 'Search Blog';
  $labels->not_found = 'No Blogs found';
  $labels->not_found_in_trash = 'No Blogs found in Trash';
  $labels->all_items = 'All Blog';
  $labels->menu_name = 'Blog';
  $labels->name_admin_bar = 'Blog';
}
add_action( 'admin_menu', 'ggc_change_post_label' );
add_action( 'init', 'ggc_change_post_object' );


//REGISTER CUSTOM POST TYPES
function ggc_create_custom_post_type() {

  register_post_type( 'series',
    array(
      'label' => 'Product Series',
      'publicly_queryable' => true,
      'show_ui' => true,
      'show_in_menu' => true,
      'menu_icon' => 'dashicons-series',
      'public' => true,
      'show_in_nav_menus' => false,
      'has_archive' => false,
      'exclude_from_search' => true,
      'supports' => array( 'title', 'editor', 'revisions' ),
    )
  );

  // PRODUCT POST TYPES
  register_post_type( 'process',
    array(
      'label' => 'Processes',
      'publicly_queryable' => true,
      'show_ui' => true,
      'show_in_menu' => true,
      'menu_icon' => 'dashicons-process',
      'public' => true,
      'show_in_nav_menus' => true,
      'has_archive' => false,
      'rewrite' => array(
        'slug' => 'process',
      ),
      'exclude_from_search' => false
    )
  );

  register_post_type( 'industry',
    array(
      'label' => 'Industries',
      'publicly_queryable' => true,
      'show_ui' => true,
      'show_in_menu' => true,
      'menu_icon' => 'dashicons-industry',
      'public' => true,
      'show_in_nav_menus' => true,
      'has_archive' => false,
      'rewrite' => array(
        'slug' => 'industries',
      ),
      'exclude_from_search' => false
    )
  );

  register_post_type( 'product_type',
    array(
      'label' => 'Product Types',
      'publicly_queryable' => true,
      'show_ui' => true,
      'show_in_menu' => true,
      'menu_icon' => 'dashicons-product_type',
      'public' => true,
      'show_in_nav_menus' => true,
      'has_archive' => false,
      'rewrite' => array(
        'slug' => 'product-type',
      ),
      'exclude_from_search' => false
    )
  );

  register_post_type( 'typical_config',
    array(
      'label' => 'Configurations',
      'publicly_queryable' => true,
      'show_ui' => true,
      'show_in_menu' => true,
      'menu_icon' => 'dashicons-config',
      'public' => true,
      'show_in_nav_menus' => true,
      'has_archive' => false,
      'rewrite' => array(
        'slug' => 'typical-configuration',
      ),
      'exclude_from_search' => false
    )
  );

  register_post_type( 'custom_option',
    array(
      'label' => 'Custom Options',
      'publicly_queryable' => true,
      'show_ui' => true,
      'show_in_menu' => true,
      'menu_icon' => 'dashicons-custom-option',
      'public' => true,
      'show_in_nav_menus' => true,
      'has_archive' => false,
      'rewrite' => array(
        'slug' => 'custom-option',
      ),
      'exclude_from_search' => true
    )
  );

  register_post_type( 'datasheet',
    array(
      'labels' => array(
        'name' => _x( 'Datasheets', 'Post type general name'),
        'singular_name' => _x( 'Datasheet', 'Post type singular name'),
      ),
      'publicly_queryable' => true,
      'show_ui' => true,
      'show_in_menu' => true,
      'menu_icon' => 'dashicons-datasheet',
      'public' => true,
      'show_in_nav_menus' => true,
      'has_archive' => false,
      'rewrite' => array(
        'slug' => 'data-sheet',
      ),
      'exclude_from_search' => false
    )
  );



  register_post_type( 'webinar',
    array(
      'labels' => array(
        'name' => _x( 'Webinars', 'Post type general name'),
        'singular_name' => _x( 'Webinar', 'Post type singular name'),
      ),
      'publicly_queryable' => true,
      'show_ui' => true,
      'show_in_menu' => true,
      'menu_icon' => 'dashicons-webinar',
      'public' => true,
      'show_in_nav_menus' => true,
      'has_archive' => false,
      'rewrite' => array(
        'slug' => 'webinars',
      ),
      'exclude_from_search' => false
    )
  );

  register_post_type( 'video',
    array(
      'label' => 'Videos',
      'publicly_queryable' => true,
      'show_ui' => true,
      'show_in_menu' => true,
      'menu_icon' => 'dashicons-video',
      'public' => true,
      'show_in_nav_menus' => true,
      'has_archive' => true,
      'supports' => array('title'),
      'rewrite' => array(
        'slug' => 'videos',
      ),
      'exclude_from_search' => false
    )
  );


  register_post_type( 'case_study',
    array(
      'labels' => array(
        'name' => _x( 'Case Studies', 'Post type general name'),
        'singular_name' => _x( 'Case Study', 'Post type singular name'),
      ),
      'publicly_queryable' => true,
      'show_ui' => true,
      'show_in_menu' => true,
      'menu_icon' => 'dashicons-case_study',
      'public' => true,
      'show_in_nav_menus' => true,
      'has_archive' => false,
      'rewrite' => array(
        'slug' => 'case-study',
      ),
      'exclude_from_search' => false
    )
  );

  register_post_type( 'literature',
    array(
      'labels' => array(
        'name' => _x( 'Literature', 'Post type general name'),
        'singular_name' => _x( 'Literature', 'Post type singular name'),
      ),
      'publicly_queryable' => true,
      'show_ui' => true,
      'show_in_menu' => true,
      'menu_icon' => 'dashicons-literature',
      'public' => true,
      'show_in_nav_menus' => true,
      'has_archive' => false,
      'rewrite' => array(
        'slug' => 'literature',
      ),
      'exclude_from_search' => false
    )
  );

  register_post_type( 'representative',
    array(
      'label' => 'Representatives',
      'publicly_queryable' => true,
      'show_ui' => true,
      'show_in_menu' => true,
      'menu_icon' => 'dashicons-representative',
      'public' => true,
      'show_in_nav_menus' => false,
      'has_archive' => false,
      'exclude_from_search' => true,
      'supports' => array( 'title', 'editor', 'revisions' ),
    )
  );

  register_post_type( 'saved_layout',
    array(
      'label' => 'Saved Layouts',
      'publicly_queryable' => true,
      'show_ui' => true,
      'show_in_menu' => true,
      'menu_icon' => 'dashicons-saved_layout',
      'public' => true,
      'show_in_nav_menus' => false,
      'has_archive' => false,
      'exclude_from_search' => true,
      'supports' => array( 'title', 'editor', 'revisions' ),
    )
  );



}
add_action( 'init', 'ggc_create_custom_post_type', 1 );



//HIDE EDITOR
add_action( 'init', function() {
  remove_post_type_support( 'post', 'editor' );
  remove_post_type_support( 'page', 'editor' );
}, 99);

// Set Custom Menu Order for WordPress Admin Menu
function ggc_custom_menu_order($menu_ord) {
  if (!$menu_ord) return true;
  return array(
    'index.php', // Dashboard
    'separator1', // First separator
    'edit.php?post_type=page', // Pages
    //'edit.php', // Blog Posts // Blog is in HS
    //
    'edit.php?post_type=industry', // Industry
    'edit.php?post_type=process', // Process
    'edit.php?post_type=series', // Series
    'edit.php?post_type=product_type', // Resources
    'edit.php?post_type=typical_config', // Typical Configuration
    'edit.php?post_type=custom_option', // Custom Options
    //
    'edit.php?post_type=datasheet', // Datasheets
    'edit.php?post_type=case_study', // Case Study
    'edit.php?post_type=literature', // Literature
    //
    'edit.php?post_type=video', // Videos
    'edit.php?post_type=webinar', // Webinars
'edit.php?post_type=representative', // Webinars
    //
    'separator2', // Second separator
    'edit.php?post_type=saved_layout', // Saved Layout
    'theme-general-settings', // Theme Settings / Header & Footer Settings
    'themes.php', // Appearance
    'plugins.php', // Plugins
    'users.php', // Users
    'edit-comments.php', // Comments
    'upload.php', // Media
    'tools.php', // Tools
    'options-general.php', // Settings
    'separator3', // Third separator
    'edit.php?post_type=acf-field-group', // Advanced Custom Fields Pro
    'wpmudev', // WPMU DEV
    'wp-defender', // Defender Pro
    'all-in-one-seo-pack', // All in One SEO
    'separator-last', // Last separator
  );
}
add_filter('custom_menu_order', 'ggc_custom_menu_order'); // Activate custom_menu_order
add_filter('menu_order', 'ggc_custom_menu_order');

// Create ACF Options Page for General Theme Options as well as the Header & Footer
if( function_exists('acf_add_options_page') ) {
  acf_add_options_page(array(
    'page_title'  => 'Theme General Settings',
    'menu_title'  => 'Theme Settings',
    'menu_slug'   => 'theme-general-settings',
    'capability'  => 'edit_posts',
    'redirect'    => false
  ));
  acf_add_options_sub_page(array(
    'page_title'  => 'Header &amp; Footer Settings',
    'menu_title'  => 'Header &amp; Footer',
    'parent_slug' => 'theme-general-settings',
  ));
}


// REGISTER ACF FIELDS FOR OPTIONS PAGES
include_once('includes/option_fields.php');

// REGISTER ACF FIELDS FOR CUSTOM POST TYPES
require_once('includes/cpt_fields.php');



function marion_register_nav_menu(){
  register_nav_menus( array(
    'primary'   => __('Primary Menu', 'marion_theme'),
    'top_right' => __('Top Right Menu', 'marion_theme'),
  ));
}
add_action( 'after_setup_theme', 'marion_register_nav_menu', 0 );

// Register Bootstrap 4 Nav Walker
require_once('includes/class-wp-bootstrap-navwalker.php');


//MODIFY GRAVITY FORMS BUTTON MARKUP
if( !is_admin() ){
  add_filter( 'gform_submit_button', 'ggc_form_submit_button', 10, 2 );
  function ggc_form_submit_button( $button, $form ) {
      return "<button class='button gform_button' id='gform_submit_button_{$form['id']}'><span>Submit</span></button>";
  }

  // add_filter( 'gform_field_container', 'ggc_field_container', 10, 6 );
  // function ggc_field_container( $field_container, $field, $form, $css_class, $style, $field_content ) {
  //      return '<li class="gfield field_sublabel_below field_description_below '.$field->size.' '.$field->type.' '.$css_class.'" style="'.$style.'">{FIELD_CONTENT}</li>';
  // }

  add_filter( 'gform_field_container', 'ggc_field_container', 10, 6 );
  function ggc_field_container( $field_container, $field, $form, $css_class, $style, $field_content ) {
     $field_container = str_replace( "class='", "class='$field->size $field->type " , $field_container );
    return $field_container;
  }
}


function navigation_block_load_menu_field_choices( $field ) {
  // reset choices
  $field['choices'] = array();
  $menus = get_terms( 'nav_menu', array( 'hide_empty' => true ) );
  //$menus = get_registered_nav_menus(); //uncomment this if you want to populate the dropdown with all Menu Locations
  $blank_list = json_encode(array( "name" => "Default Menu", "term_id" => ""));
  $blank_list = json_decode($blank_list);
  array_unshift($menus, $blank_list);

    foreach ( $menus as $val ) {
        $value = $val->term_id;
        $label = $val->name;
        $field['choices'][ $value ] = $label;
    }

  // return the field
  return $field;

}
add_filter('acf/load_field/name=navigation_block_selected_nav', 'navigation_block_load_menu_field_choices'); //replace custom_menu with your field name


//REMOVE BASIC CUSTOM FIELDS FROM WP EDITOR - SPEEDS UP ADMIN EDIT PAGE
add_filter('acf/settings/remove_wp_meta_box', '__return_true');


function my_acf_google_map_api( $api ){
  $api['key'] = get_field('google_maps_api_key','option');
  return $api;
}
add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');



function my_acf_modify_wysiwyg_height() {

    ?>
    <style type="text/css">
        .two_col_feature_editor iframe{
            max-height: 100px !important;
        }
    </style>
    <?php

}
add_action('acf/input/admin_head', 'my_acf_modify_wysiwyg_height');



function disable_file_edit() {
  define('DISALLOW_FILE_EDIT', TRUE);
}
add_action('init','disable_file_edit');















?>
