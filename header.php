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


<!--
			<nav class="transparent z-depth-0">
				<div class="row">
					<div class="col s2">
						<a class="black-text material-icons main-mobile-menu-btn" href="/cart">shopping_cart</a>
					</div>
					<div class="col s1">
						<a href="#" data-activates="mobile-demo" class="button-collapse fixed right"><i class="material-icons black-text">menu</i></a>
					</div>
				</div>
			</nav>
-->

			<div class="row">
				<div class="col s4 push-s4">
					<a href="/home">
						<img class="responsive-img ag-logo-main" src="http://34.94.0.6/wp-content/uploads/2019/08/ag-logo-transparent.png"></img>
					</a>
				</div>
				<div class="col s1 offset-s6 nav-wrapper">
					<nav class="transparent z-depth-0">
						<ul class="right">
							<li><a href="/cart"><i class="material-icons black-text">shopping_cart</i></a></li>
							<li><a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons black-text">menu</i></a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>

		<!--BEGIN NAVIGATION -->
		<nav class="z-depth-0 transparent">
      <div class="nav-wrapper">
        <!--<a href="#" data-activates="mobile-demo" class="button-collapse fixed right"><i class="material-icons black-text">menu</i></a>-->
        <div class="nav-center">
          <ul class="hide-on-med-and-down">
            <li><a class="black-text" href="/home">Home</a></li>
            <li><a class="black-text" href="/about">About</a></li>
            <li><a class="black-text" href="/weddings">Weddings</a></li>
            <li><a class="black-text" href="/resources">Resources</a></li>
            <li><a class="black-text" href="/shop">Shop</a></li>
            <li><a class="black-text" href="/contact">Contact</a></li>
						<li><a class="black-text material-icons" href="/cart">shopping_cart</a></li>
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
	</header><!-- #masthead -->

	<div id="content" class="site-content">
