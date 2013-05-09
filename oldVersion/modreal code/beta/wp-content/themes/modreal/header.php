<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="utf-8">
    <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />  
    
    <!-- Apple Touch Icon -->
    <?php if (get_field('apple_touch_icon', 'option')) { ?>
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php the_field('apple_touch_icon', 'option'); ?>">
    <?php } ?>
    
    <!--  Favicon -->
    <?php if (get_field('favicon', 'option')) { ?>
    <link rel="shortcut icon" href="<?php the_field('favicon', 'option'); ?>">
    <?php } ?>

    <?php 
    if ( is_singular() && get_option( 'thread_comments' ) ) 	wp_enqueue_script( 'comment-reply' );
    wp_head();
    ?>
</head>

<body <?php body_class(); ?> <?php if ( is_page_template('template-contact.php') ) { ?> onload="initialize()" <?php } ?>>
	
	<div class="preloader"></div>

	<!-- BEGIN Mobile Navigation -->
	<?php if (has_nav_menu( 'header-menu' )) { ?>
	<div class="mobile-nav-container">
		<div class="mobile-nav-bar">
		    <button type="button" class="btn-mobile-nav" data-toggle="collapse" data-target="#mobile-nav"></button>
			
			<!-- Mobile Logo -->
			<?php if (get_field('mobile_logo', 'option')) { ?>
			<div class="logo-image">
				<a>
					<img src="<?php the_field('mobile_logo', 'option'); ?>" alt=""/>	
				</a>
			</div>
			<?php } ?>
		</div>
		
		<!-- Mobile Drop Down -->
		<div id="mobile-nav" class="collapse">
			<ul>
				<?php
				$defaults = array(
			   	'theme_location'  => 'header-menu',
			   	'container'       => 'ul',
			   	'menu_class'      => 'menu',
			   	'echo'            => true,
			   	'fallback_cb'     => 'wp_page_menu',
			   	'items_wrap'      => '%3$s',
			   	'depth'           => 0
			   );
			   ?>
			   <?php wp_nav_menu( $defaults ); ?>
			</ul>
		</div>
	</div>
	<?php } ?>
	<!-- END Mobile Navigation -->
	
	<!-- BEGIN Side Nav -->
	<div class="side-nav">
	
		<!-- Side Nav Logo -->
		<div class="side-nav-logo">
			<a href="<?php echo get_site_url(); ?>">
				<?php if (get_field('logo_image', 'option')) { ?>
				<img src="<?php the_field('logo_image', 'option'); ?>" alt=""/>
				<?php } else { ?>
				<img src="<?php echo get_template_directory_uri(); ?>/img/spaces.png" alt=""/>
				<?php } ?>
			</a>
		</div>
		
		<!-- Side Nav Text -->
		<?php if (get_field('sidenav-text', 'option')) { ?>
		<div class="side-nav-bio">
			<?php the_field('sidenav-text', 'option'); ?>
		</div>
		<?php } ?>
		
		<!-- Side Nav Menu -->
		<ul class="side-nav-menu">
		<?php
		   $the_menu = array(
		   	'theme_location'  => 'header-menu',
		   	'container'       => 'ul',
		   	'menu_class'      => 'menu',
		   	'echo'            => true,
		   	'fallback_cb'     => 'wp_page_menu',
		   	'items_wrap'      => '%3$s',
		   	'depth'           => 0
		   );
		   
		   wp_nav_menu( $the_menu );
		?>
		</ul>
		
		<!-- Side Nav Widgets -->
		<?php dynamic_sidebar('sidebar-widgets'); ?>
		
		<!-- Side Nav Footer -->
		<div class="side-nav-footer">
			<ul>
			<?php if(get_field('footer_icons', 'option')) { ?>
				<?php while(has_sub_field('footer_icons', 'option')) { ?>
					
					<li class="social-button"><a href="<?php the_sub_field('footer_icon_link')?>" rel="alternate" data-original-title="<?php the_sub_field('footer_icon_title')?>"><img height="24" src="<?php echo get_template_directory_uri(); ?>/img/icons/<?php the_sub_field('footer_icon')?>" alt="" /></a></li>
		
				<?php } ?>
			<?php } ?>
		 	</ul>
		 	<p><?php the_field('copyright_text', 'option')?></p>
		</div>
		
	</div>
	<!-- END Side Nav -->
	
	<?php
	/*-----------------------------------------------------------------------------------*/
	/*	Style Switcher
	/*-----------------------------------------------------------------------------------*/
	
	if (get_field('style_switcher', 'option')) { 
		style_switcher();
	} 
	?>