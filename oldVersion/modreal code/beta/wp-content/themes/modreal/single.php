<?php get_header();?>
	
<div id="main-container">
	<div class="container">
		
			<div class="row">
				<div class="span7">
					<div class="row no-space">							
						<?php
						if (have_posts()) :
							while (have_posts()) : the_post();
								if(!get_post_format()) {
									get_template_part('includes/'.'standard');
								} else {
									get_template_part('includes/'.get_post_format());
								}
							$args = array(
							'before'           => '<p>' . '',
							'after'            => '</p>',
							'link_before'      => '',
							'link_after'       => '',
							'next_or_number'   => 'number',
							'nextpagelink'     => 'Next page',
							'previouspagelink' => 'Previous page',
							'pagelink'         => '%',
							'echo'             => 1
							); 
							
							?>
	
							<div class="span7 margin-bottom">
								<!-- Tags -->
								<?php if (has_tag()) { ?>
								<div class="tag-cloud">
									 <?php  the_tags('', ' ', '<br />');  ?>
								</div>
								<?php } ?>
								
								<!-- Link Pages -->
								<div class="post-pages">
								<?php custom_wp_link_pages(); ?>
								</div>
							</div>
							
								
							<?php
							endwhile;
						endif;
						?>
						
						<!-- BEGIN Comments -->
						<div class="span7">
						 	<div class="row no-space">
						 	
						 		<?php $comment_count = get_comment_count($post->ID); ?>
						 		<?php if ($comment_count['approved'] > 0) : ?>
						 		<?php if (comments_open()) { ?>
								<div class="full">
									<h3 class="heading"><?php comments_number(); ?></h3>
								</div>
								<?php } ?>
								<?php endif; ?>
								<?php comments_template(); ?>
								
						 	</div>
						 </div>
						 <!-- END Comments -->
						 
					</div>
				</div>	
				
	
				<div class="span3">
					<!-- Next/prev
					<div class="post-pagi">
						<span class="prev-post"><?php previous_post_link('%link', '', TRUE); ?></span>
						<span class="next-post"><?php next_post_link('%link', '', TRUE); ?></span>
					</div> -->
					<?php dynamic_sidebar('post-widgets'); ?>
				</div>
				
			</div>
	
		</div> <!--END .container -->     
	</div> <!--END #main-container -->

<?php get_footer(); ?>