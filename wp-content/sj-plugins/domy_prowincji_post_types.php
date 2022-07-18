<?php
  function domy_prowincji_post_types() {
    register_post_type('domy', array(
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
?>