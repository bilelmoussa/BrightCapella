<?php 
/* 

@package brightcapella

    ==============================
            CONTACT FORM TEMPLATE PAGE
    ============================== 

*/

?>
<h1>BrightCapella Contact Form</h1>
<?php settings_errors( ); ?>


<p>Use This <strong>shortcode </strong>to activate the Contact Form inside a Page or a Post</p>
<p><code>[contact_form]</code></p>


<form method="post" action="options.php" class="brc-contact-form">
    <?php settings_fields( 'brc-contact-options' ); ?>
    <?php do_settings_sections( 'brightcapella' );?>
    <?php submit_button(); ?>
</form>