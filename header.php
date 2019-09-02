<?php
/**
 *  Based on Materialize Template <http://wordpress.org>
 *
 *  It is free software; you can redistribute it and/or modify it under
 *  the terms of the GNU General Public License, either version 2
 *  of the License, or any later version.
 *
 *  For the full copyright and license information, please read the
 *  LICENSE.txt file that was distributed with this source code.
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <!--Let browser know website is optimized for mobile-->
    <?php if (is_single()) : ?>
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php else : ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <?php endif; ?>
    <?php wp_head() ?>
</head>
<body <?php body_class(); ?>>
<header>
  <div class="row">
    <div class="col s12">
      <img class="responsive-img rainbow-pens" src="<?php echo esc_url(get_template_directory_uri() . '/img/rainbow-pens-doubled.png'); ?>" alt="Rainbow Pens"></img>
    </div>
    <div class="col s6 push-s3">
      <a href="/home"><img class="responsive-img ag-logo-main" src="<?php echo esc_url(get_template_directory_uri() . '/img/ag-logo-transparent.png'); ?>"></img></a>
    </div>
  </div>
  <nav class="nav-extended z-depth-0">
    <!--  THIS IS FOR THE USER MENU OPEN ON FULL SCREEN
    <div class="nav-wrapper blue-custom lighten-2">
      <?php materialize_template_the_custom_logo(); ?>
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" data-activates="mobile-menu" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#!" data-activates="slide-out" class="profile-menu"><i class="material-icons">menu</i></a></li>
      </ul>
    </div>
  -->
    <?php if ( has_nav_menu( 'main' ) ) : ?>
      <div class="nav-wrapper hide-on-med-and-down white black-text nav-center">
        <a href="#" data-activates="mobile-demo" class="button-collapse fixed right"><i class="material-icons black-text">menu</i></a>
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

</header>
