<?php

/* 

@package brightcapella

    =========================
            ADMIN PAGE
    ========================= 

*/

function brc_add_admin_page(){
    //Add BrightCapella Admin Page
    add_menu_page('BrightCapella Theme Options', 'BrightCapella', 'manage_options', 'brightcapella', 'brc_theme_create_page', get_template_directory_uri() . '/images/icons/favicon.png',  110 );

    //Add BrightCapella  Sub Pages

    //Add BrightCapella Settings/General/Home Sub-Page
    add_submenu_page( 'brightcapella', 'BrightCapella Theme Options', 'General', 'manage_options', 'brightcapella', 'brc_theme_create_page' );

    //Add BrightCapella Contact Form
    add_submenu_page( 'brightcapella', 'BrightCapella Contact Form', 'Contact Form', 'manage_options', 'brc_theme_contact', 'brc_theme_contact_form_page' );

    //Add BrightCapella Contact Form
    add_submenu_page( 'brightcapella', 'BrightCapella FAQ Page', 'FAQ Page', 'manage_options', 'brc_theme_faq', 'brc_theme_faq_page' );

}
add_action( 'admin_menu', 'brc_add_admin_page' );

function brc_custom_settings(){
    //Contact Form Options
    register_setting('brc-contact-options', 'activate_contact');

    //Add section
    add_settings_section( 'brc-contact-section', 'Contact Form', 'brc_contact_section', 'brightcapella' );

    //add custom Field
    add_settings_field( 'activate-form', 'Activate Contact Form', 'brc_activate_contact', 'brightcapella', 'brc-contact-section' );

    //FAQS Activate Seeting
    register_setting('brc-faq-options', 'activate_faq');

    //Add section
    add_settings_section( 'brc-faq-section', 'FAQ Page', 'brc_faq_section', 'brightcapella_faq' );
    
    //add custom Field
    add_settings_field( 'activate-faq', 'Activate Faq Page', 'brc_activate_faq', 'brightcapella_faq', 'brc-faq-section' );

}
add_action( 'admin_init', 'brc_custom_settings' );

//Genral Page function for adding template
function brc_theme_create_page(){
    //generation of admin page
    require_once( get_template_directory() . '/inc/templates/brc-setting-admin.php');
}

//Contact Form Page function for adding template
function brc_theme_contact_form_page(){
    //Add Contact Form Setting Page
    require_once( get_template_directory() . '/inc/templates/brc-contact-form.php');
}

//Contact Form section function
function brc_contact_section(){
    //echo Title of the section
    echo 'Activate and Deactivate The Built-in Contact Form';
}

//Contact Form Fields function
function brc_activate_contact(){
    $options = get_option( 'activate_contact' );
    $checked = ( @$options == 1 ? 'checked' : '' );
    echo '<label><input type="checkbox" id="custom_contact_header" name="activate_contact" value="1" ' .$checked. ' /></label>';
}

//FAQ Page function for adding template
function brc_theme_faq_page(){
    //Add Contact Form Setting Page
    require_once( get_template_directory() . '/inc/templates/brc-faq-page.php');
}

//FAQ section function
function brc_faq_section(){
    //echo Title of the section
    echo 'Activate and Deactivate The Built-in FAQ Page';
}

//FAQ Fields function
function brc_activate_faq(){
    $options = get_option( 'activate_faq' );
    $checked = ( @$options == 1 ? 'checked' : '' );
    echo '<label><input type="checkbox" id="custom_faq_header" name="activate_faq" value="1" ' .$checked. ' /></label>';
}

// Update CSS within in Admin
function admin_style() {
    wp_enqueue_style('brc-admin-styles', get_template_directory_uri().'/css/brc_admin.css', array(), '1.0.0', 'all');
}
add_action('admin_enqueue_scripts', 'admin_style');