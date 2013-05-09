<?php
/*-----------------------------------------------------------------------------------*/
/*	Post type: Image
/*-----------------------------------------------------------------------------------*/
?>

<div class="<?php isotope_post(); ?> <?php get_category_slug(); ?> <?php span_size(); ?>">
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
		<?php if( get_field('featured_stamp') ) { ?>
		<div class="featured-stamp">
			<p>FEATURED</p>
		</div>	
		<?php } ?>
	
		<?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it. ?>
		<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
		<a href="<?php fancybox_url($url); ?>" class="<?php fancybox(); ?> entry-image">
			<span class="entry-image-overlay"></span>					
			<?php the_post_thumbnail('full');  ?>
		</a>

		<?php } else { ?>

		<a href="<?php fancybox_url(get_field('image')); ?>" class="<?php fancybox(); ?> entry-image">
			<span class="entry-image-overlay"></span>
			<?php if (get_field('image')) { ?>
			<img src="<?php the_field('image') ?>" alt="" />
			<?php } else { ?>
			<img src="http://placehold.it/306x300">
			<?php } ?>
		</a>
		<?php } ?>

	   	<div class="entry drop-shadow curved ">
	   	
	   		<!-- Title -->
	   		<?php if (get_the_title()) { ?>
	   		<h1 class="heading">
	   			<a href="<?php the_permalink(); ?>">
	   				<?php the_title(); ?>
	   			</a>
	   		</h1>

	   		<!-- Icons -->
	   		<?php if(get_field('post_icons') && (get_field('post_type') !== "Slider")) { ?>
	   		<ul class="social">
		   		<?php while(has_sub_field('post_icons')) { ?>
				<li class="social-button-team right"><a href="<?php the_sub_field('post_icon_url')?>" rel="alternate" data-original-title="<?php the_sub_field('post_icon_title')?>"><img height="20" src="<?php echo get_template_directory_uri(); ?>/img/icons/<?php the_sub_field('post_icon')?>" alt="" /></a></li>
				<?php } ?>
		   	</ul>
		   	<?php } ?>
		   	<?php } ?>

	   		<!-- Content -->
	   		<?php if (!is_single()) { the_excerpt(''); } else { the_content(); } ?>
	   		<div class="clearboth"></div>
	   	
	   		<!-- Meta -->
   		 	<ul class="entry-meta">
   		 		<li class="time"> <?php the_time(); ?> </li>
   		 		<?php if (is_single()) { ?><li class="meta-author"><span class="faded">/</span>&nbsp;&nbsp;&nbsp;by <?php the_author_posts_link(); ?>  </li><?php } ?>
   		 		<li class="meta-comment"><a href="<?php the_permalink(); ?>"><div class="meta-icon"></div> <?php comments_number('0','1','%'); ?></a></li>
   		 		<?php echo getPostLikeLink(get_the_ID());?> 
   		 	</ul>
		</div>
											
	</div>
</div>