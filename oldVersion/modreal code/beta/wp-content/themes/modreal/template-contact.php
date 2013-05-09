<?php
/*
Template Name: Contact
*/
?>
<?php get_header();?>

<!-- Google Maps -->
<div id="map_canvas" style="opacity: 1; width:100%; height:100%"></div>

<div id="main-container">
	<div class="container">
		<?php while (have_posts()) : the_post(); ?>
	
		<?php $my_terms = get_the_terms( $post->ID, 'Skills' ); ?>
		
			<div class="span4">
			
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					
					<!-- Page Title -->
					<div class="page-heading">
						<p><?php the_title(); ?></p>
					</div>				   		
	
				   	<!-- Alerts -->	
				   	<div class="entry drop-shadow curved">
				   		<div class="contact-alerts">
					</div>
					
					<!-- Contact Form  -->
					<form id="contact" action="contact.php">
						<div class="row-fluid">
							<div class="span12">
								<input id="name" type="text" value="" placeholder="Name" name="name">
							</div>		
						</div>			
						
						<div class="row-fluid">
							<div class="span12">
								<input id="email" type="text" value="" placeholder="Email" name="email">
							</div>
						</div>
						
						<div class="row-fluid">
							<div class="span12">
								<textarea id="message" required="" rows="6" placeholder="Message" name="message"></textarea>
							</div>
						</div>
						
						<a class="contact-submit" href="#">Submit</a>

					</form>
				</div>									
			</div>
			<?php endwhile; ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>   