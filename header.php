<?php 
/* 

@package brightcapella

    =========================
            HEADER PAGE
    ========================= 

*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description');?>">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.ico" />

    <title>
        <?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
    </title>
    <?php wp_head(); ?>
</head>

<body <?php body_class( "bc_body" ) ?>>

    <!-- Header -->
    <header id="header_top_nav" class="d-flex flex-row justify-content-between align-items-center">

            <!-- Website PhoneNumber -->
            <p class="text-secondary ml-2 text-capitalize" style="font-size: 14px">Need Help? Call Us On <?php echo get_theme_mod('phone_number_setting', 'Add Your Phone Number Please !'); ?> </p>

            <?php 
                if (function_exists( 'the_custom_logo' ) ) {
            ?>
                <!-- Logo -->
                <div id="Nav_Website_Logo" class="">
                
                <?php        
                    the_custom_logo();
                ?>
                </div>
            <?php        
                }else{ 
            ?> 
                <!-- Website Title -->
                <a class="SiteTitle mb-1" href="<?php echo get_home_url();  ?>"><?php bloginfo('name'); ?></a>
            <?php }
            ?> 

            <!-- Shop Links -->       
            <nav class="nav mt-2 mb-2 px-3 show_md">
                <a class="text-secondary mr-4 text-uppercase" href="<?php echo get_home_url(); ?>/my-account/"><i class="fas fa-user" aria-hidden="true"></i></i>&nbsp;Account</a>
                <a class="text-secondary mr-4 text-uppercase" href="<?php echo get_home_url(); ?>/cart/"><i class="fas fa-shopping-cart fa-lg" aria-hidden="true"></i>&nbsp;Cart</a>
            </nav>

    </header>

    <!-- Navbar -->
    <nav id="navigation_bar" class="navbar sticky-top navbar-expand-md navbar-dark">
            <div style="position: relative;" class="container-fluid p-2">

                <?php 
                    if (function_exists( 'the_custom_logo' ) ) {
                ?>
                        <!-- Logo -->
                        <div id="Nav_Website_Logo_2" class="">
                    
                            <?php        
                                the_custom_logo();
                            ?>

                        </div> 
                <?php } ?>  
                
                <!-- Collapse -->
                <button class="navbar-toggler mr-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Website Title -->   
                <a class="mr-auto ml-auto mt-2 pb-2 hidden_md MobileWebsiteTitle" href="<?php echo get_home_url();  ?>"><?php bloginfo('name'); ?></a> 

                <!-- Shop Links --> 
                <nav class="nav ml-auto hidden_md">  
                    <a class="text-light mr-2 text-uppercase" href="<?php echo get_home_url(); ?>/my-account/"><i class="fas fa-user fa-lg" aria-hidden="true"></i></i>&nbsp;</a>
                    <a class="text-light mr-2 text-uppercase" href="<?php echo get_home_url(); ?>/cart/"><i class="fas fa-shopping-cart fa-lg" aria-hidden="true"></i>&nbsp;</a>
                </nav>  

                <!-- Links -->
                <?php
                    wp_nav_menu( array(
                        'theme_location'  => 'primary',
                        'depth'	          => 3, // 1 = no dropdowns, 2 = with dropdowns.
                        'container'       => 'div',
                        'container_class' => 'collapse navbar-collapse',
                        'container_id'    => 'navbarSupportedContent',
                        'menu_class'      => 'navbar-nav ml-auto mr-auto',
                        'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'          => new WP_Bootstrap_Navwalker(),
                    ) );
                ?>

                <!-- Shop Links --> 
                <nav id="shop_links" class="nav ml-auto">  
                    <a class="text-light mr-2 text-uppercase" href="<?php echo get_home_url(); ?>/my-account/"><i class="fas fa-user fa-lg" aria-hidden="true"></i></i>&nbsp;</a>
                    <a class="text-light mr-2 text-uppercase" href="<?php echo get_home_url(); ?>/cart/"><i class="fas fa-shopping-cart fa-lg" aria-hidden="true"></i>&nbsp;</a>
                </nav> 

            </div>
    </nav>


  