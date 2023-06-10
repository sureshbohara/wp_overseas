<?php 
function iso_customize_register( $wp_customize ) {
    
  // social section
    $wp_customize->add_section('iso_section', array(
        'title' => 'Sister Organization & ISO Logo',
        'description'   => 'Update Your Logo',
    ));


    $wp_customize->add_setting('iso_logo1', array(
     'default'        => '',
    ));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'iso_logo1_control', array(
    'label' => 'Sister Logo 1',
    'settings'  => 'iso_logo1',
    'section'   => 'iso_section'
    )));

    $wp_customize->add_setting('iso_logo2', array(
     'default'        => '',
    ));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'iso_logo2_control', array(
    'label' => 'Sister Logo 2',
    'settings'  => 'iso_logo2',
    'section'   => 'iso_section'
    )));

    $wp_customize->add_setting('iso_logo3', array(
     'default'        => '',
    ));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'iso_logo3_control', array(
    'label' => 'Sister Logo 3',
    'settings'  => 'iso_logo3',
    'section'   => 'iso_section'
    )));

    $wp_customize->add_setting('iso_logo4', array(
     'default'        => '',
    ));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'iso_logo4_control', array(
    'label' => 'Sister Logo 4',
    'settings'  => 'iso_logo4',
    'section'   => 'iso_section'
    )));
	
	 $wp_customize->add_setting('iso_logo5', array(
     'default'        => '',
    ));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'iso_logo5_control', array(
    'label' => 'Sister Logo 5',
    'settings'  => 'iso_logo5',
    'section'   => 'iso_section'
    )));

    $wp_customize->add_setting('iso_logo6', array(
     'default'        => '',
    ));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'iso_logo6_control', array(
    'label' => 'Sister Logo 6',
    'settings'  => 'iso_logo6',
    'section'   => 'iso_section'
    )));
  
	
	 $wp_customize->add_setting('iso_logo7', array(
     'default'        => '',
    ));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'iso_logo7_control', array(
    'label' => 'Sister Logo 7',
    'settings'  => 'iso_logo7',
    'section'   => 'iso_section'
    )));
	
	
	 $wp_customize->add_setting('footer_logo1', array(
     'default'        => '',
    ));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'footer_logo1_control', array(
    'label' => 'ISO Logo 1',
    'settings'  => 'footer_logo1',
    'section'   => 'iso_section'
    )));
	


}
?>