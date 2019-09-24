<?php
get_header();
 ?>
 <div class="row">
   <div class="col s12">
     <h1 class="center-align">
       <i>Bringing beauty into your life to help you remember and embrace God's love for you</i>
     </h1>
   </div>
 </div>
  <div class="container">
    <div class="row">
      <div class="col l4 m4 s12 center-align">
        <div class="card">
          <div class="card-image">
            <img src="<?php echo get_template_directory_uri();?>/img/pens-brushes.jpg" alt="">
          </div>
        </div>
        <p>
          Bring your favorite Scripture, excouraging qoute, or sweet sentiment to life by working with Alyssa to create a one-of-a-kind artwork!
        </p>
        <button class="waves-effect waves-light btn">Let's Create Together!</button>
      </div>
      <div class="col l4 m4 s12 center-align">
        <div class="card">
          <div class="card-image">
            <img src="<?php echo get_template_directory_uri();?>/img/alyssa-craft-bag.jpg" alt="">
          </div>
        </div>
        <p>
          I love that we've found this little corner of the Internet together!
        </p>
        <button class="waves-effect waves-light btn">Let's Be Friends</button>
      </div>
      <div class="col l4 m4 s12 center-align">
        <div class="card">
          <div class="card-image">
            <img src="<?php echo get_template_directory_uri();?>/img/water-bottle-pens-table.jpg" alt="">
          </div>
        </div>
        <p>
          I firmly believe that Scripture belongs in every area of life - including adorning our walls!
        </p>
        <button href="/about" class="waves-effect waves-light btn">Shop Art Prints</button>
      </div>
    </div>

    <div class="row valign-wrapper collage-wrapper">
      <div class="col l8 s12">
          <a href="#"><img src="<?php echo get_template_directory_uri();?>/img/pens-brushes-square.jpg" alt="" class="responsive-img collage collage-1 z-depth-1 hoverable"></a>
          <a href="#"><img src="<?php echo get_template_directory_uri();?>/img/pens-brushes-square.jpg" alt="" class="responsive-img collage collage-2 z-depth-1 hoverable"></a>
          <a href="#"><img src="<?php echo get_template_directory_uri();?>/img/pens-brushes-square.jpg" alt="" class="responsive-img collage collage-3 z-depth-1 hoverable"></a>
          <a href="#"><img src="<?php echo get_template_directory_uri();?>/img/pens-brushes-square.jpg" alt="" class="responsive-img collage collage-4 z-depth-1 hoverable"></a>
          <a href="#"><img src="<?php echo get_template_directory_uri();?>/img/pens-brushes-square.jpg" alt="" class="responsive-img collage collage-5 z-depth-1 hoverable"></a>
          <a href="#"><img src="<?php echo get_template_directory_uri();?>/img/pens-brushes-square.jpg" alt="" class="responsive-img collage collage-6 z-depth-1 hoverable"></a>
          <a href="#"><img src="<?php echo get_template_directory_uri();?>/img/pens-brushes-square.jpg" alt="" class="responsive-img collage collage-7 z-depth-1 hoverable"></a>
          <a href="#"><img src="<?php echo get_template_directory_uri();?>/img/pens-brushes-square.jpg" alt="" class="responsive-img collage collage-8 z-depth-1 hoverable"></a>
          <a href="#"><img src="<?php echo get_template_directory_uri();?>/img/pens-brushes-square.jpg" alt="" class="responsive-img collage collage-9 z-depth-1 hoverable"></a>
      </div>
      <div class="col s4 center-align hide-on-med-and-down">
        <h5>LOVE IS MEANT TO BE AN ADVENTURE</h5>
        <button class="waves-effect waves-light btn">Let's Tell Your Story</button>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
      </div>
    </div>
<div class="row">
  <div class="col s12 center-align hide-on-large-only">
    <h5>LOVE IS MEANT TO BE AN ADVENTURE</h5>
    <button class="waves-effect waves-light btn">Let's Tell Your Story</button>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
  </div>
</div>
<div class="row valign-wrapper">
  <div class="divider col s3 l4"></div>
  <div class="col s6 l4 center-align"><h5 class="responsive-text">Come Say Hi On Instagram</h5></div>
  <div class="divider col s3 l4"></div>
</div>
<div class="row">
  <h6 class="center-align"><a href="#" class="responsive-text">OR FOLLOW ALONG</a></h6>
</div>
<div class="row instagram-row">
  <?php echo do_shortcode('[fts_instagram instagram_id=4365244084 pics_count=6 type=user profile_wrap=no super_gallery=yes columns=3 force_columns=yes space_between_photos=10px icon_size=65px hide_date_likes_comments=no]'); ?>
</div>
  <div class="row">
    <div class="col l12 s12">
      <h5 class="center-align"><a href="#" class="responsive-text"></a>JOIN THE AG FAM!</h5>
    </div>
  </div>
  <div class="row">
    <div class="col l12 s12">
      <h6 class="center-align">Get early access + exclusive discounts for new collections, worksops, etc.</h6>
    </div>
  </div>

<!--
<div class="row">
  <form class="col s12">
    <div class="row">
      <div class="input-field col l4 m4 s12">
        <i class="material-icons prefix">account_circle</i>
        <input placeholder="First Name" id="first_name" type="text" class="validate">
      </div>
      <div class="input-field col l4 m4 s12">
        <i class="material-icons prefix">email</i>
        <input placeholder="Email" data-error="wrong" data-success="right" id="email" type="email" class="validate">
      </div>
      <div class="col l4 m4 s12 center-align">
        <button class="btn waves-effect waves-light" type="submit" name="action">Sign Me Up
          <i class="material-icons right">send</i>
        </button>
      </div>
    </div>
  </form>
</div>
-->



<div class="row">
  <?php echo do_shortcode('[formidable id=2 title=false description=false]'); ?>
</div>






</div>

<?php
 get_footer();
