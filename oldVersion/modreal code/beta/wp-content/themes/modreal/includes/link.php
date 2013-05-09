<?php
/*-----------------------------------------------------------------------------------*/
/*	Post type: Link
/*-----------------------------------------------------------------------------------*/
?>

<div class="<?php isotope_post(); ?> <?php get_category_slug(); ?> <?php span_size(); ?>">
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
		<!-- Link -->		
		<div class="entry-link">
			<?php if (get_field('link_title')) { ?>
			<a href="<?php the_field('link_url'); ?>"><?php the_field('link_title'); ?></a>
			<?php } else { ?>
			<a href="#">No Link Title</a>
			<?php } ?>
			
		</div>				
	   	
	   	<div class="entry drop-shadow curved ">
	   	
	   		<!-- Title -->
	   		<?php if (get_the_title()) { ?>
	   		<h5 class="heading">
	   			<a href="<?php the_permalink(); ?>">
	   				<?php the_title(); ?>
	   			</a>
	   		</h5>

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