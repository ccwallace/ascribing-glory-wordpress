<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ascribing-glory
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<!--BEGIN BANNER -->
	<header id="masthead" class="site-header">
		<div class="">
			<div class="col s12">
				<img class="responsive-img rainbow-pens" src="http://34.94.0.6/wp-content/uploads/2019/08/rainbow-pens-doubled.png" alt="Rainbow Pens"></img>
			</div>
			<div class="row">
				<div class="col s6 push-s3">
					<a href="/home">
						<img class="responsive-img ag-logo-main" src="http://34.94.0.6/wp-content/uploads/2019/08/ag-logo-transparent.png"></img>
					</a>
				</div>
				<div class="col s4 offset-s8">
					<nav class="transparent z-depth-0">
						<div class="nav-wrapper">
							<ul class="right">
								<li class="no-padding hide-on-large-only"><a href="/cart" class="no-padding"><i class="material-icons black-text">shopping_cart</i></a></li>
								<li class="no-padding"><a href="#" data-activates="mobile-demo" class="button-collapse no-padding"><i class="material-icons black-text">menu</i></a></li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</header><!-- #masthead -->
		<!--BEGIN NAVIGATION -->
		<nav class="z-depth-0 transparent hide-on-med-and-down">
      <div class="nav-wrapper">
        <!--<a href="#" data-activates="mobile-demo" class="button-collapse fixed right"><i class="material-icons black-text">menu</i></a>-->
        <div class="nav-center">
          <ul>
            <li><a class="black-text" href="/home">Home</a></li>
            <li><a class="black-text" href="/about">About</a></li>
            <li><a class="black-text" href="/weddings">Weddings</a></li>
            <li><a class="black-text" href="/resources">Resources</a></li>
            <li><a class="black-text" href="/shop">Shop</a></li>
            <li><a class="black-text" href="/contact">Contact</a></li>
						<li><a class="black-text material-icons" href="/cart">shopping_cart</a></li>
          </ul>
        </div>
      </div>
    </nav>
		<div class="nav-wrapper">
			<ul class="side-nav right-aligned" id="mobile-demo">
				<li><a href="/home">Home</a></li>
				<li><a href="/about">About</a></li>
				<li><a href="/weddings">Weddings</a></li>
				<li><a href="/resources">Resources</a></li>
				<li><a href="/shop">Shop</a></li>
				<li><a href="/contact">Contact</a></li>
			</ul>
		</div>

	<!--condition all of this-->

		<?php
			global $wp;

			if(strpos($wp->request, 'shop') == true){
				echo '<h1>you are on the shop page</h1>';
			}elseif(strpos($wp->request, 'product-category') == true){
				echo '<h1>you are viewing a product category</h1>';
			}

		?>
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


<!-- Stop condition here-->
	<div id="content" class="site-content">
