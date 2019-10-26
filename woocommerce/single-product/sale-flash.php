<?php
/**
 * Product loop sale flash
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/sale-flash.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $post, $product;

if ( ! $product->is_in_stock() ) return;

if($product->is_type( 'simple' )) :
    $simple_sale_price = $product->get_sale_price();
    $simple_regular_price =  $product->get_regular_price();

    if($simple_sale_price > 0) :
        $simple_reduction =  round(($simple_sale_price / $simple_regular_price -1) * 100);
    endif;

elseif($product->is_type( 'variable' )) :
    $min_variable_sale_price = round($product->get_variation_sale_price( 'min', true ));
    $max_variable_sale_price = round($product->get_variation_sale_price( 'max', true ));
    $min_variable_regular_price = round($product->get_variation_regular_price( 'min', true ));
    $max_variable_regular_price = round($product->get_variation_regular_price( 'max', true ));

    if($min_variable_sale_price > 0) :
        $variable_variable_reduction = round(($min_variable_sale_price / $max_variable_regular_price -1) * 100);
    endif;

endif;

?>

<?php 
if($product->is_type( 'simple' )) :    
    if ( !empty( $simple_regular_price ) && !empty( $simple_sale_price ) && $simple_regular_price > $simple_sale_price ) : ?>
        <?php echo
            apply_filters( 'woocommerce_sale_flash', '<span class="custom_sale" style="z-index: 1; top: 0.8rem; left: 0.8rem;">' . $simple_reduction . '%</span>', $post, $product );
        ?>
<?php endif;
elseif($product->is_type( 'variable' )) :
    if ( !empty( $max_variable_regular_price ) && !empty( $min_variable_sale_price ) && $max_variable_regular_price > $min_variable_sale_price ) : ?>
        <?php echo
            apply_filters( 'woocommerce_sale_flash', '<span class="custom_sale" style="z-index: 1; top: 0.8rem; left: 0.8rem;">' . $variable_variable_reduction . '%</span>', $post, $product );
        ?>
    <?php endif;
endif;    

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */