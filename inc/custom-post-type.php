<?php

/* 

@package brightcapella

    ==================================================
            THEME CUSTOM POST TYPE PAGE
    ================================================== 

*/

$contact = get_option('activate_contact');
if( @$contact == 1 ){
    // Register Message POST
    add_action( 'init', 'brc_contact_custom_post_type' );

    //Add new Columns for POST Message
    add_filter( 'manage_brc-contact_posts_columns', 'brc_set_contact_columns' );

    //Add new action
    add_action( 'manage_brc-contact_posts_custom_column', 'brc_set_custom_column', 10, 2 );

    add_action( 'add_meta_boxes', 'brc_contact_add_meta_box' );
    add_action( 'save_post' , 'brc_save_contact_email_data' );

}

/* CONTACT CPT */
function brc_contact_custom_post_type(){
    $labels= array(
        'name'                  => 'Messages',
        'singular_name'         => 'Message',
        'menu_name'             => 'Messages',
        'name_admin_bar'        => 'Message', 
    );

    $args = array(
        'labels'                => $labels,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'capability_type'       => 'post',
        'hierarchical'          => false,
        'menu_position'         => 26,
        'menu_icon'             => 'dashicons-email-alt',
        'supports'              => array( 'title', 'editor', 'author' )  
    );

    register_post_type( 'brc-contact', $args );
}

function brc_set_contact_columns( $columns ){
    $newColumns = array();
    $newColumns['title'] = 'Full Name';
    $newColumns['message'] = 'Message';
    $newColumns['email'] = 'Email';
    $newColumns['date'] = 'Date';

    return $newColumns;
}

function brc_set_custom_column( $column, $post_id ){

    switch( $column ){

        case 'message' :   
            echo get_the_excerpt();
            break;

        case 'email' :
            $email = get_post_meta( $post_id, '_contact_email_value_key', true );
            echo $email;
            break;  

    }
}

/* CONTACT META BOXES */

function brc_contact_add_meta_box(){
    add_meta_box( 'contact_email', 'User Email', 'brc_contact_email_callback', 'brc-contact', 'side');
}

function brc_contact_email_callback( $post ){
    wp_nonce_field( 'brc_save_contact_email_data', 'brc_contact_email_meta_box_nonce' );

    $value = get_post_meta( $post->ID, '_contact_email_value_key', true );

    echo '<label for="brc_contact_email_field">User Email Adress</label>';
    echo '<input type="email" id="brc_email_filed" name="brc_contact_email_field" value="' . esc_attr( $value ) . '" size="25" /> ';
}

function brc_save_contact_email_data( $post_id ){

    if( ! isset( $_POST['brc_contact_email_meta_box_nonce']) ){
        return;
    }
    if( ! wp_verify_nonce( $_POST['brc_contact_email_meta_box_nonce'], 'brc_save_contact_email_data' ) ){
        return;
    }
    if( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ){
        return;
    }
    if( ! current_user_can( 'edit_post', $post_id ) ){
        return;
    }
    if( ! isset( $_POST['brc_contact_email_field']) ){
        return;
    }

    $my_data = sanitize_text_field( $_POST['brc_contact_email_field'] );

    update_post_meta( $post_id, '_contact_email_value_key', $my_data );

}


//FAQ PAGE

$faq = get_option('activate_faq');
if( @$faq == 1 ){
    // Register Message POST
    add_action( 'init', 'brc_faq_custom_post_type' );

    //Add new Columns for POST Message
    add_filter( 'manage_brc-faq_posts_columns', 'brc_set_faq_columns' );

    //Add new action
    add_action( 'manage_brc-faq_posts_custom_column', 'brc_set_custom_column_faq', 10, 2 );

   // add_action( 'add_meta_boxes', 'brc_contact_add_meta_box' );
    //add_action( 'save_post' , 'brc_save_contact_email_data' );

}

/* FAQ CPT */
function brc_faq_custom_post_type(){
    $labels= array(
        'name'                  => 'Faqs',
        'singular_name'         => 'Faq',
        'menu_name'             => 'Faqs',
        'name_admin_bar'        => 'Faq', 
    );

    $args = array(
        'labels'                => $labels,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'capability_type'       => 'post',
        'hierarchical'          => false,
        'menu_position'         => 27,
        'menu_icon'             => 'dashicons-editor-help',
        'supports'              => array( 'title', 'editor', 'author' )  
    );
    

    register_post_type( 'brc-faq', $args );
}

function brc_set_faq_columns( $columns ){
    $newColumns = array();
    $newColumns['title'] = 'Question';
    $newColumns['message'] = 'Response';
    $newColumns['date'] = 'Date';

    return $newColumns;
}

function brc_set_custom_column_faq( $column ){

    switch( $column ){

        case 'message' :   
            echo get_the_excerpt();
            break;

    }
}