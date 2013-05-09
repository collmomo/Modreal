<div class="mobile-footer">
			<ul>
			<?php if(get_field('footer_icons', 'option')) { ?>
				<?php while(has_sub_field('footer_icons', 'option')) { ?>
					
					<li class="social-button"><a href="<?php the_sub_field('footer_icon_link')?>" rel="alternate" data-original-title="<?php the_sub_field('footer_icon_title')?>"><img height="24" src="<?php echo get_template_directory_uri(); ?>/img/icons/<?php the_sub_field('footer_icon')?>" alt="" /></a></li>
		
				<?php } ?>
			<?php } ?>
		 	</ul>
		 	<p><?php the_field('copyright_text', 'option')?></p>
		</div>
	 
<?php 

/*-----------------------------------------------------------------------------------*/
/*	Google Analytics Code
/*-----------------------------------------------------------------------------------*/

$google_analytics = get_field('google_analytics', 'option'); 
$google_analytics = str_replace("&#039;","'",$google_analytics);
$google_analytics = str_replace("&lt;","<",$google_analytics); 
$google_analytics = str_replace("&quot;",'"',$google_analytics); 
$google_analytics = str_replace("&gt;",'>',$google_analytics); 
	    
echo $google_analytics;

/*-----------------------------------------------------------------------------------*/
/*	Get jQuery scripts with PHP options (functions/jquery.php)
/*-----------------------------------------------------------------------------------*/

jquery_flexslider();
if ( is_page_template('template-contact.php') ) {
jquery_googlemaps();
}
if (!is_single() && !is_page()) {
jquery_isotope();
}
jquery_video();
jquery_audio();
jquery_removep();
jquery_tooltips();
jquery_fancybox();
jquery_dropdown();
jquery_backtotop();
jquery_custom();
?>

<script type="text/javascript">
        jQuery(window).load(function() { // makes sure the whole site is loaded
		    jQuery("#container").css("opacity","1");
		});
</script>

<?php
/*-----------------------------------------------------------------------------------*/
/*	Call Wordpress Footer
/*-----------------------------------------------------------------------------------*/

wp_footer();
?>
  </body>
</html>