<?php


function neoMenu() {
  register_nav_menu('top',__( 'Navigation Menu' ));
  register_nav_menu('bottom',__( 'Footer Menu' ));
}
add_action( 'init', 'neoMenu' );