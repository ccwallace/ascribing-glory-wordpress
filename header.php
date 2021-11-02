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
				<img class="responsive-img rainbow-pens" src="<?php echo get_template_directory_uri(); ?>/img/website-banner.png" alt="Rainbow Pens"></img>
			</div>
			<div class="row">
				<div class="col s6 push-s3">
					<a href="/home">
						<img class="responsive-img ag-logo-main" src="<?php echo get_template_directory_uri(); ?>/img/website-logo.png"></img>
					</a>
				</div>
				<div class="col s4 offset-s8 hide-on-large-only">
					<nav class="transparent z-depth-0">
						<div class="nav-wrapper">
							<ul class="right">
								<li class="no-padding"><a href="/cart" class="no-padding"><i class="material-icons black-text">shopping_cart</i></a></li>
								<li class="no-padding"><a href="#" data-activates="mobile-demo" class="button-collapse no-padding"><i class="material-icons black-text">menu</i></a></li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</header><!-- #masthead -->
		<!--BEGIN NAVIGATION -->
		<ul id="dropdown2" class="dropdown-content">
			<li><a href="/semi-custom-invitations" class="black-text">SEMI-CUSTOM INVITATIONS</a></li>
			<li><a href="/envelope-addressing" class="black-text">ENVELOPE ADDRESSING</a></li>
		</ul>
		<ul id="dropdown3" class="dropdown-content">
			<li><a href="/semi-custom-invitations" class="black-text">SEMI-CUSTOM INVITATIONS</a></li>
			<li><a href="/envelope-addressing" class="black-text">ENVELOPE ADDRESSING</a></li>
		</ul>
		<ul id="dropdown6" class="dropdown-content">
			<li><a href="/products-all/" class="black-text center-align">All</a></li>
			<li><a href="/shop-mothers-day-2021/" class="black-text center-align">Mother's Day</a></li>
			<li><a href="/shop-art-prints/" class="black-text center-align">Art Prints</a></li>
			<!--<li><a href="/product/2022-i-am-desk-calendar/" class="black-text center-align">Calendar</a></li>-->
			<li><a href="/shop-custom/" class="black-text center-align">Custom</a></li>
			<li><a href="/shop-greeting-cards/" class="black-text center-align">Greeting Cards</a></li>
			<li><a href="/shop-stationery/" class="black-text center-align">Stationery</a></li>
			<li><a href="/shop-stickers/" class="black-text center-align">Stickers</a></li>
			<li><a href="/shop-tshirts/" class="black-text center-align">Tshirts</a></li>
			<li><a href="/shop-spring-2021/" class="black-text center-align">Spring 2021</a></li>
		</ul>
		<nav class="z-depth-0 transparent hide-on-med-and-down">
      <div class="nav-wrapper">
        <!--<a href="#" data-activates="mobile-demo" class="button-collapse fixed right"><i class="material-icons black-text">menu</i></a>-->
        <div class="nav-center">
          <ul>
            <li><a class="black-text" href="/home">HOME</a></li>
            <li><a class="black-text" href="/about">ABOUT</a></li>
            <li><a class="dropdown-button black-text" data-beloworigin="true" href="#!" data-activates="dropdown3">WEDDINGS<i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a class="black-text" href="/workshops">WORKSHOPS</a></li>
			<!-- <li><a class="black-text" href="/shop-main">SHOP</a></li> -->
			<li><a class="dropdown-button black-text" data-beloworigin="true" href="/shop-main" data-activates="dropdown6">SHOP<i class="material-icons right">arrow_drop_down</i></a></li>
			<li><a class="black-text" href="/my-account">MY ACCOUNT</a></li>
            <li><a class="black-text" href="/contact">CONTACT</a></li>
			<li><a class="black-text material-icons" href="/cart">shopping_cart</a></li>
          </ul>
        </div>
      </div>
    </nav>
		<div class="nav-wrapper">
			<ul class="side-nav right-aligned" id="mobile-demo">
				<li><a href="/home">HOME</a></li>
				<li><a href="/about">ABOUT</a></li>
				<li><a class="dropdown-button black-text" data-beloworigin="true" href="#!" data-activates="dropdown2">WEDDINGS<i class="material-icons right">arrow_drop_down</i></a></li>
				<li><a href="/workshops">WORKSHOPS</a></li>
				<li><a href="/shop-main">SHOP</a></li>
				<li><a href="/my-account">MY ACCOUNT</a></li>
				<li><a href="/contact">CONTACT</a></li>
			</ul>
		</div>

		<?php
			global $wp;

			if((strpos(home_url($wp->request), 'shop') == true || strpos(home_url($wp->request), 'products') == true) && strpos(home_url($wp->request), 'workshops') == false){
				echo get_template_part('shop-menu');
			}
		?>

	<div id="content" class="site-content">
