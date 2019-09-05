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
		<nav class="nav-extended blue-custom">
				<div class="nav-wrapper">
					<?php get_search_form() ?>
				</div>
				<div class="nav-wrapper blue-custom lighten-2">
						<?php materialize_template_the_custom_logo(); ?>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="brand-logo">
								<?php bloginfo("name"); ?>
						</a>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" data-activates="mobile-menu" class="button-collapse"><i class="material-icons">menu</i></a>
						<ul class="right hide-on-med-and-down">
								<?php if (current_user_can('manage_options')) : ?>
										<li><a href="<?php echo esc_url( get_admin_url() ); ?>"><i class="material-icons">view_module</i></a></li>
								<?php endif; ?>
								<li><a href="#!" data-activates="slide-out" class="profile-menu"><i class="material-icons">more_vert</i></a></li>
						</ul>
				</div>

				<?php if ( has_nav_menu( 'main' ) ) : ?>
						<div class="nav-wrapper hide-on-med-and-down">
								<?php wp_nav_menu( array('theme_location' => 'main')); ?>
						</div>
				<?php endif; ?>
		</nav>

		<div class="side-nav" id="mobile-menu">
				<h4 class="black-text truncate center-align"><?php bloginfo("name") ?></h4>
		<?php if ( has_nav_menu( 'main' ) ) : ?>
			<?php wp_nav_menu( array('theme_location' => 'main')); ?>
		<?php endif; ?>

		<?php if ( has_nav_menu( 'actions_mobile' ) ) : ?>
						<div class="fixed-action-btn horizontal click-to-toggle hide-on-large-only">
								<a class="btn-floating btn-large grey pulse">
										<i class="material-icons">more_vert</i>
								</a>
				<?php wp_nav_menu( array('theme_location' => 'actions_mobile', 'container' => '')); ?>
						</div>
		<?php endif; ?>
		</div>

		<ul id="slide-out" class="side-nav">
				<li>
						<div class="user-view">
				<?php
				global $current_user;
				wp_get_current_user();
				?>
								<div class="background">
										<img src="<?php echo esc_url(get_template_directory_uri() . '/img/profile-bg.jpg'); ?>">
								</div>
								<a href="<?php echo esc_url( get_edit_user_link( $current_user->ID ) ); ?>"><img class="circle" src="<?php echo esc_url( get_avatar_url( $current_user->ID )); ?>"></a>
								<a href="<?php echo esc_url( get_edit_user_link( $current_user->ID ) ); ?>"><span class="white-text text-lighten-2 name"><?php echo esc_attr($current_user->display_name); ?></span></a>
								<a href="<?php echo esc_url( get_edit_user_link( $current_user->ID ) ); ?>"><span class="white-text text-lighten-3 email"><?php echo esc_attr($current_user->user_email); ?></span></a>
						</div>
				</li>
		<?php if ( has_nav_menu( 'profile_1' ) ) : ?>
			<?php wp_nav_menu( array('theme_location' => 'profile_1')); ?>
		<?php endif; ?>
				<li>
						<div class="divider"></div>
				</li>
		<?php if ( has_nav_menu( 'profile_2' ) ) : ?>
			<?php wp_nav_menu( array('theme_location' => 'profile_2')); ?>
		<?php endif; ?>
		</ul>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
