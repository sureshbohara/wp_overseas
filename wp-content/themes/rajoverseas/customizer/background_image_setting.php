<?php 
function bg_image_customize_register( $wp_customize ) {
    
  // social section
    $wp_customize->add_section('bg_image_section', array(
        'title' => 'Setup Background Image',
        'description'   => 'Update Your Image',
    ));


    $wp_customize->add_setting('bg_image1_settings', array(
     'default'        => '',
    ));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'bg_image1_control', array(
    'label' => 'Call To Action Section',
    'settings'  => 'bg_image1_settings',
    'section'   => 'bg_image_section'
    )));

    $wp_customize->add_setting('bg_image2_settings', array(
     'default'        => '',
    ));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'bg_image2_control', array(
    'label' => ' Latest Vacancy Section',
    'settings'  => 'bg_image2_settings',
    'section'   => 'bg_image_section'
    )));


    $wp_customize->add_setting('bg_image3_settings', array(
     'default'        => '',
    ));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'bg_image3_control', array(
    'label' => 'Review Section',
    'settings'  => 'bg_image3_settings',
    'section'   => 'bg_image_section'
    )));


    $wp_customize->add_setting('bg_image4_settings', array(
     'default'        => '',
    ));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'bg_image4_control', array(
    'label' => 'Recruitment Process Flow Section',
    'settings'  => 'bg_image4_settings',
    'section'   => 'bg_image_section'
    )));
    

    $wp_customize->add_setting('bg_image5_settings', array(
     'default'        => '',
    ));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'bg_image5_control', array(
    'label' => 'Background Image Fifth Section',
    'settings'  => 'bg_image5_settings',
    'section'   => 'bg_image_section'
    )));


}
?>