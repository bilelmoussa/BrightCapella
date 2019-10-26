<?php 
function brc_customize_shop_by_category($wp_customize){
    //Shop By Category Section
    $wp_customize->add_section('shop_by_category', array(
        'title'   => __('Shop By Category', 'brc_shop_by_category'),
        'description' => sprintf(__('Options for Shop By Category', 'brc_shop_by_category')),
        'priority'    => 150
    ));

    //Category Box Title n°1
    $wp_customize->add_setting('shop_box_title_1', array(
        'default'   => _x('Men', 'brc_shop_by_category'),
        'type'      => 'theme_mod'
      ));
    
    $wp_customize->add_control('shop_box_title_1', array(
        'label'   => __('Title N°1', 'brc_shop_by_category'),
        'section' => 'shop_by_category',
        'priority'  => 1
    ));

    //Category Box url n°1
    $wp_customize->add_setting( 'shop_box_url_1', array(
        'default'    => __( get_home_url() . '/men/' ),
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'Shop_by_category_sanitize_url',
    ));
      
    $wp_customize->add_control( 'shop_box_url_1', array(
        'type' => 'url',
            'section' => 'shop_by_category', 
            'label' => __( 'Url N°1',  'brc_shop_by_category'),
            'description' => __( 'url input for category box n°1'),
            'input_attrs' => array(
              'placeholder' => __( get_home_url() . '/men/' ),
            ),
            'priority'  => 2
    ));

    //Category Box Image n°1
    $wp_customize->add_setting('shop_box_image_1', array(
        'default'   => get_bloginfo('template_directory').'/images/men.jpg',
        'type'      => 'theme_mod'
    ));
      
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'shop_box_image_1', array(
        'label'   => __('Image N°1', 'brc_shop_by_category'),
        'section' => 'shop_by_category',
        'settings' => 'shop_box_image_1',
        'priority'  => 3
    )));    

    //Category Box Title n°2
    $wp_customize->add_setting('shop_box_title_2', array(
        'default'   => _x('Women', 'brc_shop_by_category'),
        'type'      => 'theme_mod'
      ));
    
    $wp_customize->add_control('shop_box_title_2', array(
        'label'   => __('Title N°2', 'brc_shop_by_category'),
        'section' => 'shop_by_category',
        'priority'  => 4
    ));

    //Category Box url n°2
    $wp_customize->add_setting( 'shop_box_url_2', array(
        'default'    => __( get_home_url() . '/women/' ),
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'Shop_by_category_sanitize_url',
    ));
      
    $wp_customize->add_control( 'shop_box_url_2', array(
        'type' => 'url',
            'section' => 'shop_by_category', // Add a default or your own section
            'label' => __( 'Url N°2',  'brc_shop_by_category'),
            'description' => __( 'url input for category box n°2'),
            'input_attrs' => array(
              'placeholder' => __( get_home_url() . '/women/' ),
            ),
            'priority'  => 5
    ));

    //Category Box Image n°2
    $wp_customize->add_setting('shop_box_image_2', array(
        'default'   => get_bloginfo('template_directory').'/images/women.jpg',
        'type'      => 'theme_mod'
    ));
      
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'shop_box_image_2', array(
        'label'   => __('Image N°2', 'brc_shop_by_category'),
        'section' => 'shop_by_category',
        'settings' => 'shop_box_image_2',
        'priority'  => 6
    ))); 

    //Category Box Title n°3
    $wp_customize->add_setting('shop_box_title_3', array(
        'default'   => _x('Kids', 'brc_shop_by_category'),
        'type'      => 'theme_mod'
      ));
    
    $wp_customize->add_control('shop_box_title_3', array(
        'label'   => __('Title N°3', 'brc_shop_by_category'),
        'section' => 'shop_by_category',
        'priority'  => 7
    ));

    //Category Box url n°3
    $wp_customize->add_setting( 'shop_box_url_3', array(
        'default'    => __( get_home_url() . '/kids/' ),
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'Shop_by_category_sanitize_url',
    ));
      
    $wp_customize->add_control( 'shop_box_url_3', array(
        'type' => 'url',
            'section' => 'shop_by_category', // Add a default or your own section
            'label' => __( 'Url N°3',  'brc_shop_by_category'),
            'description' => __( 'url input for category box n°3'),
            'input_attrs' => array(
              'placeholder' => __( get_home_url() . '/Kids/' ),
            ),
            'priority'  => 8
    ));

    //Category Box Image n°3
    $wp_customize->add_setting('shop_box_image_3', array(
        'default'   => get_bloginfo('template_directory').'/images/kids.jpg',
        'type'      => 'theme_mod'
    ));
      
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'shop_box_image_3', array(
        'label'   => __('Image N°3', 'brc_shop_by_category'),
        'section' => 'shop_by_category',
        'settings' => 'shop_box_image_3',
        'priority'  => 9
    ))); 
    
    //Category Box Title n°4
    $wp_customize->add_setting('shop_box_title_4', array(
        'default'   => _x('On Sale', 'brc_shop_by_category'),
        'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('shop_box_title_4', array(
        'label'   => __('Title N°4', 'brc_shop_by_category'),
        'section' => 'shop_by_category',
        'priority'  => 10
    ));

    //Category Box url n°4
    $wp_customize->add_setting( 'shop_box_url_4', array(
        'default'    => __( get_home_url() . '/on-sale/' ),
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'Shop_by_category_sanitize_url',
    ));
    
    $wp_customize->add_control( 'shop_box_url_4', array(
        'type' => 'url',
            'section' => 'shop_by_category', // Add a default or your own section
            'label' => __( 'Url N°4',  'brc_shop_by_category'),
            'description' => __( 'url input for category box n°4'),
            'input_attrs' => array(
            'placeholder' => __( get_home_url() . '/on-sale/' ),
            ),
            'priority'  => 11
    ));

    //Category Box Image n°4
    $wp_customize->add_setting('shop_box_image_4', array(
        'default'   => get_bloginfo('template_directory').'/images/onsale.jpg',
        'type'      => 'theme_mod'
    ));
    
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'shop_box_image_4', array(
        'label'   => __('Image N°4', 'brc_shop_by_category'),
        'section' => 'shop_by_category',
        'settings' => 'shop_box_image_4',
        'priority'  => 12
)));     

    function Shop_by_category_sanitize_url( $url ) {
        return esc_url_raw( $url );
    }

}    

add_action('customize_register', 'brc_customize_shop_by_category');
