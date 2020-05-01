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
    <ul class="list-group">
        <li class="list-group-item <?php echo wc_get_account_menu_item_classes( "edit-account" ); ?>">
            <a href="<?php echo esc_url( wc_get_account_endpoint_url( "edit-account" ) ); ?>">Detalhes da Conta</a>
        </li>
        <li class="list-group-item <?php echo wc_get_account_menu_item_classes( "orders" ); ?>">
            <a href="<?php echo esc_url( wc_get_account_endpoint_url( "orders" ) ); ?>">Pedidos</a>
        </li>
        <li class="list-group-item <?php echo wc_get_account_menu_item_classes( "edit-address" ); ?>">
            <a href="<?php echo esc_url( wc_get_account_endpoint_url( "edit-address" ) ); ?>">Endereços</a>
        </li>
        <li class="list-group-item <?php echo wc_get_account_menu_item_classes( "customer-logout" ); ?>">
            <a href="<?php echo esc_url( wc_get_account_endpoint_url( "customer-logout" ) ); ?>">Sair</a>
        </li>
	</ul>
</nav>

<?php do_action( 'woocommerce_after_account_navigation' ); ?>
