<?php 

function sisters_files() {
  wp_enqueue_script('main-sisters', get_theme_file_uri('/build/index.js'), null, '1.0', true);
  wp_enqueue_style('sisters_variables_styles', get_theme_file_uri('/build/variables.css'));
  wp_enqueue_style('sisters_main_styles', get_theme_file_uri('/build/index.css'));
  wp_enqueue_style('sisters_header_styles', get_theme_file_uri('/build/header.css'));
  wp_enqueue_style('sisters_page_styles', get_theme_file_uri('/build/page.css'));
  wp_enqueue_style('sisters_footer_styles', get_theme_file_uri('/build/footer.css'));
  wp_enqueue_style('sisters_hamburger_styles', get_theme_file_uri('/build/hamburger-nav.css'));
  wp_enqueue_style('sisters_single_post_styles', get_theme_file_uri('/build/single.css'));
}

add_action('wp_enqueue_scripts', 'sisters_files');

function sisters_features() {
  register_nav_menu('sideMenuLocation', 'Side Menu Location');
  register_nav_menu('footerMenuLocation', 'Footer Menu Location');
  add_theme_support('title-tag');
}

add_action('after_setup_theme', 'sisters_features');

function domy_prowincji_post_types() {
  register_post_type('domy', array(
    'supports' => array('title', 'editor', 'excerpt'),
    'rewrite' => array('slug' => 'domy'),
    'has_archive' => true,
    'public' => true,
    'show_in_rest' => true,
    'labels' => array(
      'name' => 'Domy prowincji',
      'add_new_item' => 'Add new Dom prowincji',
      'edit_item' => 'Edit Dom prowincji',
      'all_items' => 'All domy prowincji',
      'singular_name' => 'Dom prowincji',
    ),
    'menu_icon' => 'dashicons-admin-home'
  ));
}
add_action('init', 'domy_prowincji_post_types');

add_filter('ai1wm_exclude_content_from_export', 'ignoreCertainFiles');

function ignoreCertainFiles($exclude_filters) {
  $exclude_filters[] = 'themes/siostry-jozefitki/node_modules';

  return $exclude_filters;
}