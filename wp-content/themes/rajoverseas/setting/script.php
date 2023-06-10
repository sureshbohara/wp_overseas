<?php 
   function raj_script(){
   	//css
   wp_register_style('custom_css', get_template_directory_uri() .  '/style.css');
   wp_register_style('aos', get_template_directory_uri() .  '/assets/vendor/aos/aos.css');
   wp_register_style('bootstrap.min', get_template_directory_uri() .  '/assets/vendor/bootstrap/css/bootstrap.min.css');
   wp_register_style('bootstrap-icons', get_template_directory_uri() .  '/assets/vendor/bootstrap-icons/bootstrap-icons.css');
   wp_register_style('boxicons.min', get_template_directory_uri() .  '/assets/vendor/boxicons/css/boxicons.min.css');
   wp_register_style('glightbox.min', get_template_directory_uri() .  '/assets/vendor/glightbox/css/glightbox.min.css');
   wp_register_style('swiper-bundle.min', get_template_directory_uri() .  '/assets/vendor/swiper/swiper-bundle.min.css');
   wp_register_style('mycss', get_template_directory_uri() .  '/assets/css/mycss.css');
   wp_register_style('style', get_template_directory_uri() .  '/assets/css/style.css');
   
   wp_enqueue_style('custom_css');
   wp_enqueue_style('aos');
   wp_enqueue_style('bootstrap.min');
   wp_enqueue_style('bootstrap-icons');
   wp_enqueue_style('boxicons.min');
   wp_enqueue_style('glightbox.min');
   wp_enqueue_style('swiper-bundle.min');
   wp_enqueue_style('mycss');
   wp_enqueue_style('style');
   

   	// js
    wp_register_script('purecounter_vanilla', get_template_directory_uri() .  '/assets/vendor/purecounter/purecounter_vanilla.js',array('jquery'),false,true);
    wp_register_script('aos', get_template_directory_uri() .  '/assets/vendor/aos/aos.js',array('jquery'),false,true);
    wp_register_script('bootstrap.bundle.min', get_template_directory_uri() .  '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js',array('jquery'),false,true);
    wp_register_script('glightbox.min', get_template_directory_uri() .  '/assets/vendor/glightbox/js/glightbox.min.js',array('jquery'),false,true);
    wp_register_script('isotope.pkgd.min', get_template_directory_uri() .  '/assets/vendor/isotope-layout/isotope.pkgd.min.js',array('jquery'),false,true);

    wp_register_script('swiper-bundle.min', get_template_directory_uri() .  '/assets/vendor/swiper/swiper-bundle.min.js',array('jquery'),false,true);
    wp_register_script('noframework.waypoints', get_template_directory_uri() .  '/assets/vendor/waypoints/noframework.waypoints',array('jquery'),false,true);
    wp_register_script('validate', get_template_directory_uri() .  '/assets/vendor/php-email-form/validate.js',array('jquery'),false,true);
    wp_register_script('main', get_template_directory_uri() .  '/assets/js/main.js',array('jquery'),false,true);
    wp_register_script('custom', get_template_directory_uri() .  '/assets/js/custom.js',array('jquery'),false,true);
    wp_register_script('mycode', get_template_directory_uri() .  '/assets/js/mycode.js',array('jquery'),false,true);
    wp_enqueue_script('purecounter_vanilla');
    wp_enqueue_script('aos');
    wp_enqueue_script('bootstrap.bundle.min');
    wp_enqueue_script('glightbox.min');
    wp_enqueue_script('isotope.pkgd.min');
    wp_enqueue_script('swiper-bundle.min');
    wp_enqueue_script('noframework.waypoints');
    wp_enqueue_script('validate');
    wp_enqueue_script('main');
    wp_enqueue_script('custom');
    wp_enqueue_script('mycode');

   }
   add_action('wp_enqueue_scripts','raj_script');
 ?>