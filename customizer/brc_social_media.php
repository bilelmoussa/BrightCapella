<?php
function brc_customize_footer_social_media($wp_customize){
    //Footer Social Media Section
    $wp_customize->add_section('footer_social_media', array(
        'title'   => __('Footer Social Media', 'brc_footer_social_media'),
        'description' => sprintf(__('Options for Footer Social Media', 'brc_footer_social_media')),
        'priority'    => 180
    ));
    
    //Facebook url
    $wp_customize->add_setting( 'facebook_url', array(
        'default'    => __( 'https://www.facebook.com' ),
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'social_media_sanitize_url',
    ));

    $wp_customize->add_control( 'facebook_url', array(
        'type' => 'url',
            'section' => 'footer_social_media', // Add a default or your own section
            'label' => __( 'Facebook url',  'brc_footer_social_media'),
            'description' => __( 'url input for facebook'),
            'input_attrs' => array(
            'placeholder' => __( 'https://www.facebook.com' ),
            ),
            'priority'  => 1
    ));

    //Instagram url
    $wp_customize->add_setting( 'instagram_url', array(
        'default'    => __( 'https://www.instagram.com' ),
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'social_media_sanitize_url',
    ));

    $wp_customize->add_control( 'instagram_url', array(
        'type' => 'url',
            'section' => 'footer_social_media', // Add a default or your own section
            'label' => __( 'Instargam url',  'brc_footer_social_media'),
            'description' => __( 'url input for instagram'),
            'input_attrs' => array(
            'placeholder' => __( 'https://www.instagram.com' ),
            ),
            'priority'  => 2
    ));

    //Twitter url
    $wp_customize->add_setting( 'twitter_url', array(
        'default'    => __( 'https://twitter.com' ),
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'social_media_sanitize_url',
    ));

    $wp_customize->add_control( 'twitter_url', array(
        'type' => 'url',
            'section' => 'footer_social_media', // Add a default or your own section
            'label' => __( 'Twitter url',  'brc_footer_social_media'),
            'description' => __( 'url input for twitter'),
            'input_attrs' => array(
            'placeholder' => __( 'https://twitter.com' ),
            ),
            'priority'  => 3
    ));     

    
    function social_media_sanitize_url( $url ) {
        return esc_url_raw( $url );
    }

}

add_action('customize_register', 'brc_customize_footer_social_media');
