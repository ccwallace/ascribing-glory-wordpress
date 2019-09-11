<?php
get_header();
 ?>
  <div class="container">
    <div class="row">
      <div class="col l4 m4 s12">
        <div class="card">
          <div class="card-image">
            <img src="<?php echo get_template_directory_uri();?>/img/pens-brushes.jpg" alt="">
          </div>
        </div>
        <p class="flow-text">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </p>
        <a class="waves-effect waves-light btn">Custom Orders</a>
      </div>
      <div class="col l4 m4 s12">
        <div class="card">
          <div class="card-image">
            <img src="<?php echo get_template_directory_uri();?>/img/alyssa-craft-bag.jpg" alt="">
          </div>
        </div>
        <p class="flow-text">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </p>
        <a class="waves-effect waves-light btn">Meet Alyssa</a>
      </div>
      <div class="col l4 m4 s12">
        <div class="card">
          <div class="card-image">
            <img src="<?php echo get_template_directory_uri();?>/img/water-bottle-pens-table.jpg" alt="">
          </div>
        </div>
        <p class="flow-text">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </p>
        <a class="waves-effect waves-light btn">Art Prints</a>
      </div>
    </div>

    <div class="row">
      <div class="col s10">
          <img src="<?php echo get_template_directory_uri();?>/img/pens-brushes-square.jpg" alt="" class="responsive-img image-test1 z-depth-2">
          <img src="<?php echo get_template_directory_uri();?>/img/pens-brushes-square.jpg" alt="" class="responsive-img image-test2 z-depth-3">
          <img src="<?php echo get_template_directory_uri();?>/img/pens-brushes-square.jpg" alt="" class="responsive-img image-test3 z-depth-2">
          <img src="<?php echo get_template_directory_uri();?>/img/pens-brushes-square.jpg" alt="" class="responsive-img image-test4 z-depth-1">
          <img src="<?php echo get_template_directory_uri();?>/img/pens-brushes-square.jpg" alt="" class="responsive-img image-test5 z-depth-5">
          <img src="<?php echo get_template_directory_uri();?>/img/pens-brushes-square.jpg" alt="" class="responsive-img image-test6 z-depth-2">
          <img src="<?php echo get_template_directory_uri();?>/img/pens-brushes-square.jpg" alt="" class="responsive-img image-test7 z-depth-4">
          <img src="<?php echo get_template_directory_uri();?>/img/pens-brushes-square.jpg" alt="" class="responsive-img image-test8 z-depth-3">
          <img src="<?php echo get_template_directory_uri();?>/img/pens-brushes-square.jpg" alt="" class="responsive-img image-test9 z-depth-2">
      </div>
    </div>


  <div class="row">
    <?php echo do_shortcode('[fts_instagram instagram_id=4365244084 pics_count=6 type=user profile_wrap=no super_gallery=yes columns=3 force_columns=no space_between_photos=1px icon_size=65px hide_date_likes_comments=no]'); ?>


  </div>






  </div>








<?php
 get_footer();
