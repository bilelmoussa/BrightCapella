<?php   
function brc_customize_shop_by_brand($wp_customize){
    //Shop By Brand Section
    $wp_customize->add_section('shop_by_brand', array(
        'title'   => __('Shop By Brand', 'brc_shop_by_brand'),
        'description' => sprintf(__('Options for Shop By Brand', 'brc_shop_by_brand')),
        'priority'    => 160
    ));

    //Brand Box Title n°1
    $wp_customize->add_setting('brand_box_title_1', array(
        'default'   => _x('nike', 'brc_shop_by_brand'),
        'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('brand_box_title_1', array(
        'label'   => __('Title N°1', 'brc_shop_by_brand'),
        'section' => 'shop_by_brand',
        'priority'  => 1
    ));

    //Brand Box url n°1
    $wp_customize->add_setting( 'brand_box_url_1', array(
        'default'    => __( get_home_url() . '/nike/' ),
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'Shop_by_brand_sanitize_url',
    ));
    
    $wp_customize->add_control( 'brand_box_url_1', array(
        'type' => 'url',
            'section' => 'shop_by_brand', 
            'label' => __( 'Url N°1',  'brc_shop_by_brand'),
            'description' => __( 'url input for brand box n°1'),
            'input_attrs' => array(
            'placeholder' => __( get_home_url() . '/nike/' ),
            ),
            'priority'  => 2
    ));    

    //Brand Box Image n°1
    $wp_customize->add_setting('brand_box_image_1', array(
        'default'   => get_bloginfo('template_directory') . '/images/nike.png',
        'type'      => 'theme_mod'
    ));
      
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'brand_box_image_1', array(
        'label'   => __('Image N°1', 'brc_shop_by_brand'),
        'section' => 'shop_by_brand',
        'settings' => 'brand_box_image_1',
        'priority'  => 3
    )));


    //Brand Box Title n°2
    $wp_customize->add_setting('brand_box_title_2', array(
        'default'   => _x('adidas', 'brc_shop_by_brand'),
        'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('brand_box_title_2', array(
        'label'   => __('Title N°2', 'brc_shop_by_brand'),
        'section' => 'shop_by_brand',
        'priority'  => 4
    ));

    //Brand Box url n°2
    $wp_customize->add_setting( 'brand_box_url_2', array(
        'default'    => __( get_home_url() . '/adidas/' ),
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'Shop_by_brand_sanitize_url',
    ));
    
    $wp_customize->add_control( 'brand_box_url_2', array(
        'type' => 'url',
            'section' => 'shop_by_brand', // Add a default or your own section
            'label' => __( 'Url N°2',  'brc_shop_by_brand'),
            'description' => __( 'url input for brand box n°2'),
            'input_attrs' => array(
            'placeholder' => __( get_home_url() . '/adidas/' ),
            ),
            'priority'  => 5
    ));    

    //Brand Box Image n°2
    $wp_customize->add_setting('brand_box_image_2', array(
        'default'   => get_bloginfo('template_directory').'/images/adidas.png',
        'type'      => 'theme_mod'
    ));
      
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'brand_box_image_2', array(
        'label'   => __('Image N°2', 'brc_shop_by_brand'),
        'section' => 'shop_by_brand',
        'settings' => 'brand_box_image_2',
        'priority'  => 6
    )));

    //Brand Box Title n°3
    $wp_customize->add_setting('brand_box_title_3', array(
        'default'   => _x('zara', 'brc_shop_by_brand'),
        'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('brand_box_title_3', array(
        'label'   => __('Title N°3', 'brc_shop_by_brand'),
        'section' => 'shop_by_brand',
        'priority'  => 7
    ));

    //Brand Box url n°3
    $wp_customize->add_setting( 'brand_box_url_3', array(
        'default'    => __( get_home_url() . '/zara/' ),
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'Shop_by_brand_sanitize_url',
    ));
    
    $wp_customize->add_control( 'brand_box_url_3', array(
        'type' => 'url',
            'section' => 'shop_by_brand', // Add a default or your own section
            'label' => __( 'Url N°3',  'brc_shop_by_brand'),
            'description' => __( 'url input for brand box n°3'),
            'input_attrs' => array(
            'placeholder' => __( get_home_url() . '/zara/' ),
            ),
            'priority'  => 8
    ));    

    //Brand Box Image n°3
    $wp_customize->add_setting('brand_box_image_3', array(
        'default'   => get_bloginfo('template_directory').'/images/zara.png',
        'type'      => 'theme_mod'
    ));
      
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'brand_box_image_3', array(
        'label'   => __('Image N°3', 'brc_shop_by_brand'),
        'section' => 'shop_by_brand',
        'settings' => 'brand_box_image_3',
        'priority'  => 9
    )));    

    //Brand Box Title n°4
    $wp_customize->add_setting('brand_box_title_4', array(
        'default'   => _x('giorgio armani', 'brc_shop_by_brand'),
        'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('brand_box_title_4', array(
        'label'   => __('Title N°4', 'brc_shop_by_brand'),
        'section' => 'shop_by_brand',
        'priority'  => 10
    ));

    //Brand Box url n°4
    $wp_customize->add_setting( 'brand_box_url_4', array(
        'default'    => __( get_home_url() . '/giorgio-armani/' ),
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'Shop_by_brand_sanitize_url',
    ));
    
    $wp_customize->add_control( 'brand_box_url_4', array(
        'type' => 'url',
            'section' => 'shop_by_brand', // Add a default or your own section
            'label' => __( 'Url N°4',  'brc_shop_by_brand'),
            'description' => __( 'url input for brand box n°4'),
            'input_attrs' => array(
            'placeholder' => __( get_home_url() . '/giorgio-armani/' ),
            ),
            'priority'  => 11
    ));    

    //Brand Box Image n°4
    $wp_customize->add_setting('brand_box_image_4', array(
        'default'   => get_bloginfo('template_directory').'/images/armani.png',
        'type'      => 'theme_mod'
    ));
      
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'brand_box_image_4', array(
        'label'   => __('Image N°4', 'brc_shop_by_brand'),
        'section' => 'shop_by_brand',
        'settings' => 'brand_box_image_4',
        'priority'  => 12
    )));    
    
    
    function Shop_by_brand_sanitize_url( $url ) {
        return esc_url_raw( $url );
    }
}

add_action('customize_register', 'brc_customize_shop_by_brand');
