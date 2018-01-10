<?php


  //Sidebar
  add_action( 'widgets_init', 'sydeberz_register_sidebar' );
  function sydeberz_register_sidebar() {
    register_sidebar(
        array(
            'name' => 'Sidebar',
            'id' => 'sidebar',
            'before_widget' => '<div class="item">',
            'after_widget' => '</div>',
            'before_title' => '',
            'after_title' => '',
    ));
  } 

?>