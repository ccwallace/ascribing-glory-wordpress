<?php
get_header();
 ?>
  <div class="container">
    <div class="row">
      <div class="col l4 m4 s12 center-align">
        <div class="card">
          <div class="card-image">
            <img src="<?php echo get_template_directory_uri();?>/img/pens-brushes.jpg" alt="">
          </div>
        </div>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
        </p>
        <a class="waves-effect waves-light btn">Custom Orders</a>
      </div>
      <div class="col l4 m4 s12 center-align">
        <div class="card">
          <div class="card-image">
            <img src="<?php echo get_template_directory_uri();?>/img/alyssa-craft-bag.jpg" alt="">
          </div>
        </div>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
        </p>
        <a class="waves-effect waves-light btn">Meet Alyssa</a>
      </div>
      <div class="col l4 m4 s12 center-align">
        <div class="card">
          <div class="card-image">
            <img src="<?php echo get_template_directory_uri();?>/img/water-bottle-pens-table.jpg" alt="">
          </div>
        </div>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
        </p>
        <a class="waves-effect waves-light btn">Art Prints</a>
      </div>
    </div>

    <div class="row valign-wrapper">
      <div class="col s8">
          <img src="<?php echo get_template_directory_uri();?>/img/pens-brushes-square.jpg" alt="" class="responsive-img collage-1 z-depth-2 hoverable">
          <img src="<?php echo get_template_directory_uri();?>/img/pens-brushes-square.jpg" alt="" class="responsive-img collage-2 z-depth-3 hoverable">
          <img src="<?php echo get_template_directory_uri();?>/img/pens-brushes-square.jpg" alt="" class="responsive-img collage-3 z-depth-2 hoverable">
          <img src="<?php echo get_template_directory_uri();?>/img/pens-brushes-square.jpg" alt="" class="responsive-img collage-4 z-depth-1 hoverable">
          <img src="<?php echo get_template_directory_uri();?>/img/pens-brushes-square.jpg" alt="" class="responsive-img collage-5 z-depth-5 hoverable">
          <img src="<?php echo get_template_directory_uri();?>/img/pens-brushes-square.jpg" alt="" class="responsive-img collage-6 z-depth-2 hoverable">
          <img src="<?php echo get_template_directory_uri();?>/img/pens-brushes-square.jpg" alt="" class="responsive-img collage-7 z-depth-4 hoverable">
          <img src="<?php echo get_template_directory_uri();?>/img/pens-brushes-square.jpg" alt="" class="responsive-img collage-8 z-depth-3 hoverable">
          <img src="<?php echo get_template_directory_uri();?>/img/pens-brushes-square.jpg" alt="" class="responsive-img collage-9 z-depth-2 hoverable">
      </div>
      <div class="col s4 center-align hide-on-med-and-down">
        <h5>LOVE IS MEANT TO BE AN ADVENTURE</h5>
        <a class="waves-effect waves-light btn">Let's Tell Your Story</a>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
      </div>
    </div>

<div class="row">
  <div class="col s12 center-align hide-on-large-only">
    <h5>LOVE IS MEANT TO BE AN ADVENTURE</h5>
    <a class="waves-effect waves-light btn">Let's Tell Your Story</a>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
  </div>
</div>

<div class="row valign-wrapper">
  <div class="divider col s4"></div>
  <div class="col s4 center-align"><h5>Come Say Hi On Instagram</h5></div>
  <div class="divider col s4"></div>
</div>

  <div class="row instagram-row">
    <?php echo do_shortcode('[fts_instagram instagram_id=4365244084 pics_count=6 type=user profile_wrap=no super_gallery=yes columns=3 force_columns=no space_between_photos=1px icon_size=65px hide_date_likes_comments=no]'); ?>


  </div>






  </div>








<?php
 get_footer();
