<!doctype html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <?php wp_head();?>
      <title>
        <?php bloginfo('name'); ?> | 
        <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
    </title>
 </head>
<body <?php body_class(); ?>>

  <!-- ======= Top Bar ======= -->
<section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center">
			<a href="mailto:<?php echo get_theme_mod('email_setting') ?>">
				<?php echo get_theme_mod('email_setting') ?>
			</a>
		  </i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><?php echo get_theme_mod('mobile_number') ?></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="<?php echo get_theme_mod('witttre') ?>" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="<?php echo get_theme_mod('facebook') ?>" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="<?php echo get_theme_mod('instagram') ?>" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="<?php echo get_theme_mod('linkedin') ?>" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo">
         <?php 
         if(has_custom_logo() || is_customize_preview()){
          the_custom_logo();
         }
       ?>
      </h1>
      <nav id="navbar" class="navbar">
            <?php
                wp_nav_menu(array(
                'theme_location' => 'navbar',
                'container' => false,
                'menu_class' => '',
                'fallback_cb' => '__return_false',
                'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'depth' => 2,
                'walker' => new bootstrap_5_wp_nav_menu_walker()
              ));
              ?>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->