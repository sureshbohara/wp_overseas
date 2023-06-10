<?php 
function title_customize_register( $wp_customize ) { 
  // social section
    $wp_customize->add_section('title_section', array(
        'title' => 'Update Section Title',
        'description'   => 'Update Your Section Title',
    ));


    $wp_customize->add_setting('title1', array(
        'default'        => 'First Title',
        'transport'   => 'refresh',
     ));
     $wp_customize->add_control('title1_haldel', array(
        'label'   => 'First Title',
        'section' => 'title_section',
        'settings'  => 'title1',
        'type'    => 'text',
    ));


    $wp_customize->add_setting('title2', array(
        'default'        => 'Second Title',
        'transport'   => 'refresh',
     ));
    $wp_customize->add_control('title2_haldel', array(
        'label'   => 'Second Title',
        'section' => 'title_section',
        'settings'  => 'title2',
        'type'    => 'text',
    ));


     $wp_customize->add_setting('title3', array(
        'default'        => 'Third Title',
        'transport'   => 'refresh',
     ));
    $wp_customize->add_control('title3_haldel', array(
        'label'   => 'Third Title',
        'section' => 'title_section',
        'settings'  => 'title3',
        'type'    => 'text',
    ));


     $wp_customize->add_setting('title4', array(
        'default'        => 'Forth Title',
        'transport'   => 'refresh',
     ));
    $wp_customize->add_control('title4_haldel', array(
        'label'   => 'Forth Title',
        'section' => 'title_section',
        'settings'  => 'title4',
        'type'    => 'text',
    ));


     $wp_customize->add_setting('title5', array(
        'default'        => 'Fifth Title',
        'transport'   => 'refresh',
     ));
    $wp_customize->add_control('title5_haldel', array(
        'label'   => 'Fifth Title',
        'section' => 'title_section',
        'settings'  => 'title5',
        'type'    => 'text',
    ));


     $wp_customize->add_setting('title6', array(
        'default'        => 'Sixth Title',
        'transport'   => 'refresh',
     ));
    $wp_customize->add_control('title6_haldel', array(
        'label'   => 'Sixth Title',
        'section' => 'title_section',
        'settings'  => 'title6',
        'type'    => 'text',
    ));


     $wp_customize->add_setting('title7', array(
        'default'        => 'Seven Title',
        'transport'   => 'refresh',
     ));
    $wp_customize->add_control('title7_haldel', array(
        'label'   => 'Seven Title',
        'section' => 'title_section',
        'settings'  => 'title7',
        'type'    => 'text',
    ));



   $wp_customize->add_setting('title8', array(
        'default'        => 'Eight Title',
        'transport'   => 'refresh',
     ));
    $wp_customize->add_control('title8_haldel', array(
        'label'   => 'Eight Title',
        'section' => 'title_section',
        'settings'  => 'title8',
        'type'    => 'text',
    ));


     $wp_customize->add_setting('copy_right_footer', array(
        'default'        => 'By Realsherpa',
        'transport'   => 'refresh',
     ));
    $wp_customize->add_control('copy_right_footer_haldel', array(
        'label'   => 'Copy Right Text',
        'section' => 'title_section',
        'settings'  => 'copy_right_footer',
        'type'    => 'text',
    ));
}
?>