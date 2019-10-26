<?php
function brc_customize_shop_by_sport($wp_customize){
    //Shop By Category Section
    $wp_customize->add_section('shop_by_sport', array(
        'title'   => __('Shop By Sport', 'brc_shop_by_sport'),
        'description' => sprintf(__('Options for Shop By Category', 'brc_shop_by_sport')),
        'priority'    => 170
    ));   
    
    //Sport Box Title n°1
    $wp_customize->add_setting('sport_box_title_1', array(
        'default'   => _x("Women's Gym Clothes", 'brc_shop_by_sport'),
        'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('sport_box_title_1', array(
        'label'   => __('Title N°1', 'brc_shop_by_sport'),
        'section' => 'shop_by_sport',
        'priority'  => 1
    ));

    //Sport Box url n°1
    $wp_customize->add_setting( 'sport_box_url_1', array(
        'default'    => __( get_home_url() . '/sport/women/gym-clothes' ),
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'Shop_by_sport_sanitize_url',
    ));
    
    $wp_customize->add_control( 'sport_box_url_1', array(
        'type' => 'url',
            'section' => 'shop_by_sport', // Add a default or your own section
            'label' => __( 'Url N°1',  'brc_shop_by_sport'),
            'description' => __( 'url input for sport box n°1'),
            'input_attrs' => array(
            'placeholder' => __( get_home_url() . '/sport/women/gym-clothes' ),
            ),
            'priority'  => 2
    ));

    //Sport Box Image n°1
    $wp_customize->add_setting('sport_box_image_1', array(
        'default'   => get_bloginfo('template_directory') . '/images/woman_gym.jpg',
        'type'      => 'theme_mod'
    ));
    
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'shop_box_image_1', array(
        'label'   => __('Image N°1', 'brc_shop_by_sport'),
        'section' => 'shop_by_sport',
        'settings' => 'sport_box_image_1',
        'priority'  => 3
    )));
    

    //Sport Box Title n°2
    $wp_customize->add_setting('sport_box_title_2', array(
        'default'   => _x("Mens Gym Clothes", 'brc_shop_by_sport'),
        'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('sport_box_title_2', array(
        'label'   => __('Title N°2', 'brc_shop_by_sport'),
        'section' => 'shop_by_sport',
        'priority'  => 4
    ));

    //Sport Box url n°2
    $wp_customize->add_setting( 'sport_box_url_2', array(
        'default'    => __( get_home_url() . '/sport/men/gym-clothes' ),
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'Shop_by_sport_sanitize_url',
    ));
    
    $wp_customize->add_control( 'sport_box_url_2', array(
        'type' => 'url',
            'section' => 'shop_by_sport', // Add a default or your own section
            'label' => __( 'Url N°2',  'brc_shop_by_sport'),
            'description' => __( 'url input for sport box n°2'),
            'input_attrs' => array(
            'placeholder' => __( get_home_url() . '/sport/men/gym-clothes' ),
            ),
            'priority'  => 5
    ));

    //Sport Box Image n°1
    $wp_customize->add_setting('sport_box_image_2', array(
        'default'   => get_bloginfo('template_directory').'/images/man_gym.jpg',
        'type'      => 'theme_mod'
    ));
    
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'sport_box_image_2', array(
        'label'   => __('Image N°2', 'brc_shop_by_sport'),
        'section' => 'shop_by_sport',
        'settings' => 'sport_box_image_2',
        'priority'  => 6
    )));

    //Sport Box Title n°3
    $wp_customize->add_setting('sport_box_title_3', array(
        'default'   => _x("Women's Jogging Clothes", 'brc_shop_by_sport'),
        'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('sport_box_title_3', array(
        'label'   => __('Title N°3', 'brc_shop_by_sport'),
        'section' => 'shop_by_sport',
        'priority'  => 7
    ));

    //Sport Box url n°3
    $wp_customize->add_setting( 'sport_box_url_3', array(
        'default'    => __( get_home_url() . '/sport/women/jogging-clothes' ),
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'Shop_by_sport_sanitize_url',
    ));

    $wp_customize->add_control( 'sport_box_url_3', array(
        'type' => 'url',
            'section' => 'shop_by_sport', // Add a default or your own section
            'label' => __( 'Url N°3',  'brc_shop_by_sport'),
            'description' => __( 'url input for sport box n°3'),
            'input_attrs' => array(
            'placeholder' => __( get_home_url() . '/sport/women/jogging-Clothes' ),
            ),
            'priority'  => 8
    ));

    //Sport Box Image n°3
    $wp_customize->add_setting('sport_box_image_3', array(
        'default'   => get_bloginfo('template_directory') . '/images/woman_running.jpg',
        'type'      => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'sport_box_image_3', array(
        'label'   => __('Image N°3', 'brc_shop_by_sport'),
        'section' => 'shop_by_sport',
        'settings' => 'sport_box_image_3',
        'priority'  => 9
    )));
    
    //Sport Box Title n°4
    $wp_customize->add_setting('sport_box_title_4', array(
        'default'   => _x("Mens Jogging Clothes", 'brc_shop_by_sport'),
        'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('sport_box_title_4', array(
        'label'   => __('Title N°4', 'brc_shop_by_sport'),
        'section' => 'shop_by_sport',
        'priority'  => 10
    ));

    //Sport Box url n°4
    $wp_customize->add_setting( 'sport_box_url_4', array(
        'default'    => __( get_home_url() . '/sport/men/jogging-clothes' ),
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'Shop_by_sport_sanitize_url',
    ));

    $wp_customize->add_control( 'sport_box_url_4', array(
        'type' => 'url',
            'section' => 'shop_by_sport', // Add a default or your own section
            'label' => __( 'Url N°4',  'brc_shop_by_sport'),
            'description' => __( 'url input for sport box n°4'),
            'input_attrs' => array(
            'placeholder' => __( get_home_url() . '/sport/men/jogging-Clothes' ),
            ),
            'priority'  => 11
    ));

    //Sport Box Image n°4
    $wp_customize->add_setting('sport_box_image_4', array(
        'default'   => get_bloginfo('template_directory') . '/images/man_running.jpg',
        'type'      => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'sport_box_image_4', array(
        'label'   => __('Image N°4', 'brc_shop_by_sport'),
        'section' => 'shop_by_sport',
        'settings' => 'sport_box_image_4',
        'priority'  => 12
    )));      

    function Shop_by_sport_sanitize_url( $url ) {
        return esc_url_raw( $url );
    }
}

add_action('customize_register', 'brc_customize_shop_by_sport');
