<?php
function bc_customize_TopNavigation_register($wp_customize){
    //Top Navigation Section
    $wp_customize->add_section('TopNavigation', array(
        'title'   => __('Top Navigation', 'bc_TopNavigation'),
        'description' => sprintf(__('Options for Top Navigation','bc_TopNavigation')),
        'priority'    => 130
    ));
    
    //Background-color
        $wp_customize->add_setting('TopNavigation_BackgroundColor', array(
            'default'   => '#212121',
            'type'      => 'theme_mod'
    ));
        
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'TopNavigation_BackgroundColor', array(
            'label'      => __( 'Background Color', 'bc_TopNavigation' ),
            'section'    => 'TopNavigation',
            'settings'   => 'TopNavigation_BackgroundColor',
            'priority'  => 5
    )));

}
add_action('customize_register', 'bc_customize_TopNavigation_register');


//Add Style To Top Navgiation For The Front Page
function bc_top_navigation_customize_css(){
        ?>
         <style type="text/css">
                #navigation_bar{
                    top: 0;
                    left: 0;
                    box-shadow: 0 6px 10px 4px #00000040;
                    background-color: <?php echo get_theme_mod('TopNavigation_BackgroundColor', '#212121'); ?>;
                    z-index: 88888;
                    min-width: 300px;
                }
                #navigation_bar .navbar-nav .dropdown-menu{
                    background-color: <?php echo get_theme_mod('TopNavigation_BackgroundColor', '#212121'); ?>;
                }
         </style>
    <?php
}
add_action( 'wp_head', 'bc_top_navigation_customize_css');


//Add css To Body or Top Navigation if Admin Bar is showing
function bc_body_class(){
    if(is_admin_bar_showing()){
     ?>   
        <style type="text/css">
            #navigation_bar, .admin-bar{
                top: 32px;
            }

            @media screen and (max-width: 783px) {
                #navigation_bar, .admin-bar {
                    top: 46px;
                }
            }

            @media screen and (max-width: 600px){
                #navigation_bar{
                    top: 0;
                }
                .admin-bar{
                    top: 0;
                    padding-top: 46px
                }
            }

        </style>
    <?php
    }
}
add_action('wp_head', 'bc_body_class');