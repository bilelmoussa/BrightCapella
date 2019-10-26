<?php

/* 

@package brightcapella

    =========================
            AJAX FUNCTIONS 
    ========================= 

*/

add_action( 'wp_ajax_nopriv_brc_save_user_contact_form', 'brc_save_contact' );
add_action( 'wp_ajax_brc_save_user_contact_form', 'brc_save_contact' );

function brc_save_contact(){

    $title = wp_strip_all_tags($_POST['name']);
    $email = wp_strip_all_tags($_POST['email']);
    $message = wp_strip_all_tags($_POST['message']);

    $args = array(
        'post_title'        => $title,
        'post_content'      => $message,
        'post_author'       => 1,
        'post_status'       => 'publish',
        'post_type'         => 'brc-contact',
        'meta_input'        => array(
            '_contact_email_value_key' => $email
        )
    );
    
    $postID = wp_insert_post( $args );



    if($postID !== 0){

        $to = get_bloginfo('admin_email');
        $subject = 'BrightCapella Contact Form - ' . $title;
    
        $headers[] = 'From: ' . get_bloginfo('name') . ' <' . $to . '>';
        $headers[] = 'Reply-To: ' . $title .' <' . $email . '>';
        $headers[] = "MIME-Version: 1.0" . "\r\n";
        $headers[] = "Content-type: text/html; charset=".get_bloginfo('charset')."" . "\r\n";

        wp_mail( $to, $subject, $message, $headers );

        echo $postID; 

    }

    


    die();

}