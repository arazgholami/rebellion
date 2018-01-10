<?php


  //Customized Continue Link in Results page
  function new_excerpt_more($more) {
  global $post;
  return '... <a href="'. get_permalink($post->ID) . '">Continue</a>';
  }
  add_filter('excerpt_more', 'new_excerpt_more');