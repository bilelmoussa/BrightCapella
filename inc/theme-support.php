<?php
/* 

@package brightcapella

    =====================================
            THEME SUPPORT FUNCTIONS 
    ===================================== 

*/

// Add Support For Woocommerce
function brc_add_woocommerce_support() {
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'brc_add_woocommerce_support' );
remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );


function brc_theme_setup() {
    //Add Navigation menu options
	register_nav_menu('primary', 'Primary Header Navigation');
    register_nav_menu('secondary', 'Footer Navigation');

    //Add Custom Logo
    add_theme_support( 'custom-logo' );
    
    //Add Post-Thumbnails
    add_theme_support( 'post-thumbnails' );
    
    //Add support for menu
    add_theme_support('menus');

    //Add support for Post-formats
    add_theme_support( 'post-formats' );

}
add_action('init', 'brc_theme_setup');


function brc_widgets_init() {
	register_sidebar( array(
		'name'          => 'shop sidebar',
        'id'            => 'brc_shop',
        'before_widget' => '<div id="%1$s" class="theme_widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="rounded">',
        'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'brc_widgets_init' );

//Mail Trap

function mailtrap($phpmailer) {
    $phpmailer->isSMTP();
    $phpmailer->Host = 'smtp.mailtrap.io';
    $phpmailer->SMTPAuth = true;
    $phpmailer->Port = 2525;
    $phpmailer->Username = '74553c4a1c51a3';
    $phpmailer->Password = '77aba7db2e0c78';
}
//add_action('phpmailer_init', 'mailtrap');