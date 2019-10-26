<?php 
/* 

@package brightcapella

    =========================
            Footer PAGE
    ========================= 

*/
?>
<footer id="brc_footer" class="d-flex flex-column">

<?php 
    wp_nav_menu( array(
        'theme_location'  => 'secondary',
        'depth'	          => 1, // 1 = no dropdowns, 2 = with dropdowns.
        'container'       => 'div',
        'container_class' => 'navbar-collapse p-4',
        'container_id'    => 'Footer_nav',
        'menu_class'      => 'd-flex flex-sm-row justify-content-center align-content-center flex-wrap navbar-nav ml-auto mr-auto',
        'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
        'walker'          => new WP_Bootstrap_Navwalker(),
    ) );
?>

<div id="brc_footer_social_media" class="d-flex flex-column my-3 justify-content-center align-items-center">
     <p class="text-white text-uppercase brc_social_media_title">social media</p>
     <div class="d-flex flex-column justify-content-start align-items-start flex-wrap">

        <a href="<?php echo get_theme_mod( 'facebook_url', 'https://www.facebook.com/'); ?>" target="_blank" class="d-flex flex-row  my-2 justify-content-around align-items-center brc_social_media_link text-white">
            <i class="fab fa-facebook fa-lg"></i>
            <p class="text-capitalize ml-3 brc_social_media_item">facebook</p>
        </a>

        <a href="<?php echo get_theme_mod( 'instagram_url', 'https://www.instagram.com/' ); ?>" target="_blank" class="d-flex flex-row  my-2 justify-content-around align-items-center brc_social_media_link text-white">
            <i class="fab fa-instagram fa-lg"></i>
            <p class="text-capitalize ml-3 brc_social_media_item">instagram</p>
        </a> 

        <a href="<?php echo get_theme_mod( 'twitter_url', 'https://twitter.com'); ?>" target="_blank" class="d-flex flex-row  my-2 justify-content-around align-items-center brc_social_media_link text-white">
            <i class="fab fa-twitter fa-lg"></i>
            <p class="text-capitalize ml-3 brc_social_media_item">twitter</p>
        </a>

    </div>      
</div>

<div class="d-flex flex-column justify-content-center align-content-center px-4 pt-4">
        <p style="font-size: 13px; letter-spacing: 2px;" class="text-center text-uppercase text-white">
            <?php 
                $permalink = get_home_url();
                $find = array( 'http://', 'https://' );
                $replace = '';
                $output = str_replace( $find, $replace, $permalink );
                echo $output;
            ?>
        </p>
        <p class="text-center text-uppercase text-white">&copy <?php echo date("Y"); ?> <?php echo bloginfo('name'); ?> </p>
</div>

</footer>
<?php wp_footer(); ?>
</body>
</html>