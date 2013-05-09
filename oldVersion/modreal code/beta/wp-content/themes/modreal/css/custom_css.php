<?php header("Content-type: text/css; charset: UTF-8"); ?>
<?php 	
if(file_exists('../../../../wp-load.php')) :
		include '../../../../wp-load.php';
	else:
		include '../../../../../wp-load.php';
	endif;  
?>

<?php if ( is_user_logged_in() ) { ?>
body, .navigation {
    margin-top: 0px;
}
body {
    padding-top: 0px;
}
#info-nav {
	top: 97px;
}   
<?php } ?>

<?php if (is_single()) { ?>
.heading { 
	font-size: 16px !important;
}
.post {
	opacity: 1 !important;
}
<?php } ?>

<?php if (get_field('sidenav_static', 'option') == "static") { ?>
.side-nav {
	position: absolute;
}
<?php } ?>

<?php if (get_field('background_color', 'option')) { ?>
body, #preloader {
	background: <?php the_field('background_color', 'option'); ?> !important;
}
<?php } ?>
<?php if (get_field('background_texture', 'option')) { ?>
body, #preloader {
	background: url(<?php echo get_template_directory_uri(); ?>/img/textures/<?php the_field('background_texture', 'option'); ?>.png) !important;
}
<?php } ?>
<?php if (get_field('upload_background', 'option')) { ?>
body, #preloader {
	background: url(<?php the_field('upload_background', 'option'); ?>) !important;
}
<?php } ?>
<?php if (get_field('nav_background', 'option')) { ?>
.navigation {
	background: <?php the_field('nav_background', 'option'); ?> !important;
}
<?php } ?>
<?php if (get_field('nav_background', 'option')) { ?>
.nav-arrow {
	border-left: 20px solid transparent; border-right: 20px solid transparent; border-top: 20px solid <?php the_field('nav_background', 'option'); ?>;
}
<?php } ?>
<?php if (get_field('nav_active', 'option')) { ?>
.selected {
	background: <?php the_field('nav_active', 'option'); ?> url("") no-repeat right center !important;
	color: #fff !important;
}
<?php } ?>
<?php if (get_field('nav_hover', 'option')) { ?>
nav .nav li:hover {
	background: <?php the_field('nav_hover', 'option'); ?>;		
	color: #fff !important;
}
<?php } ?>
<?php if (get_field('post_shadow', 'option')) { ?>
.curved:before {
    box-shadow:20px 0 10px <?php the_field('post_shadow', 'option'); ?>;
}	
<?php } ?>
<?php if (get_field('image_hover_icon', 'option')) { ?>
.entry-image-overlay {
	background: url(<?php echo get_template_directory_uri(); ?>/img/<?php the_field('image_hover_icon', 'option') ?>), url(<?php echo get_template_directory_uri(); ?>/img/overlay_bg.png); background-size:10px 10px, 100% 100%;
	background-position: center; background-repeat: no-repeat;
}
<?php } ?>
<?php if (get_field('upload_hover_icon', 'option')) { ?>
.entry-image-overlay {
	background: url(<?php the_field('upload_hover_icon', 'option') ?>), url(<?php echo get_template_directory_uri(); ?>/img/overlay_bg.png); background-size:10px 10px, 100% 100%;
	background-position: center; background-repeat: no-repeat;
}
<?php } ?>

<?php the_field('custom_css', 'option'); ?>

<?php if (get_field('heading_font', 'option')) { ?>
<?php if (get_field('heading_font', 'option') !== "Default") { ?>
h1, h2, h3, h4, h5, h6 { 
	font-family: '<?php the_field('heading_font', 'option'); ?>'; 
	padding: 0 0 0 0; 
	margin-top: 0; margin-bottom: 12px; margin-left: auto; margin-right: auto; 
	color: #666;
}
<?php } ?>
<?php } ?>

<?php if (get_field('body_font', 'option')) { ?>
<?php if (get_field('body_font', 'option') !== "Default") { ?>
p { 
	width: 100%; 
	padding: 0 0 0 0; 
	margin-bottom: 22px; 
	font-family: '<?php the_field('body_font', 'option'); ?>'; 
	font-size: <?php the_field('body_font_size', 'option'); ?>; 
	line-height: 20px;
	color: #888; 
 	margin-top: 0; 
}
<?php } ?>
<?php } ?>
