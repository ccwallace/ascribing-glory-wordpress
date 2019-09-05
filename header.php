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
		<div class="row">
			<div class="col s12">
				<img class="responsive-img rainbow-pens" src="http://34.94.0.6/wp-content/uploads/2019/08/rainbow-pens-doubled.png" alt="Rainbow Pens"></img>
			</div>
			<div class="col s6 push-s3">
				<img class="responsive-img ag-logo-main" src="http://34.94.0.6/wp-content/uploads/2019/08/ag-logo-transparent.png"></img>
			</div>
		</div>

		<!--BEGIN NAVIGATION -->
		<nav class="z-depth-0">
      <div class="nav-wrapper white">
        <a href="#" data-activates="mobile-demo" class="button-collapse fixed right"><i class="material-icons black-text">menu</i></a>
        <div class="nav-center">
          <ul class="hide-on-med-and-down">
						<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						) );
						?>
          </ul>
        </div>
        <ul class="side-nav right-aligned black-text" id="mobile-demo">
					<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					) );
					?>
        </ul>
      </div>
    </nav>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
