<?php 
/* 

@package brightcapella

    =========================
            FRONT PAGE
    ========================= 

*/
get_header(); ?>

        <!-- Carousel  -->
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleSlidesOnly" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleSlidesOnly" data-slide-to="1"></li>
                <li data-target="#carouselExampleSlidesOnly" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active" data-interval="10000">
                        <div style="background-image: url(<?php echo get_theme_mod('carousel_image_1', get_template_directory_uri() . '/images/carousel_image_1.jpg' ); ?>);" class="carousel_img d-block w-100"></div>
                        <div class="jumbotron carousel_content">
                            <h1 class="display-4 text-white"><?php echo get_theme_mod('carousel_title_1', 'Shop')?></h1>
                            <p class="lead only_desktop_desc"><?php echo get_theme_mod('carousel_description_1', 'This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.') ?></p>
                            <a class="btn btn-dark btn-lg" href="<?php echo get_theme_mod('themeslug_url_setting_carousel_1', get_home_url() . '/shop/' ); ?>" role="button" target="_blank">Learn more</a>
                        </div>
                </div>
                <div class="carousel-item" data-interval="10000">
                        <div style="background-image: url(<?php echo get_theme_mod('carousel_image_2', get_template_directory_uri() . '/images/carousel_image_2.jpg' ); ?>);" class="carousel_img d-block w-100"></div>
                        <div class="jumbotron carousel_content">
                            <h1 class="display-4 text-white"><?php echo get_theme_mod('carousel_title_2', 'T-shirt')?></h1>
                            <p class="lead only_desktop_desc"><?php echo get_theme_mod('carousel_description_2', 'This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.') ?></p>
                            <a class="btn btn-dark btn-lg " href="<?php echo get_theme_mod('themeslug_url_setting_carousel_2', get_home_url() . '/product-category/clothing/tshirts/' ); ?>" role="button" target="_blank">Learn more</a>
                        </div>
                </div>
                <div class="carousel-item" data-interval="10000">
                        <div style="background-image: url(<?php echo get_theme_mod('carousel_image_3', get_template_directory_uri() . '/images/carousel_image_3.jpg' ); ?>);" class="carousel_img d-block w-100"></div>
                        <div class="jumbotron carousel_content">
                            <h1 class="display-4 text-white"><?php echo get_theme_mod('carousel_title_3', 'accessories')?></h1>
                            <p class="lead only_desktop_desc"><?php echo get_theme_mod('carousel_description_3', 'This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.') ?></p>
                            <a class="btn btn-dark btn-lg" href="<?php echo get_theme_mod('themeslug_url_setting_carousel_3', get_home_url() . '/product-category/clothing/accessories/' ); ?>" role="button" target="_blank">Learn more</a>
                        </div>
                </div>
             </div>
            <a class="carousel-control-prev" href="#carouselExampleSlidesOnly" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleSlidesOnly" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>


        <!-- Company Advantages -->
        <div class="d-flex flex-row  justify-content-center flex-wrap py-2 text-white bg-light">
            <div class="d-flex flex-row justify-content-around flex-wrap" >
                <div class="d-flex flex-column justify-content-between align-items-center flex-wrap mx-2 my-3 advantages_box">
                    <i class="material-icons md-48 ">local_shipping</i>
                    <p class="text-capitalize text-center my-3">shipping all over the world</p>
                </div>
                <div class="d-flex flex-column justify-content-between align-items-center flex-wrap mx-2 my-3 advantages_box">
                    <i class="material-icons md-48">security</i>
                    <p class="text-capitalize text-center my-3">secure payment gateway</p>
                </div>
            </div>
            <div class="d-flex flex-row justify-content-around flex-wrap" >
                <div class="d-flex flex-column justify-content-between align-items-center flex-wrap mx-2 my-3 advantages_box">
                    <i class="fas fa-tshirt md-48"></i>
                    <p class="text-capitalize text-center my-3">height quality Products</p>
                </div>
                <div class="d-flex flex-column justify-content-between align-items-center flex-wrap mx-2 my-3 advantages_box">
                    <i class="fas fa-headset md-48"></i>
                    <p class="text-capitalize text-center my-3">customer service 24h</p>
                </div>
            </div>
        </div>


        <?php
            $args = array(
                'posts_per_page' => -1,
                'post_type'      => 'product',
                'post_status'    => 'publish',
                'tax_query'      => array(
                    array(
                        'taxonomy' => 'product_visibility',
                        'field'    => 'name',
                        'terms'    => 'featured',
                        'operator' => 'IN',
                        ),
                    )  
            );

            $featured_product = new WP_Query( $args );

            if ( $featured_product->have_posts() ) :
            ?>   
            <!-- Featured Products container -->
            <div style="width: 100%; background: #fff;"> 
            <div class="custom_container">
                <div class="brc_feature-product text-center text-uppercase">
                    <div style="display:flex; justify-content: center;">
                        <h2 class="my-3">featured Prorudcts</h2>
                    </div>
                <div class="woocommerce autoplay my-2">
            <?php
            while ( $featured_product->have_posts() ) : $featured_product->the_post();

            $post_thumbnail_id     = get_post_thumbnail_id();
            $product_thumbnail     = wp_get_attachment_image_src($post_thumbnail_id, $size = 'shop-feature');
            $product_thumbnail_alt = get_post_meta( $post_thumbnail_id, '_wp_attachment_image_alt', true );

            if($product->is_type( 'simple' )) :
                $feature_sale_price = $product->get_sale_price();
                $feature_regular_price =  $product->get_regular_price();

                if($feature_sale_price > 0) :
                    $simple_feature_reduction =  round(($feature_sale_price / $feature_regular_price -1) * 100);
                endif;

            elseif($product->is_type( 'variable' )) :
                $feature_available_variations = $product->get_available_variations();
                $variable_feature_price = array();

                $min_feature_sale_price = round($product->get_variation_sale_price( 'min', true ));
                $max_feature_sale_price = round($product->get_variation_sale_price( 'max', true ));
                $min_feature_regular_price = round($product->get_variation_regular_price( 'min', true ));
                $max_feature_regular_price = round($product->get_variation_regular_price( 'max', true ));

                if($min_feature_sale_price > 0) :
                    $variable_feature_reduction = round(($min_feature_sale_price / $max_feature_regular_price -1) * 100);
                endif;

            endif;        
           



            ?>
                <div class="product ml-2 mr-2 brc_featured_product">
                        <div class="hover_product_view_action">
                            <a href="<?php the_permalink();?>" target="_blank" role="button" class="btn btn-dark text-capitalize my-3"><i class="fas fa-eye fa-2x"></i></a>
                            <?php 
                                $args = array();
                                woocommerce_template_loop_add_to_cart($args); 
                            ?>
                        </div>
                        <img src="<?php echo $product_thumbnail[0];?>" alt="<?php echo $product_thumbnail_alt;?>">
                        <p class="text-center text-capitalize mt-2"><?php the_title();?></p>
                        <?php if($product->is_type( 'simple' )) : ?>   
                        <p class="mb-2 brc_amount_price">
                            <?php if($feature_sale_price > 0) :?>
                                    <del><?php echo get_woocommerce_currency_symbol()  .  $feature_regular_price; ?></del>
                                    <span><?php echo get_woocommerce_currency_symbol() .  $feature_sale_price; ?></span>
                            <?php else : ?>
                                    <span><?php echo get_woocommerce_currency_symbol() .  $feature_regular_price; ?></span>
                            <?php endif; ?>
                        </p>
                        <?php if($feature_sale_price > 0) : ?>
                            <span class="custom_sale"><?php echo $simple_feature_reduction; ?>%</span> 
                        <?php endif; ?>
                        <?php elseif($product->is_type( 'variable' )) :?>
                        <p class="mb-2 brc_amount_price">
                            <?php if($min_feature_sale_price !== $min_feature_regular_price) : ?>
                                <span><?php echo get_woocommerce_currency_symbol() .  $min_feature_sale_price; ?></span>
                                -
                                <span><?php echo get_woocommerce_currency_symbol() .  $max_feature_sale_price; ?></span>
                            <?php else : ?>
                                <span><?php echo get_woocommerce_currency_symbol() .  $min_feature_regular_price; ?></span>
                                -
                                <span><?php echo get_woocommerce_currency_symbol() . $max_feature_regular_price; ?></span>
                            <?php endif; ?>
                        </p>
                        <?php if($min_feature_sale_price !== $min_feature_regular_price) : ?>
                            <span class="custom_sale"><?php echo $variable_feature_reduction; ?>%</span> 
                        <?php endif; ?>   
                        <?php endif; ?>   
                </div>

            <?php 
            endwhile; 
            ?>
                </div>
                </div>
            </div>
            </div>
            <?php
            endif; 
                    
            wp_reset_query();
            ?>

            <?php 
                $onsale_args = array(
                    'posts_per_page' => -1,
                    'post_type'      => 'product',
                    'post_status'    => 'publish',
                    'meta_query'     => array(
                        'relation' => 'OR',
                        array( 
                            'key'           => '_sale_price',
                            'value'         => 0,
                            'compare'       => '>',
                            'type'          => 'numeric'
                        ),
                    )
                );    

                $onsale_products = new WP_Query( $onsale_args );

                if ( $onsale_products->have_posts() ) :
                ?> 
                <!-- OnSale Products section -->
                <div style="width: 100%; background: #fff;">
                <div class="custom_container">    
                    <div class="brc_onsale-product text-center text-uppercase">
                        <div style="display:flex; justify-content: center;">
                            <h2 class="my-3">OnSale Prorudcts</h2>
                        </div> 
                        <div class="woocommerce autoplay my-2">

                <?php    
                while ( $onsale_products->have_posts() ) : $onsale_products->the_post();

                $onsale_post_thumbnail_id     = get_post_thumbnail_id();
                $onsale_product_thumbnail     = wp_get_attachment_image_src($onsale_post_thumbnail_id, $size = 'shop-feature');
                $onsale_product_thumbnail_alt = get_post_meta( $onsale_post_thumbnail_id, '_wp_attachment_image_alt', true );

                if($product->is_type( 'simple' )) :
                    $onsale_sale_price = $product->get_sale_price();
                    $onsale_regular_price =  $product->get_regular_price();
    
                    if($onsale_sale_price > 0) :
                        $simple_onsale_reduction =  round(($onsale_sale_price / $onsale_regular_price -1) * 100);
                    endif;
    
                elseif($product->is_type( 'variable' )) :
                    $min_onsale_sale_price = round($product->get_variation_sale_price( 'min', true ));
                    $max_onsale_sale_price = round($product->get_variation_sale_price( 'max', true ));
                    $min_onsale_regular_price = round($product->get_variation_regular_price( 'min', true ));
                    $max_onsale_regular_price = round($product->get_variation_regular_price( 'max', true ));
    
                    if($min_onsale_sale_price > 0) :
                        $variable_onsale_reduction = round(($min_onsale_sale_price / $max_onsale_regular_price -1) * 100);
                    endif;
    
                endif;

                ?>
                        <div class="product ml-2 mr-2 brc_onsale_product">
                            <div class="hover_product_view_action">
                                <a href="<?php the_permalink();?>" target="_blank" role="button" class="btn btn-dark text-capitalize my-3"><i class="fas fa-eye fa-2x"></i></a>
                                <?php $args = array();
                                woocommerce_template_loop_add_to_cart($args);  ?>
                            </div>
                            <img src="<?php echo $onsale_product_thumbnail[0];?>" alt="<?php echo $onsale_product_thumbnail_alt;?>">
                            <p class="text-center text-capitalize mt-2"><?php the_title();?></p>
                            <?php if($product->is_type( 'simple' )) : ?>   
                            <p class="mb-2 brc_amount_price">
                            <?php if($onsale_sale_price > 0) :?>
                                    <del><?php echo get_woocommerce_currency_symbol() .  $onsale_regular_price; ?></del>
                                    <span><?php echo get_woocommerce_currency_symbol() . $onsale_sale_price; ?></span>
                            <?php else : ?>
                                    <span><?php echo get_woocommerce_currency_symbol() .  $onsale_regular_price; ?></span>
                            <?php endif; ?>
                            </p>
                            <?php if($onsale_sale_price > 0) : ?>
                                <span class="custom_sale"><?php echo $simple_onsale_reduction; ?>%</span> 
                            <?php endif; ?>
                            <?php elseif($product->is_type( 'variable' )) :?>
                            <p class="mb-2 brc_amount_price">
                                <?php if($min_onsale_sale_price > 0) : ?>
                                    <span><?php echo get_woocommerce_currency_symbol() .  $min_onsale_sale_price; ?></span>
                                    -
                                    <span><?php echo get_woocommerce_currency_symbol() .  $max_onsale_sale_price; ?></span>
                                <?php else : ?>
                                    <span><?php echo get_woocommerce_currency_symbol() .  $min_onsale_regular_price; ?></span>
                                    -
                                    <span><?php echo get_woocommerce_currency_symbol() .  $max_onsale_regular_price; ?></span>
                                <?php endif; ?>
                            </p>
                            <?php if($min_onsale_sale_price > 0) : ?>
                                <span class="custom_sale"><?php echo $variable_onsale_reduction; ?>%</span> 
                            <?php endif; ?>   
                            <?php endif; ?>     
                        </div>
                <?php    
                endwhile; 
                ?>
                        </div>
                    </div>
                </div>
                </div>
                <?php
                endif;    
            ?>


            <!-- Shop By Category Section -->
            <div id="brc_shop_by_category" class="py-3">
                <div class="d-flex justify-content-center my-4">
                    <h2 class="my-4 text-uppercase">Shop By Category</h2>   
                </div>

                <div class="d-flex flex-column">
                    <div class="d-flex flex-row justify-content-center my-3  flex-wrap">
                        <a style="color: #fff; background-image: url(<?php echo get_theme_mod('shop_box_image_1', get_template_directory_uri() . '/images/men.jpg'); ?>);" href="<?php echo get_theme_mod('shop_box_url_1', get_home_url() . '/men'); ?>" target="_blank" class="d-flex justify-content-center align-items-center">
                            <p><?php echo get_theme_mod('shop_box_title_1', 'Men'); ?></p>
                        </a>
                        <a style="color: #fff; background-image: url(<?php echo get_theme_mod('shop_box_image_2', get_template_directory_uri() . '/images/women.jpg'); ?>);" href="<?php echo get_theme_mod('shop_box_url_2', get_home_url() . '/women'); ?>" target="_blank" class="d-flex justify-content-center align-items-center">
                            <p><?php echo get_theme_mod('shop_box_title_2', 'Women'); ?></p>
                        </a>
                    </div>
                    <div class="d-flex flex-row justify-content-center my-3 flex-wrap">
                        <a style="color: #fff; background-image: url(<?php echo get_theme_mod('shop_box_image_3', get_template_directory_uri() . '/images/kids.jpg'); ?>);" href="<?php echo get_theme_mod('shop_box_url_3', get_home_url() . '/kids'); ?>" target="_blank" class="d-flex justify-content-center align-items-center">
                            <p><?php echo get_theme_mod('shop_box_title_3', 'Kids'); ?></p>
                        </a>
                        <a style="color: #fff; background-image: url(<?php echo get_theme_mod('shop_box_image_4', get_template_directory_uri() . '/images/onsale.jpg'); ?>);" href="<?php echo get_theme_mod('shop_box_url_4', get_home_url() . '/on-sale'); ?>" target="_blank" class="d-flex justify-content-center align-items-center">
                            <p><?php echo get_theme_mod('shop_box_title_4', 'On Sale'); ?></p>
                        </a>
                    </div>
                </div>

            </div>

            <!-- Shop By Brand section -->
            <div id="brc_shop_by_brand" class="py-3">
                <div class="d-flex justify-content-center my-4">
                    <h2 class="my-4 text-uppercase text-center">Shop By Brand</h2>   
                </div>
                <div class="d-flex flex-column">
                    <div class="d-flex flex-row justify-content-center my-3  flex-wrap">
                        <a class="d-flex flex-column justify-content-between align-content-center text-center m-2 p-4" href="<?php echo get_theme_mod('brand_box_url_1', get_home_url() . '/nike'); ?>" target="_blank" class="d-flex justify-content-center align-items-center">
                            <img src="<?php echo get_theme_mod('brand_box_image_1', get_template_directory_uri() . '/images/nike.png'); ?>" alt="<?php echo get_theme_mod('brand_box_title_1', 'nike'); ?>" >
                            <p class="text-white my-2 text-capitalize"><?php echo get_theme_mod('brand_box_title_1', 'Nike'); ?></p>
                        </a>
                        <a class="d-flex flex-column justify-content-between align-content-center text-center m-2 p-4" href="<?php echo get_theme_mod('brand_box_url_2', get_home_url() . '/adidas'); ?>" target="_blank" class="d-flex justify-content-center align-items-center">
                            <img src="<?php echo get_theme_mod('brand_box_image_2', get_template_directory_uri() . '/images/adidas.png'); ?>" alt="<?php echo get_theme_mod('brand_box_title_2', 'adidas'); ?>" >
                            <p class="text-white my-2 text-capitalize"><?php echo get_theme_mod('brand_box_title_2', 'Adidas'); ?></p>
                        </a>
                        <a class="d-flex flex-column justify-content-between align-content-center text-center m-2 p-4" href="<?php echo get_theme_mod('brand_box_url_3', get_home_url() . '/zara'); ?>" target="_blank" class="d-flex justify-content-center align-items-center">
                            <img src="<?php echo get_theme_mod('brand_box_image_3', get_template_directory_uri() . '/images/zara.png'); ?>" alt="<?php echo get_theme_mod('brand_box_title_2', 'zara'); ?>" >
                            <p class="text-white my-2 text-capitalize"><?php echo get_theme_mod('brand_box_title_3', 'Zara'); ?></p>
                        </a>
                        <a class="d-flex flex-column justify-content-between align-content-center text-center m-2 p-4" href="<?php echo get_theme_mod('brand_box_url_4', get_home_url() . '/giorgio-armani'); ?>" target="_blank" class="d-flex justify-content-center align-items-center">
                            <img src="<?php echo get_theme_mod('brand_box_image_4', get_template_directory_uri() . '/images/armani.png'); ?>" alt="<?php echo get_theme_mod('brand_box_title_2', 'giorgio-armani'); ?>" >
                            <p class="text-white my-2 text-capitalize"><?php echo get_theme_mod('brand_box_title_4', 'Giorgio-armani'); ?></p>
                        </a>
                    </div>
                </div>
            </div>

            <!-- count up section -->
            <div id="count_up" class="d-flex flex-column align p-2">
                <div class="stat-wrap d-flex flex-row justify-content-center flex-wrap">
                    <div class="d-flex flex-column align-content-center justify-content-center m-2 p-2">
                        <img  class="p-2" src="<?php echo get_template_directory_uri() . '/images/icons/box.svg'  ?>" alt="products"> 
                        <p class="text-center text-uppercase text-light my-1">Products</p>
                        <span class="stat-number"><?php echo get_theme_mod('products_nmb_setting', 378) ?></span>      
                    </div>
                    <div class="d-flex flex-column align-content-center justify-content-center m-2 p-2">
                        <img class="p-2" src="<?php echo get_template_directory_uri() . '/images/icons/clients.svg'  ?>" alt="clients">
                        <p class="text-center text-uppercase text-light my-1">Clients</p>
                        <span class="stat-number"><?php echo get_theme_mod('clients_nmb_setting', 21) ?></span>      
                    </div>
                    <div class="d-flex flex-column align-content-center justify-content-center m-2 p-2">
                        <img class="p-2" src="<?php echo get_template_directory_uri() . '/images/icons/sales-chart.svg'  ?>" alt="sales-chart">
                        <p class="text-center text-uppercase text-light my-1">Sales</p>
                        <span class="stat-number"><?php echo get_theme_mod('sales_nmb_setting', 14); ?></span>      
                    </div>
                    <div class="d-flex flex-column align-content-center justify-content-center m-2 p-2">
                        <img class="p-2" src="<?php echo get_template_directory_uri() . '/images/icons/partners.svg'  ?>" alt="partners">
                        <p class="text-center text-uppercase text-light my-1">Partners</p>
                        <span class="stat-number"><?php echo get_theme_mod('partners_nmb_setting', 12) ?></span>      
                    </div>
                </div>
            </div>

            <!-- Sport Section -->
            <div id="brc_sport_section" class="d-flex flex-column">
                <div class="d-flex justify-content-center align-items-center brc_sport_parallax_background" style="background-image: url(<?php echo get_template_directory_uri() . '/images/man_sport.jpg'; ?>)">
                    <div id="brc_sport_dark_overlayred"></div>
                    <h2 class="my-4 text-uppercase text-center text-white">Sport Essentials</h2>   
                </div>

                <div class="d-flex flex-row justify-content-center flex-wrap mt-5">

                    <div class="brc_sport_backgroundimg m-4" style="background-image: url(<?php echo  get_theme_mod('sport_box_image_1' , get_template_directory_uri() . '/images/woman_gym.jpg'); ?>)">
                        <div style="height: 100%;" class="d-flex flex-column align-items-start justify-content-end p-5">
                            <p class="text-white text-capitalize brc_sport_img_box_title"><?php echo get_theme_mod('sport_box_title_1', "Women's Gym Clothes") ?></p>
                            <a href="<?php echo get_theme_mod('sport_box_url_1', get_home_url() . '/sport/women/gym-clothes'); ?>" class="brc_sport_img_box_btn">Shop</a>
                        </div>
                    </div>

                    <div class="brc_sport_backgroundimg m-4" style="background-image: url(<?php echo  get_theme_mod('sport_box_image_2' , get_template_directory_uri() . '/images/man_gym.jpg'); ?>)">
                        <div style="height: 100%;" class="d-flex flex-column justify-content-end align-items-start p-5">
                            <p class="text-white text-capitalize brc_sport_img_box_title"><?php echo get_theme_mod('sport_box_title_2', "Mens Gym Clothes") ?></p>
                            <a href="<?php echo get_theme_mod('sport_box_url_2', get_home_url() . '/sport/men/gym-clothes'); ?>" class="brc_sport_img_box_btn">Shop</a>
                        </div>
                    </div>
                    
                </div>

                <div class="d-flex flex-row justify-content-center flex-wrap">

                    <div class="brc_sport_backgroundimg m-4" style="background-image: url(<?php echo  get_theme_mod('sport_box_image_3' , get_template_directory_uri() . '/images/woman_running.jpg'); ?>)">
                        <div style="height: 100%;" class="d-flex flex-column justify-content-end align-items-start p-5">
                            <p class="text-white text-capitalize brc_sport_img_box_title"><?php echo get_theme_mod('sport_box_title_3', "Women's Jogging Clothes") ?></p>
                            <a href="<?php echo get_theme_mod('sport_box_url_3', get_home_url() . '/sport/women/jogging-clothes'); ?>" class="brc_sport_img_box_btn">Shop</a>
                        </div>
                    </div>

                    <div class="brc_sport_backgroundimg m-4" style="background-image: url(<?php echo  get_theme_mod('sport_box_image_4' , get_template_directory_uri() . '/images/man_running.jpg'); ?>)">
                        <div style="height: 100%;" class="d-flex flex-column justify-content-end align-items-start p-5">
                            <p class="text-white text-capitalize brc_sport_img_box_title"><?php echo get_theme_mod('sport_box_title_4', "Mens Jogging Clothes") ?></p>
                            <a href="<?php echo get_theme_mod('sport_box_url_4', get_home_url() . '/sport/men/jogging-clothes'); ?>" class="brc_sport_img_box_btn">Shop</a>
                        </div>
                    </div>

                </div>

            </div>    
            


<?php get_footer(); ?>


