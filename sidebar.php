<!-- sidebar -->
<aside class="sidebar span4" role="complementary">

	<?php get_template_part('searchform'); ?>

  <div class="sidebar-widget">
    <div class="categories row-fluid">
      <?php
        $args = array(
          'orderby' => 'name',
          'parent' => 0,
          'exclude' => '1'
          );
        $categories = get_categories( $args );
        foreach ( $categories as $category ) {
          echo '<a href="' . get_category_link( $category->term_id ) . '">' . $category->name . '</a>';
        }
      ?>
    </div>
  </div>

	<div class="sidebar-widget">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-1')) ?>
	</div>

	<div class="sidebar-widget">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-2')) ?>
	</div>

</aside>
<!-- /sidebar -->