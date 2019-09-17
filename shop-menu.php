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
