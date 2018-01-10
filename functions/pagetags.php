<?php


  //Add Tags to Pages
  function tags_support_all() {
    register_taxonomy_for_object_type('post_tag', 'post');
  }
  function tags_support_query($wp_query) {
    if ($wp_query->get('tag')) $wp_query->set('post_type', 'any');
  }
  add_action('init', 'tags_support_all');
  add_action('pre_get_posts', 'tags_support_query');