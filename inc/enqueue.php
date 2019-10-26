<?php
//Load Scripts
function bright_capella_script_enqueue() {
    //Add  jQuery 
    wp_enqueue_script( 'jquery' );

    //Add popperjs 
    wp_enqueue_script('popperJS', get_template_directory_uri() . '/js/popper.min.js', array(), '1.0.0', true);

    //Slick
    wp_enqueue_script('slick', get_template_directory_uri() . '/slick/slick.min.js', array(), '1.8.1', true);
    wp_enqueue_style('slick-style', get_template_directory_uri() . '/slick/slick.css', array(), '1.8.1', 'all');
    wp_enqueue_style('slick-theme', get_template_directory_uri() . '/slick/slick-theme.css', array(), '1.8.1', 'all');

    //Add tooltipjs 
    wp_enqueue_script('tooltipJS', get_template_directory_uri() . '/js/tooltip.min.js', array(), '1.0.0', true);

    //Add Font Awesome 
    wp_enqueue_style( 'Font_Awesome', get_template_directory_uri() . '/fontawesome/css/all.min.css', array(), false);

    //Add Font Family 
    wp_enqueue_style('Font_Orbitron', 'https://fonts.googleapis.com/css?family=Orbitron&display=swap', array(), false);

    //Add Material-ui icons
    wp_enqueue_style( 'Material-ui  icons', 'https://fonts.googleapis.com/icon?family=Material+Icons', array(), '1.0.0', 'all' );

    //Add Bootstrap css
    wp_enqueue_style('BootstrapStyle', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '4.3.1', 'all');

    //Add Bootstrap js
    wp_enqueue_script('BootstrapJS', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '4.3.1', true);

    //Add custom js and css
    wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/brightcapella.css', array(), '1.0.0', 'all');
    wp_enqueue_script('customjs', get_template_directory_uri() . '/js/brightcapella.js', array(), '1.0.0', true);   
}

add_action( 'wp_enqueue_scripts', 'bright_capella_script_enqueue');