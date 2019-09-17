<div class="row">
  <div class="col s12 center">
    <!-- Dropdown Trigger -->
    <a class='dropdown-button btn hide-on-large-only' data-beloworigin="true" href='#' data-activates='dropdown1'>Filter</a>
  </div>
</div>
<nav class="z-depth-0 transparent hide-on-med-and-down">
  <div class="nav-wrapper">
    <div class="nav-center">
      <ul>
        <?php
          $menuitems = wp_get_nav_menu_items( 'Product-Categories', array( 'order' => 'DESC' ) );
          $count = 0;
          $submenu = false;
          foreach( $menuitems as $item ){
              // set up title and url
              $title = $item->title;
              $link = $item->url;

              echo $title;
              echo $link;
            }
        ?>


      </ul>
    </div>
  </div>
</nav>
