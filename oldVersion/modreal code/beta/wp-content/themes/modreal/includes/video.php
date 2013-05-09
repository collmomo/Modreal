<?php
/*-----------------------------------------------------------------------------------*/
/*	Post type: Video
/*-----------------------------------------------------------------------------------*/
?>
<?php
/*-----------------------------------------------------------------------------------*/
/*	Video Variables
/*-----------------------------------------------------------------------------------*/

/* Video Height */
$videoheight = get_field('video_height');

/* Video ID */
$videoid = get_the_ID();

/* Video Poster */
$videoposter = get_field('video_poster');

/* Video URL */
if (get_field('video_upload')) { 
$videourl = get_field('video_upload'); 
} else { 
$videourl = get_field('video_url'); 
}

/* Video Height */
$videoheight = get_field('video_height');
?>		
<div class="<?php isotope_post(); ?> <?php get_category_slug(); ?> <?php span_size(); ?>">
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
		<!-- Video -->
		<div data-video-height="<?php echo $videoheight; ?>" data-video-poster="<?php echo $videoposter ?>" data-video-url="<?php echo $videourl ?>" id="jquery_jplayer_<?php echo $videoid ?>" data-video-id="<?php echo $videoid; ?>"  class="jp-jplayer"></div>
			
			<div id="jp_container_<?php echo get_the_ID(); ?>">
				<div class="jp-type-playlist">
					<div class="jp-video-play">
					</div>
					<div class="jp-gui jp-interface">
						<ul class="jp-controls">
							<li><a href="javascript:;" class="jp-previous" tabindex="1">previous</a></li>
							<li><a href="javascript:;" class="jp-play" tabindex="1">play</a></li>
							<li><a href="javascript:;" class="jp-pause" tabindex="1">pause</a></li>
							<li><a href="javascript:;" class="jp-next" tabindex="1">next</a></li>
							<li><a href="javascript:;" class="jp-stop" tabindex="1">stop</a></li>
							<li><a href="javascript:;" class="jp-mute" tabindex="1" title="mute">mute</a></li>
							<li><a href="javascript:;" class="jp-unmute" tabindex="1" title="unmute">unmute</a></li>
							<li><a href="javascript:;" class="jp-volume-max" tabindex="1" title="max volume">max volume</a></li>
						</ul>
						<div class="jp-progress">
							<div class="jp-seek-bar">
								<div class="jp-play-bar"></div>
							</div>
						</div>
						<div class="jp-volume-bar">
							<div class="jp-volume-bar-value"></div>
						</div>
						<div class="jp-time-holder">
							<div class="jp-current-time"></div>
							<div class="jp-duration"></div>
						</div>
						<ul class="jp-toggles">
							<li><a href="javascript:;" class="jp-shuffle" tabindex="1" title="shuffle">shuffle</a></li>
							<li><a href="javascript:;" class="jp-shuffle-off" tabindex="1" title="shuffle off">shuffle off</a></li>
							<li><a href="javascript:;" class="jp-repeat" tabindex="1" title="repeat">repeat</a></li>
							<li><a href="javascript:;" class="jp-repeat-off" tabindex="1" title="repeat off">repeat off</a></li>
						</ul>
					</div>
				</div>
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