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

<nav class="z-depth-0 transparent hide-on-med-and-down">
	<div class="nav-wrapper">
		<div class="nav-center">
			<ul>
				<?php foreach ( wc_get_account_menu_items() as $endpoint => $label ) : ?>
					<li class="<?php echo wc_get_account_menu_item_classes( $endpoint ); ?>">
						<a href="<?php echo esc_url( wc_get_account_endpoint_url( $endpoint ) ); ?>"><?php echo esc_html( $label ); ?></a>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>
</nav>
<!-- Dropdown Structure -->
<ul id="dropdown6" class="dropdown-content">
	<?php foreach ( wc_get_account_menu_items() as $endpoint => $label ) : ?>
		<li class="<?php echo wc_get_account_menu_item_classes( $endpoint ); ?>">
			<a href="<?php echo esc_url( wc_get_account_endpoint_url( $endpoint ) ); ?>"><?php echo esc_html( $label ); ?></a>
		</li>
	<?php endforeach; ?>
</ul>
<nav class = "hide-on-large-only">
  <div class="nav-wrapper">
    <ul class="hide-on-med-and-down">
      <li><a class="dropdown-button" href="#!" data-activates="dropdown6">Account Menu<i class="material-icons right">arrow_drop_down</i></a></li>
    </ul>
  </div>
</nav>

<?php do_action( 'woocommerce_after_account_navigation' ); ?>
