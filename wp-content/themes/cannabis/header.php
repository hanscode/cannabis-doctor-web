<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>

  <?php wp_head(); ?>

</head>

<body <?php  body_class(); ?>>

  <!-- Top navbar -->
  <section class="top bg-primary text-white">
  <nav class="navbar navbar-expand-lg navbar-primary bg-primary static-top" style="height:50px;">
    <div class="container">
      <div class="navbar-brand">
        <ul class="nav top-info">
          <li class="nav-item mr-3">
            <span><i class="fas fa-envelope"></i> <?php echo get_theme_mod( 'email_info' ); ?></span>
          </li>
          <li class="nav-item">
            <span> <i class="fas fa-phone"></i> <?php echo get_theme_mod( 'phone_info' ); ?></span>
          </li>
        </ul>
      </div>
      <div id="navbarResponsive">
        <ul class="nav ml-auto top-social">
        <?php cannabis_social_links(); ?>
        </ul>
      </div>
    </div>
  </nav>
  </section>


  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <?php if (get_theme_mod( 'cannabis_logo' )) : ?>
      <a class="navbar-brand" href="<?php bloginfo('url'); ?>"><img height="40" width="auto" src="<?php echo get_theme_mod( 'cannabis_logo' );  ?>"></a>
     <?php else : ?>
       <a class="navbar-brand" href="<?php bloginfo('url'); ?>"><?php bloginfo('name');  ?></a>
      <?php endif ?>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="close-toggler"></span><!-- my-1 mx-2-->
        <span class="navbar-toggler-icon"></span>
      </button>
      <?php has_nav_menu( 'primary-menu' ) ? primary_menu() : '' ?>
    </div>
  </nav>

  <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-navbar">
    <div class="container">
      <?php if (get_theme_mod( 'cannabis_logo' )) : ?>
      <a class="navbar-brand" href="<?php bloginfo('url'); ?>"><img height="40" width="auto" src="<?php echo get_theme_mod( 'cannabis_logo' );  ?>"></a>
     <?php else : ?>
       <a class="navbar-brand" href="<?php bloginfo('url'); ?>"><?php bloginfo('name');  ?></a>
      <?php endif ?>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="close-toggler"></span>
        <span class="navbar-toggler-icon"></span>
      </button>
      <?php has_nav_menu( 'primary-menu' ) ? primary_menu() : '' ?>
    </div>
  </nav>

