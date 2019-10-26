<?php

function bc_carousel_customize_register($wp_customize){

    // Collapse Section
    $wp_customize->add_section('Carousel', array(
        'title'   => __('Carousel/Slider', 'brc_carousel'),
        'description' => sprintf(__('Options for Carousel','brc_carousel')),
        'priority'    => 140
    ));

    // Collapse Title n°1
    $wp_customize->add_setting('carousel_title_1', array(
      'default'   => _x('Shop', 'brc_carousel'),
      'type'      => 'theme_mod'
    ));
  
    $wp_customize->add_control('carousel_title_1', array(
        'label'   => __('Title N°1', 'brc_carousel'),
        'section' => 'Carousel',
        'priority'  => 1
    ));

    
    // Collapse Description n°1
    $wp_customize->add_setting('carousel_description_1', array(
      'default'   => _x('this is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.', 'brc_carousel'),
      'type'      => 'theme_mod'
    ));
  
    $wp_customize->add_control('carousel_description_1', array(
        'label'   => __('Description N°1', 'brc_carousel'),
        'section' => 'Carousel',
        'priority'  => 2
    ));

    //Collapse image 1
    $wp_customize->add_setting('carousel_image_1', array(
        'default'   => get_bloginfo('template_directory').'/images/carousel_image_1.jpg',
        'type'      => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'carousel_image_1', array(
        'label'   => __('Image N°1', 'brc_carousel'),
        'section' => 'Carousel',
        'settings' => 'carousel_image_1',
        'priority'  => 3
    )));

    //Seeting for collapse url image n°1
    $wp_customize->add_setting( 'themeslug_url_setting_carousel_1', array(
      'default'    => __( get_home_url() . '/shop/' ),
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'themeslug_sanitize_url',
    ));

    //Collapse url n°1
    $wp_customize->add_control( 'themeslug_url_setting_carousel_1', array(
      'type' => 'url',
      'section' => 'Carousel', // Add a default or your own section
      'label' => __( 'Url N°1',  'brc_carousel'),
      'description' => __( 'url input for image n°1'),
      'input_attrs' => array(
        'placeholder' => __( get_home_url() . '/shop/' ),
      ),
      'priority'  => 4
    ));

    // Collapse Title n°2
    $wp_customize->add_setting('carousel_title_2', array(
      'default'   => _x('T-shirts', 'brc_carousel'),
      'type'      => 'theme_mod'
    ));
  
    $wp_customize->add_control('carousel_title_2', array(
        'label'   => __('Title N°2', 'brc_carousel'),
        'section' => 'Carousel',
        'priority'  => 5
    ));

    // Collapse Description n°2
    $wp_customize->add_setting('carousel_description_2', array(
      'default'   => _x('this is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.', 'brc_carousel'),
      'type'      => 'theme_mod'
    ));
  
    $wp_customize->add_control('carousel_description_2', array(
        'label'   => __('Description N°2', 'brc_carousel'),
        'section' => 'Carousel',
        'priority'  => 6
    ));

    //Collapse image 2
    $wp_customize->add_setting('carousel_image_2', array(
        'default'   => get_bloginfo('template_directory').'/images/carousel_image_2.jpg',
        'type'      => 'theme_mod'
    ));
  
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'carousel_image_2', array(
        'label'   => __('Image N°2', 'brc_carousel'),
        'section' => 'Carousel',
        'settings' => 'carousel_image_2',
        'priority'  => 7
    )));

    //Seeting for collapse url image n°2
    $wp_customize->add_setting( 'themeslug_url_setting_carousel_2', array(
      'default'    => __( get_home_url() . '/product-category/clothing/tshirts/' ),
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'themeslug_sanitize_url',
    ));

    //Collapse url image n°2
    $wp_customize->add_control( 'themeslug_url_setting_carousel_2', array(
      'type' => 'url',
      'section' => 'Carousel', // Add a default or your own section
      'label' => __( 'Url N°2',  'brc_carousel'),
      'description' => __( 'url input for image n°2'),
      'input_attrs' => array(
        'placeholder' => __( get_home_url() . '/product-category/clothing/tshirts/' ),
      ),
      'priority'  => 8
    ));    

    // Collapse Title n°3
    $wp_customize->add_setting('carousel_title_3', array(
      'default'   => _x('accessories', 'brc_carousel'),
      'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('carousel_title_3', array(
        'label'   => __('Title N°3', 'brc_carousel'),
        'section' => 'Carousel',
        'priority'  => 9
    ));


    // Collapse Description n°3
    $wp_customize->add_setting('carousel_description_3', array(
      'default'   => _x('this is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.', 'brc_carousel'),
      'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('carousel_description_3', array(
        'label'   => __('Description N°3', 'brc_carousel'),
        'section' => 'Carousel',
        'priority'  => 10
    ));

   
    //Collapse image 3
    $wp_customize->add_setting('carousel_image_3', array(
      'default'   => get_bloginfo('template_directory').'/images/carousel_image_3.jpg',
      'type'      => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'carousel_image_3', array(
        'label'   => __('Image N°3', 'brc_carousel'),
        'section' => 'Carousel',
        'settings' => 'carousel_image_3',
        'priority'  => 11
    )));    
    
    //Seeting for collapse url image n°3
    $wp_customize->add_setting( 'themeslug_url_setting_carousel_3', array(
      'default'    => __( get_home_url() . '/product-category/clothing/accessories/' ),
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'themeslug_sanitize_url',
    ));

    //Collapse url image n°3
    $wp_customize->add_control( 'themeslug_url_setting_carousel_3', array(
      'type' => 'url',
      'section' => 'Carousel', // Add a default or your own section
      'label' => __( 'Url N°3',  'brc_carousel'),
      'description' => __( 'url input for image n°3'),
      'input_attrs' => array(
        'placeholder' => __( get_home_url() . '/product-category/clothing/accessories/' ),
      ),
      'priority'  => 12
    ));
    
    
    function themeslug_sanitize_url( $url ) {
      return esc_url_raw( $url );
    }

}

add_action('customize_register', 'bc_carousel_customize_register');
