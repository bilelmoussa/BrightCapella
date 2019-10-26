<?php

//Clean versions in javascripts and styles
require get_template_directory() . '/inc/cleanup.php';

//Add Theme Admin function 
require get_template_directory() . '/inc/function-admin.php';

//enqueue scripts
require get_template_directory() . '/inc/enqueue.php';

//Add Theme-support
require get_template_directory().'/inc/theme-support.php';

//Custom Post Type
require get_template_directory() . '/inc/custom-post-type.php';

//Shortcode
require get_template_directory() . '/inc/shortcode.php';

//AJAX
require get_template_directory() . '/inc/ajax.php';

//Add Phone Number Customizer
require get_template_directory() . '/customizer/brc_phone_number.php';

//Add Top Navigation Customizer
require get_template_directory() . '/customizer/brc_TopNavigation_customizer.php';

//Add Collapse Customizer
require get_template_directory() . '/customizer/brc_carousel_slider.php';

//Add Shop By Category
require get_template_directory() . '/customizer/brc_shop_by_category.php';

//Add Shop By Brand
require get_template_directory() . '/customizer/brc_shop_by_brand.php';

//Add Achievements
require get_template_directory() . '/customizer/brc_achievement.php';

//Add Shop By Sport
require get_template_directory() . '/customizer/brc_shop_by_sport.php';

//Add Footer Social Media Links
require get_template_directory() . '/customizer/brc_social_media.php';

// Register Custom Navigation Walker
require get_template_directory() . '/components/class-wp-bootstrap-navwalker.php';



function my_filter_head() {
    remove_action('wp_head', '_admin_bar_bump_cb');
 }
 
 add_action('get_header', 'my_filter_head');
