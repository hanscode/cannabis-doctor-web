<?php

function primary_menu() {
  wp_nav_menu( array(
      'theme_location' => 'primary-menu',
      'menu_id'        => false,
      'container'      => 'div',
			'container_class' => 'collapse navbar-collapse',
			'container_id'   => 'navbarResponsive',
      'depth'          => 2,
			'menu_class'     => 'navbar-nav ml-auto'
  ) );
}

function secondary_menu() {
  wp_nav_menu( array(
      'theme_location' => 'secondary-menu', // Defined when registering the menu
      'menu_id'        => 'footer',
      'container'      => false,
      'menu_class'     => 'nav justify-content-center mb-3'
  ) );
}

function footer_menu() {
  wp_nav_menu( array(
      'theme_location' => 'footer-menu', // Defined when registering the menu
      'menu_id'        => 'footer',
      'container'      => false,
			'menu_class'     => 'nav'
  ) );
}

//Add support for two custom navigation menus.
function cannabis_doctor_menus() {
  register_nav_menus(
    array(
			'primary-menu' 	=> __( 'Primary Menu'),
			'secondary-menu' => __( 'Secondary Menu' ),
			'footer-menu' => __( 'Footer Menu')
    )
  );
}
add_action( 'init', 'cannabis_doctor_menus' );

function cannabis_menu_classes($classes, $item, $args) {
  if($args->theme_location == 'primary-menu') {
    $classes[] = 'nav-item';
  }
  return $classes;
}
add_filter('nav_menu_css_class', 'cannabis_menu_classes', 1, 3);

function add_link_atts($atts) {
  $atts['class'] = "nav-link";
  return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_link_atts');

function add_class_to_register_menu_item( $atts, $item, $args ) {
    // check if the item is set to href="#"
    if ( $atts['href'] == '#' && $args->theme_location == 'primary-menu' ) {
      // add the desired attributes:
      $atts['class'] = 'btn btn-outline-success';
      $atts['role'] = 'button';
      $atts['data-toggle'] = 'modal';
      $atts['data-target'] = '#register';
    }
    if ( $atts['href'] == '#' && $args->theme_location == 'secondary-menu' ) {
      // add the desired attributes:
      $atts['role'] = 'button';
      $atts['data-toggle'] = 'modal';
      $atts['data-target'] = '#register';
    }
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_class_to_register_menu_item', 10, 3 );