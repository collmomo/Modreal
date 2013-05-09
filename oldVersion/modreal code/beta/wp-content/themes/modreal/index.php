<?php get_header();?>

<!-- Category Filter -->
<?php if (get_field('category_filter', 'option') == "enable") { ?>
<?php if (!is_tag() && !is_search()) { ?>
<ul class="category-filter">
<?php  $MyWalker = new MyWalker(); ?>
<?php $args = array(
	'show_option_all'    => '',
	'orderby'            => 'name',
	'order'              => 'ASC',
	'style'              => 'list',
	'show_count'         => 0,
	'hide_empty'         => 1,
	'use_desc_for_title' => 1,
	'child_of'           => 0,
	'feed'               => '',
	'feed_type'          => '',
	'feed_image'         => '',
	'exclude'            => '',
	'exclude_tree'       => '',
	'include'            => '',
	'hierarchical'       => 1,
	'title_li'           => '',
	'show_option_none'   => 'No categories',
	'number'             => null,
	'echo'               => 1,
	'depth'              => 0,
	'current_category'   => 0,
	'pad_counts'         => 0,
	'taxonomy'           => 'category',
	'walker'             => $MyWalker
); 
?>
<li><a href="#filter=" class="selected">All Posts</a></li>
<?php wp_list_categories($args); ?>
</ul>
<?php } ?>
<?php } ?>

<!-- Grid -->
<div id="main-container">
	<div id="container">
		
	<?php
		if (have_posts()) :
         while (have_posts()) : the_post();
              if(!get_post_format()) {
                   get_template_part('includes/'.'standard');
              } else {
                   get_template_part('includes/'.get_post_format());
              }
            endwhile;
         endif;
         
         /* If No posts */
         if (!have_posts()) { ?>
	         
	         <div class="isotope-post">
		         <div class="entry drop-shadow curved">
		         	
		         	<p>Sorry there are no posts to display.</p>
		         	
		         </div>
	         </div>
	     
	     <?php } ?>

	</div>
</div>

<!-- Load More -->
<div class="isotope-loadmore"><?php posts_nav_link(' &#183; ', 'Older', 'Load More'); ?></div>

<?php get_footer(); ?>   