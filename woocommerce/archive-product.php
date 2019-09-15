<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action( 'woocommerce_before_main_content' );

?>
<header class="woocommerce-products-header">
	<?php if ( apply_filters( 'woocommerce_show_page_title', false ) ) : ?>
		<h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1>
		<div class="divider hide-on-med-and-down"></div>
	<?php endif; ?>
	<div class="row">
		<div class="col s12 center">
			<!-- Dropdown Trigger -->
			<a class='dropdown-button btn hide-on-large-only' data-beloworigin="true" href='#' data-activates='dropdown1'>Filter</a>
		</div>
	</div>
	<nav class="z-depth-0 transparent hide-on-med-and-down">
		<div class="nav-wrapper">
			<div class="nav-center">
				<ul>
					<?php
					$taxonomy     = 'product_cat';
					$orderby      = 'name';
					$show_count   = 0;      // 1 for yes, 0 for no
					$pad_counts   = 0;      // 1 for yes, 0 for no
					$hierarchical = 0;      // 1 for yes, 0 for no
					$title        = '';
					$empty        = 0;

					$args = array(
						'taxonomy'     => $taxonomy,
						'orderby'      => $orderby,
						'show_count'   => $show_count,
						'pad_counts'   => $pad_counts,
						'hierarchical' => $hierarchical,
						'title_li'     => $title,
						'hide_empty'   => $empty
					);
					$all_categories = get_categories( $args );
					foreach ($all_categories as $cat) {
						if($cat->category_parent == 0 and $cat->name != 'Uncategorized') {
							$category_id = $cat->term_id;
							echo '<li><a href="'. get_term_link($cat->slug, 'product_cat') .'" class="black-text">'. $cat->name .'</a></li>';
						}
					}?>
				</ul>
			</div>
		</div>
	</nav>

<?php
	$taxonomy     = 'product_cat';
	$orderby      = 'name';
	$show_count   = 0;      // 1 for yes, 0 for no
	$pad_counts   = 0;      // 1 for yes, 0 for no
	$hierarchical = 0;      // 1 for yes, 0 for no
	$title        = '';
	$empty        = 0;

	$args = array(
		'taxonomy'     => $taxonomy,
		'orderby'      => $orderby,
		'show_count'   => $show_count,
		'pad_counts'   => $pad_counts,
		'hierarchical' => $hierarchical,
		'title_li'     => $title,
		'hide_empty'   => $empty
	);

	echo ('
	<!-- Dropdown Structure -->
	<ul id="dropdown1" class="dropdown-content">');
	$all_categories = get_categories( $args );
	foreach ($all_categories as $cat) {
		if($cat->category_parent == 0 and $cat->name != 'Uncategorized') {
			$category_id = $cat->term_id;
			echo '<li><a href="'. get_term_link($cat->slug, 'product_cat') .'" class="black-text">'. $cat->name .'</a></li>';
		}
	}
	echo('</ul>');
 ?>

<?php echo do_shortcode('[products limit="3" columns="3" category="Art Prints, Greeting Cards, Tshirts" cat_operator="AND"]'); ?>

<?php
if ( woocommerce_product_loop() ) {

	/**
	 * Hook: woocommerce_before_shop_loop.
	 *
	 * @hooked woocommerce_output_all_notices - 10
	 * @hooked woocommerce_result_count - 20
	 * @hooked woocommerce_catalog_ordering - 30
	 */
	do_action( 'woocommerce_before_shop_loop' );

	woocommerce_product_loop_start();

	if ( wc_get_loop_prop( 'total' ) ) {
		while ( have_posts() ) {
			the_post();

			/**
			 * Hook: woocommerce_shop_loop.
			 */
			do_action( 'woocommerce_shop_loop' );

			wc_get_template_part( 'content', 'product' );
		}
	}

	woocommerce_product_loop_end();

	/**
	 * Hook: woocommerce_after_shop_loop.
	 *
	 * @hooked woocommerce_pagination - 10
	 */
	do_action( 'woocommerce_after_shop_loop' );
} else {
	/**
	 * Hook: woocommerce_no_products_found.
	 *
	 * @hooked wc_no_products_found - 10
	 */
	do_action( 'woocommerce_no_products_found' );
}

/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action( 'woocommerce_after_main_content' );

/**
 * Hook: woocommerce_sidebar.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
do_action( 'woocommerce_sidebar' );

get_footer( 'shop' );
