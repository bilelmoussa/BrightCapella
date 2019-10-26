<?php
function brc_customize_achievement($wp_customize){
    //Achievement Section
    $wp_customize->add_section('achievement', array(
        'title'   => __('Achievements', 'brc_achievement'),
        'description' => sprintf(__('Options for achievement', 'brc_achievement')),
        'priority'    => 170
    ));

    //Products Number
    $wp_customize->add_setting('products_nmb_setting', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'brc_check_number_input',
        'default'   => _x(378, 'brc_achievement'),
        'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('products_nmb_setting', array(
        'type' => 'number',
        'label'   => __('Products Number', 'brc_achievement'),
        'section' => 'achievement',
        'priority'  => 1
    ));

    //Clients Number
    $wp_customize->add_setting('clients_nmb_setting', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'brc_check_number_input',
        'default'   => _x(21, 'brc_achievement'),
        'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('clients_nmb_setting', array(
        'type' => 'number',
        'label'   => __('Clients Number', 'brc_achievement'),
        'section' => 'achievement',
        'priority'  => 2
    ));
 
    //Sales Number
    $wp_customize->add_setting('sales_nmb_setting', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'brc_check_number_input',
        'default'   => _x(14, 'brc_achievement'),
        'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('sales_nmb_setting', array(
        'type' => 'number',
        'label'   => __('Sales Number', 'brc_achievement'),
        'section' => 'achievement',
        'priority'  => 3
    ));

    //Partners Number
    $wp_customize->add_setting('partners_nmb_setting', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'brc_check_number_input',
        'default'   => _x(12, 'brc_achievement'),
        'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('partners_nmb_setting', array(
        'type' => 'number',
        'label'   => __('Partners Number', 'brc_achievement'),
        'section' => 'achievement',
        'priority'  => 4
    ));
    
    
    function brc_check_number_input( $number, $setting ) {
        $number = absint( $number );
      
        return ( $number ? $number : $setting->default );
    }

}
add_action('customize_register', 'brc_customize_achievement');
