<?php
function brc_customize_phone_number($wp_customize){
    //Phone Number
    $wp_customize->add_section('phone_number', array(
            'title'   => __('Phone Number', 'brc_phone_number'),
            'description' => sprintf(__('Options Phone Number', 'brc_phone_number')),
            'priority'    => 120
    ));

    //Phone Number Setting
    $wp_customize->add_setting('phone_number_setting', array(
        'default'   => _x('Add Your Phone Number Please !', 'brc_phone_number'),
        'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('phone_number_setting', array(
        'label'   => __('Phone Number', 'brc_phone_number'),
        'section' => 'phone_number',
        'priority'  => 1
    ));    

}

add_action('customize_register', 'brc_customize_phone_number');