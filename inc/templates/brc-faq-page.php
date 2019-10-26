<?php 
/* 

@package brightcapella

    ==============================
            FAQ TEMPLATE PAGE
    ============================== 

*/

?>
<h1>BrightCapella FAQ Options</h1>
<?php settings_errors( ); ?>


<p>Use This <strong>shortcode </strong>to activate the FAQ inside a Page or a Post</p>
<p><code>[faq_page]</code></p>


<form method="post" action="options.php" class="brc-faq-page">
    <?php settings_fields( 'brc-faq-options' ); ?>
    <?php do_settings_sections( 'brightcapella_faq' );?>
    <?php submit_button(); ?>
</form>