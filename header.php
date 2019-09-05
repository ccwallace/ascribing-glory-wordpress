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
  <div class="row">
    <div class="col s12">
      <img class="responsive-img rainbow-pens" src="http://34.94.0.6/wp-content/uploads/2019/08/rainbow-pens-doubled.png" alt="Rainbow Pens"></img>
    </div>
    <div class="col s6 push-s3">
      <img class="responsive-img ag-logo-main" src="http://34.94.0.6/wp-content/uploads/2019/08/ag-logo-transparent.png"></img>
    </div>
  </div>
  <nav class="z-depth-0">
    <div class="nav-wrapper white">
      <a href="#" data-activates="mobile-demo" class="button-collapse fixed right"><i class="material-icons black-text">menu</i></a>
      <div class="nav-center">
        <ul class="hide-on-med-and-down">
          <li><a class="black-text" href="sass.html">Home</a></li>
          <li><a class="black-text" href="badges.html">About</a></li>
          <li><a class="black-text" href="collapsible.html">Weddings</a></li>
          <li><a class="black-text" href="mobile.html">Resources</a></li>
          <li><a class="black-text" href="mobile.html">Shop</a></li>
          <li><a class="black-text" href="mobile.html">Contact</a></li>
        </ul>
      </div>
      <ul class="side-nav right-aligned" id="mobile-demo">
        <li><a href="sass.html">Home</a></li>
        <li><a href="badges.html">About</a></li>
        <li><a href="collapsible.html">Weddings</a></li>
        <li><a href="mobile.html">Resources</a></li>
        <li><a href="mobile.html">Shop</a></li>
        <li><a href="mobile.html">Contact</a></li>
      </ul>
    </div>
  </nav>
