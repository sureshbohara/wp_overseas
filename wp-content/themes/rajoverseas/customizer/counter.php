<?php 
function counter_customize_register( $wp_customize ) { 
  // social section
    $wp_customize->add_section('counter_section', array(
        'title' => 'Update Counter',
        'description'   => 'Update Your Counter',
    ));


    $wp_customize->add_setting('counter1', array(
        'default'        => '',
        'transport'   => 'refresh',
     ));
     $wp_customize->add_control('counter1_haldel', array(
        'label'   => 'Established in Nepal',
        'section' => 'counter_section',
        'settings'  => 'counter1',
        'type'    => 'text',
    ));

     $wp_customize->add_setting('counter2', array(
        'default'        => '',
        'transport'   => 'refresh',
     ));
     $wp_customize->add_control('counter2_haldel', array(
        'label'   => 'Recruitment Worldwide',
        'section' => 'counter_section',
        'settings'  => 'counter2',
        'type'    => 'text',
    ));

      $wp_customize->add_setting('counter3', array(
        'default'        => '',
        'transport'   => 'refresh',
     ));
     $wp_customize->add_control('counter3_haldel', array(
        'label'   => 'Countries Recruiting',
        'section' => 'counter_section',
        'settings'  => 'counter3',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('counter4', array(
        'default'        => '',
        'transport'   => 'refresh',
     ));
     $wp_customize->add_control('counter4_haldel', array(
        'label'   => 'Valuable Clients',
        'section' => 'counter_section',
        'settings'  => 'counter4',
        'type'    => 'text',
    ));
}
?>