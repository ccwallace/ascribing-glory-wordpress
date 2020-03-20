<?php $menuitems = wp_get_nav_menu_items( 'Product-Categories', array( 'order' => 'DESC' ) ); ?>
<div class="row hide-on-med-and-up">
  <div class="col s12 center">
    <!-- Dropdown Trigger -->
    <a class='dropdown-button btn hide-on-large-only' data-beloworigin="true" href='#' data-activates='dropdown1'>Categories</a>
  </div>
</div>
<nav class="z-depth-0 transparent hide-on-med-and-down">
  <div class="nav-wrapper">
    <div class="nav-center">
      <ul>
        <?php
        $count = 0;
        $submenu = false;

  foreach( $menuitems as $item ):
    // set up title and url
    $title = $item->title;
    $link = $item->url;

    // item does not have a parent so menu_item_parent equals 0 (false)
    if ( !$item->menu_item_parent ):
      // save this id for later comparison with sub-menu items
      $parent_id = $item->ID;
      ?>
      <li class="item"><a href="<?php echo $link; ?>" style="color: #8cdbd4;"><?php echo $title; ?></a>
      <?php endif; ?>
      <?php if ( $parent_id == $item->menu_item_parent ): ?>
        <?php if ( !$submenu ): $submenu = true; ?>
          <ul>
          <?php endif; ?>
            <li class="item"><a href="<?php echo $link; ?>" style="text-transform: uppercase;"><?php echo $title; ?></a></li>
          <?php if ( $menuitems[ $count + 1 ]->menu_item_parent != $parent_id && $submenu ): ?>
          </ul>
          <?php $submenu = false; endif; ?>
        <?php endif; ?>
        </li>
        <?php $count++; endforeach; ?>
      </ul>
    </div>
  </div>
</nav>
<ul id="dropdown1" class="dropdown-content">
  <?php
  $count = 0;
  $submenu = false;

foreach( $menuitems as $item ):
// set up title and url
$title = $item->title;
$link = $item->url;

// item does not have a parent so menu_item_parent equals 0 (false)
if ( !$item->menu_item_parent ):
// save this id for later comparison with sub-menu items
$parent_id = $item->ID;
?>
<li class="item"><a href="<?php echo $link; ?>" style="color:#8cdbd4;"><?php echo $title; ?></a>
<?php endif; ?>
<?php if ( $parent_id == $item->menu_item_parent ): ?>
  <?php if ( !$submenu ): $submenu = true; ?>
    <ul>
    <?php endif; ?>
      <li class="item"><a href="<?php echo $link; ?>"><?php echo $title; ?></a></li>
    <?php if ( $menuitems[ $count + 1 ]->menu_item_parent != $parent_id && $submenu ): ?>
    </ul>
    <?php $submenu = false; endif; ?>
  <?php endif; ?>
  </li>
  <?php $count++; endforeach; ?>
</ul>
