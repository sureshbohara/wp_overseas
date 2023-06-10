<?php 
function about_customize_register( $wp_customize ) {
    
    $wp_customize->add_section('raj_about_section', array(
        'title' => 'About Us Section',
        'description'   => 'Update Your Text',    
    ));

     $wp_customize->add_section('raj_message_section', array(
        'title' => 'Message Section',
        'description'   => 'Update Your Text',    
    ));

     $wp_customize->add_setting('about_image', array(
     'default'        => '',
    ));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'about_image_control', array(
    'label' => 'Main Image',
    'settings'  => 'about_image',
    'section'   => 'raj_about_section'
    )));


    $wp_customize->add_setting('title', array(
        'default'        => 'Type Title',
        'transport'   => 'refresh',
     ));
     $wp_customize->add_control('title_haldel', array(
        'label'   => 'About Title',
        'section' => 'raj_about_section',
        'settings'  => 'title',
        'type'    => 'text',
    ));


    $wp_customize->add_setting('description', array(
        'default'        => 'Type Title Description',
        'transport'   => 'refresh',
         'sanitize_callback' => 'sanitize_textarea_field',
     ));
     $wp_customize->add_control('description_haldel', array(
        'label'   => 'About Description',
        'section' => 'raj_about_section',
        'settings'  => 'description',
        'type'    => 'textarea',
    ));


    $wp_customize->add_setting('button', array(
        'default'        => 'Button Text',
        'transport'   => 'refresh',
     ));
     $wp_customize->add_control('button_haldel', array(
        'label'   => 'Button Text',
        'section' => 'raj_about_section',
        'settings'  => 'button',
        'type'    => 'text',
    ));

     $wp_customize->add_setting('link', array(
        'default'        => 'Button Text',
        'transport'   => 'refresh',
     ));
     $wp_customize->add_control('link_haldel', array(
        'label'   => 'Button Link',
        'section' => 'raj_about_section',
        'settings'  => 'link',
        'type'    => 'text',
    ));




// mission
     $wp_customize->add_setting('mission', array(
        'default'        => 'Mission',
        'transport'   => 'refresh',
        'sanitize_callback' => 'sanitize_textarea_field',
     ));
     $wp_customize->add_control('mission_haldel', array(
        'label'   => 'Mission',
        'section' => 'raj_about_section',
        'settings'  => 'mission',
        'type'    => 'textarea',
    ));
// vision
     $wp_customize->add_setting('vision', array(
        'default'        => 'Vision',
        'transport'   => 'refresh',
        'sanitize_callback' => 'sanitize_textarea_field',
     ));
     $wp_customize->add_control('vision_haldel', array(
        'label'   => 'Vision',
        'section' => 'raj_about_section',
        'settings'  => 'vision',
        'type'    => 'textarea',
    ));

   // objectives
     $wp_customize->add_setting('objectives', array(
        'default'        => '',
        'transport'   => 'refresh',
        'sanitize_callback' => 'sanitize_textarea_field',
     ));
     $wp_customize->add_control('objectives_haldel', array(
        'label'   => 'Goals',
        'section' => 'raj_about_section',
        'settings'  => 'objectives',
        'type'    => 'textarea',
    ));




    $wp_customize->add_setting('director_name', array(
        'default'        => 'Director Name',
        'transport'   => 'refresh',
     ));
     $wp_customize->add_control('director_name_haldel', array(
        'label'   => 'Director Name',
        'section' => 'raj_message_section',
        'settings'  => 'director_name',
        'type'    => 'text',
    ));

      $wp_customize->add_setting('director_position', array(
        'default'        => 'Director Position',
        'transport'   => 'refresh',
     ));
     $wp_customize->add_control('director_position_haldel', array(
        'label'   => 'Director Position',
        'section' => 'raj_message_section',
        'settings'  => 'director_position',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('message_title', array(
        'default'        => 'Main Title',
        'transport'   => 'refresh',
     ));
     $wp_customize->add_control('message_title_haldel', array(
        'label'   => 'Title',
        'section' => 'raj_message_section',
        'settings'  => 'message_title',
        'type'    => 'text',
    ));


    $wp_customize->add_setting('message_description', array(
        'default'        => 'Message Description',
        'transport'   => 'refresh',
     ));
     $wp_customize->add_control('message_description_haldel', array(
        'label'   => 'Message Description',
        'section' => 'raj_message_section',
        'settings'  => 'message_description',
        'type'    => 'textarea',
    ));

    $wp_customize->add_setting('director_image', array(
     'default'        => '',
    ));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'director_image_control', array(
    'label' => 'Director Image',
    'settings'  => 'director_image',
    'section'   => 'raj_message_section'
    )));


   $wp_customize->add_setting('messsage_button', array(
        'default'        => '',
        'transport'   => 'refresh',
     ));
     $wp_customize->add_control('messsage_button_haldel', array(
        'label'   => 'Button Name',
        'section' => 'raj_message_section',
        'settings'  => 'messsage_button',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('button_link', array(
        'default'        => '',
        'transport'   => 'refresh',
     ));
     $wp_customize->add_control('button_link_haldel', array(
        'label'   => 'Button Link',
        'section' => 'raj_message_section',
        'settings'  => 'button_link',
        'type'    => 'text',
    ));
         $wp_customize->add_setting('circle1', array(
        'default'        => '',
        'transport'   => 'refresh',
     ));
      $wp_customize->add_control('circle1_haldel', array(
        'label'   => 'Circle First',
        'section' => 'raj_about_section',
        'settings'  => 'circle1',
        'type'    => 'text',
     ));

       $wp_customize->add_setting('circle2', array(
        'default'        => '',
        'transport'   => 'refresh',
     ));
      $wp_customize->add_control('circle2_haldel', array(
        'label'   => 'Circle Second',
        'section' => 'raj_about_section',
        'settings'  => 'circle2',
        'type'    => 'text',
     ));

       $wp_customize->add_setting('circle3', array(
        'default'        => '',
        'transport'   => 'refresh',
     ));
      $wp_customize->add_control('circle3_haldel', array(
        'label'   => 'Circle Third',
        'section' => 'raj_about_section',
        'settings'  => 'circle3',
        'type'    => 'text',
     ));

       $wp_customize->add_setting('circle4', array(
        'default'        => '',
        'transport'   => 'refresh',
     ));
      $wp_customize->add_control('circle4_haldel', array(
        'label'   => 'Circle Forth',
        'section' => 'raj_about_section',
        'settings'  => 'circle4',
        'type'    => 'text',
     ));

       $wp_customize->add_setting('circle5', array(
        'default'        => '',
        'transport'   => 'refresh',
     ));
      $wp_customize->add_control('circle5_haldel', array(
        'label'   => 'Circle Fifth',
        'section' => 'raj_about_section',
        'settings'  => 'circle5',
        'type'    => 'text',
     ));

       $wp_customize->add_setting('circle6', array(
        'default'        => '',
        'transport'   => 'refresh',
     ));
      $wp_customize->add_control('circle6_haldel', array(
        'label'   => 'Circle Six',
        'section' => 'raj_about_section',
        'settings'  => 'circle6',
        'type'    => 'text',
     ));

       $wp_customize->add_setting('circle7', array(
        'default'        => '',
        'transport'   => 'refresh',
     ));
      $wp_customize->add_control('circle7_haldel', array(
        'label'   => 'Circle Seven',
        'section' => 'raj_about_section',
        'settings'  => 'circle7',
        'type'    => 'text',
     ));

       $wp_customize->add_setting('circle8', array(
        'default'        => '',
        'transport'   => 'refresh',
     ));
      $wp_customize->add_control('circle8_haldel', array(
        'label'   => 'Circle Eight',
        'section' => 'raj_about_section',
        'settings'  => 'circle8',
        'type'    => 'text',
     ));
     

}
?>