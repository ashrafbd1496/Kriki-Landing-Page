<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title><?php echo get_bloginfo( 'name' ); ?></title>

    <?php wp_head();?>
  </head>
  <body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <!-- Header Area wrapper Starts -->
    <header id="header-wrap">
      <!-- Navbar Start -->
      <nav class="navbar navbar-expand-md bg-inverse fixed-top scrolling-navbar">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <a href="<?php esc_url(home_url()); ?>" class="navbar-brand"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/logo.png" alt=""></a>       
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="lni-menu"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">

             <?php 
               wp_nav_menu(array(
                  'menu'   =>'main-menu',
                  'theme_location'    => 'main-menu',
                  'depth' => 1,
                  'menu_class'   =>'navbar-nav mr-auto w-100 justify-content-end clearfix',
                  'menu_id'   => 'main-menu1',
                  'container_class' => 'collapse navbar-collapse',
                  'container_id' =>'navbarCollapse',
               ));
               ?>

          </div>
        </div>
      </nav>
      <!-- Navbar End -->

     