<?php
/*
Template Name: Page Layout
*/
?>
<?php get_header();?>
<div id="main-container">
	<div class="container">
	
		<div class="row">
		<div class="span8">
		<div class="full">
		<?php while (have_posts()) : the_post(); ?>
		<?php $my_terms = get_the_terms( $post->ID, 'Skills' ); ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				
				<?php if( get_field('featured_stamp') ) { ?>
				<div class="featured-stamp">
					<p>FEATURED</p>
				</div>	
				<?php } ?>

				<div class="page-heading">
					<p><?php the_title(); ?></p>
				</div>				   		
	
			   	<div class="entry drop-shadow curved">
			   		<!-- Portfolio Description -->
			   		<?php the_content(); ?>
			   		<div class="clearboth"></div>
				</div>									
			</div>
		<?php endwhile; ?>

		</div>
		<div class="full">
		 	<div class="row no-space">
		 	
		 		<?php $comment_count = get_comment_count($post->ID); ?>
		 		<?php if ($comment_count['approved'] > 0) : ?>
				<div class="full">
					<h3 class="heading"><?php comments_number(); ?></h3>
				</div>
				<?php endif; ?>
				<?php comments_template(); ?>
				
		 	</div>
		</div>
		</div>
		
	</div>
</div>
<?php posts_nav_link(); ?>
<?php get_footer(); ?>   