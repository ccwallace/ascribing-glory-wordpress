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

		<div class="row">
			<div class="col s12">
				<img class="responsive-img rainbow-pens" src="http://34.94.0.6/wp-content/uploads/2019/08/rainbow-pens-doubled.png" alt="Rainbow Pens"></img>
			</div>
			<div class="col s6 push-s3">

			</div>
			<!--BEGIN NAVIGATION -->
			<nav>

					<img class="responsive-img ag-logo-main" src="http://34.94.0.6/wp-content/uploads/2019/08/ag-logo-transparent.png"></img>

				<div class="nav-wrapper white">
					<a href="#" data-activates="mobile-demo" class="button-collapse fixed right"><i class="material-icons black-text">menu</i></a>
					<div class="nav-center">
						<ul class="hide-on-med-and-down">
							<li><a class="black-text" href="/home">Home</a></li>
							<li><a class="black-text" href="/about">About</a></li>
							<li><a class="black-text" href="/weddings">Weddings</a></li>
							<li><a class="black-text" href="/resources">Resources</a></li>
							<li><a class="black-text" href="/shop">Shop</a></li>
							<li><a class="black-text" href="/contact">Contact</a></li>
						</ul>
					</div>
					<ul class="side-nav right-aligned" id="mobile-demo">
						<li><a href="/home">Home</a></li>
						<li><a href="/about">About</a></li>
						<li><a href="/weddings">Weddings</a></li>
						<li><a href="/resources">Resources</a></li>
						<li><a href="/shop">Shop</a></li>
						<li><a href="/contact">Contact</a></li>
					</ul>
				</div>
			</nav>
		</div>



	<div id="content" class="site-content">
