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
        $taxonomy     = 'product_cat';
        $orderby      = 'name';
        $show_count   = 0;      // 1 for yes, 0 for no
        $pad_counts   = 0;      // 1 for yes, 0 for no
        $hierarchical = 0;      // 1 for yes, 0 for no
        $title        = '';
        $empty        = 0;

        $args = array(
          'taxonomy'     => $taxonomy,
          'orderby'      => $orderby,
          'show_count'   => $show_count,
          'pad_counts'   => $pad_counts,
          'hierarchical' => $hierarchical,
          'title_li'     => $title,
          'hide_empty'   => $empty
        );
        $all_categories = get_categories( $args );
        foreach ($all_categories as $cat) {
          if($cat->category_parent == 0 and $cat->name != 'Uncategorized') {
            $category_id = $cat->term_id;
            echo '<li><a href="'. get_term_link($cat->slug, 'product_cat') .'" class="black-text">'. $cat->name .'</a></li>';
          }
        }?>
      </ul>
    </div>
  </div>
</nav>

<?php
$taxonomy     = 'product_cat';
$orderby      = 'name';
$show_count   = 0;      // 1 for yes, 0 for no
$pad_counts   = 0;      // 1 for yes, 0 for no
$hierarchical = 0;      // 1 for yes, 0 for no
$title        = '';
$empty        = 0;

$args = array(
  'taxonomy'     => $taxonomy,
  'orderby'      => $orderby,
  'show_count'   => $show_count,
  'pad_counts'   => $pad_counts,
  'hierarchical' => $hierarchical,
  'title_li'     => $title,
  'hide_empty'   => $empty
);

echo ('
<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">');
$all_categories = get_categories( $args );
foreach ($all_categories as $cat) {
  if($cat->category_parent == 0 and $cat->name != 'Uncategorized') {
    $category_id = $cat->term_id;
    echo '<li><a href="'. get_term_link($cat->slug, 'product_cat') .'" class="black-text">'. $cat->name .'</a></li>';
  }
}
echo('</ul>');
?>


<?php
$menu_name = 'Product-Categories';
$locations = get_nav_menu_locations();
$menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
$menuitems = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) );
?>

<nav>
<ul class="main-nav">
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
<li class="item">
    <a href="<?php echo $link; ?>" class="title">
        <?php echo $title; ?>
    </a>
<?php endif; ?>

<?php if ( $parent_id == $item->menu_item_parent ): ?>

  <?php if ( !$submenu ): $submenu = true; ?>
            <ul class="sub-menu">
            <?php endif; ?>


            <li class="item">
                                <a href="<?php echo $link; ?>" class="title"><?php echo $title; ?></a>
                            </li>

                            <?php if ( $menuitems[ $count + 1 ]->menu_item_parent != $parent_id && $submenu ): ?>
                                        </ul>
                                        <?php $submenu = false; endif; ?>

                                    <?php endif; ?>

                                    <?php if ( $menuitems[ $count + 1 ]->menu_item_parent != $parent_id ): ?>
    </li>
    <?php $submenu = false; endif; ?>

<?php $count++; endforeach; ?>

  </ul>
</nav>
