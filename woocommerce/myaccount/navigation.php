<?php
/**
 * My Account navigation
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/navigation.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 2.6.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

do_action( 'woocommerce_before_account_navigation' );
?>

<nav class="woocommerce-MyAccount-navigation">
	<ul>
		<?php foreach ( wc_get_account_menu_items() as $endpoint => $label ) : ?>
			
			<li class="<?php echo wc_get_account_menu_item_classes( $endpoint ); ?> my-3 mr-5 py-3">	
				<a href="<?php echo esc_url( wc_get_account_endpoint_url( $endpoint ) ); ?>" class="d-flex flex-row justify-content-start align-items-center">
				<?php if($endpoint === 'dashboard') :?>
				<i class="fas fa-tachometer-alt fa-lg mr-3"></i>
				<?php elseif($endpoint === 'orders') :?>
				<i class="fas fa-shopping-bag fa-lg mr-3"></i>
				<?php elseif($endpoint === 'downloads') :?>
				<i class="fas fa-file-archive fa-lg mr-3"></i>
				<?php elseif($endpoint === 'edit-address') :?>
				<i class="fas fa-map-marked-alt fa-lg mr-3"></i>
				<?php elseif($endpoint === 'edit-account') :?>
				<i class="fas fa-user fa-lg mr-3"></i>
				<?php elseif($endpoint === 'customer-logout') :?>
				<i class="fas fa-sign-out-alt fa-lg mr-3"></i>
				<?php endif; ?>
				<?php echo esc_html( $label ); ?>
				</a>
			</li>
		<?php endforeach; ?>
	</ul>
</nav>

<?php do_action( 'woocommerce_after_account_navigation' ); ?>
