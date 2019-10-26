<?php
function brc_contact_form( $atts, $content = null ){

    //[contact_form]

    $atts= shortcode_atts(
        array(),
        $atts,
        'contact_form'
    );

    ob_start();
    include 'templates/contact-form.php';

    return ob_get_clean();
    
}

add_shortcode( 'contact_form', 'brc_contact_form' );

function brc_faq_page( $atts, $content = null ){

    //[faq_page]

    $atts= shortcode_atts(
        array(),
        $atts,
        'faq_page'
    );

    ob_start();
    include 'templates/faq-page.php';

    return ob_get_clean();
    
}

add_shortcode( 'faq_page', 'brc_faq_page' );