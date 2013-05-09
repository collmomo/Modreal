<?php

/**
 * Register field groups
 * The register_field_group function accepts 1 array which holds the relevant data to register a field group
 * You may edit the array as you see fit. However, this may result in errors if the array is not compatible with ACF
 * This code must run every time the functions.php file is read
 */

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => '515c188b58186',
		'title' => 'General',
		'fields' => 
		array (
			0 => 
			array (
				'key' => 'field_94',
				'label' => 'Icons',
				'name' => '',
				'type' => 'tab',
				'order_no' => 0,
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_42',
							'operator' => '==',
							'value' => 'Light',
						),
					),
					'allorany' => 'all',
				),
			),
			1 => 
			array (
				'key' => 'field_108',
				'label' => 'Post Icons',
				'name' => 'post_icons',
				'type' => 'repeater',
				'order_no' => 1,
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_102',
							'operator' => '==',
							'value' => 'Full',
						),
					),
					'allorany' => 'all',
				),
				'sub_fields' => 
				array (
					'field_109' => 
					array (
						'choices' => 
						array (
							'glyphicons_360_pinterest@2x.png' => 'Pinterest',
							'glyphicons_361_dropbox@2x.png' => 'Dropbox',
							'glyphicons_386_google_plus@2x.png' => 'Google +',
							'glyphicons_363_jolicloud@2x.png' => 'Joli Cloud',
							'glyphicons_364_yahoo@2x.png' => 'Yahoo',
							'glyphicons_365_blogger@2x.png' => 'Blogger',
							'glyphicons_366_picasa@2x.png' => 'Picasa',
							'glyphicons_368_tumblr@2x.png' => 'Tumblr',
							'glyphicons_369_wordpress@2x.png' => 'Wordpress',
							'glyphicons_374_dribbble@2x.png' => 'Dribbble',
							'glyphicons_375_deviantart@2x.png' => 'Deviant Art',
							'glyphicons_377_linked_in@2x.png' => 'LinkedIn',
							'glyphicons_378_forrst@2x.png' => 'Forrst',
							'glyphicons_379_pinboard@2x.png' => 'Pinboard',
							'glyphicons_380_behance@2x.png' => 'Behance',
							'glyphicons_381_github@2x.png' => 'Gitbhub',
							'glyphicons_382_youtube@2x.png' => 'Youtube',
							'glyphicons_385_quora@2x.png' => 'Quora',
							'glyphicons_387_spotify@2x.png' => 'Spotify',
							'glyphicons_388_stumbleupon@2x.png' => 'Stumbleupon',
							'glyphicons_390_facebook@2x.png' => 'Facebook',
							'glyphicons_392_twitter@2x.png' => 'Twitter',
							'glyphicons_394_vimeo@2x.png' => 'Vimeo',
							'glyphicons_395_flickr@2x.png' => 'Flickr',
							'glyphicons_399_e-mail@2x.png' => 'Email',
							'glyphicons_012_heart@2x.png' => 'Heart',
							'glyphicons_015_print@2x.png' => 'Print',
							'glyphicons_017_music@2x.png' => 'Music',
							'glyphicons_027_search@2x.png' => 'Search',
							'glyphicons_029_notes_2@2x.png' => 'Notes',
							'glyphicons_030_pencil@2x.png' => 'Pencil',
							'glyphicons_045_calendar@2x.png' => 'Calender',
							'glyphicons_049_star@2x.png' => 'Star',
							'glyphicons_050_link@2x.png' => 'Link',
							'glyphicons_062_attach@2x.png' => 'Paper Clip',
							'glyphicons_063_power@2x.png' => 'Power',
							'glyphicons_064_lightbulb@2x.png' => 'Lightbulb',
							'glyphicons_074_cup@2x.png' => 'Trophy',
						),
						'label' => 'Icon',
						'name' => 'post_icon',
						'type' => 'select',
						'instructions' => 'Select an icon to display in your post',
						'column_width' => '',
						'default_value' => '',
						'allow_null' => 0,
						'multiple' => 0,
						'order_no' => 0,
						'key' => 'field_109',
					),
					'field_110' => 
					array (
						'label' => 'Icon Url',
						'name' => 'post_icon_url',
						'type' => 'text',
						'instructions' => 'Specify where you would like the icon to link to',
						'column_width' => '',
						'default_value' => '',
						'formatting' => 'none',
						'order_no' => 1,
						'key' => 'field_110',
					),
					'field_111' => 
					array (
						'label' => 'Icon Title',
						'name' => 'post_icon_title',
						'type' => 'text',
						'instructions' => 'Specify a tooltip title for your icon',
						'column_width' => '',
						'default_value' => '',
						'formatting' => 'html',
						'order_no' => 2,
						'key' => 'field_111',
					),
				),
				'row_min' => 0,
				'row_limit' => '',
				'layout' => 'table',
				'button_label' => 'Add Row',
			),
			2 => 
			array (
				'key' => 'field_113',
				'label' => 'Featured Stamp',
				'name' => '',
				'type' => 'tab',
				'order_no' => 2,
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_42',
							'operator' => '==',
							'value' => 'Light',
						),
					),
					'allorany' => 'all',
				),
			),
			3 => 
			array (
				'key' => 'field_112',
				'label' => 'Featured Stamp',
				'name' => 'featured_stamp',
				'type' => 'true_false',
				'order_no' => 3,
				'instructions' => 'Enabling this option will add a featured stamp to the corner of your image. (Must be using either image or slider)',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_42',
							'operator' => '==',
							'value' => 'Light',
						),
					),
					'allorany' => 'all',
				),
				'message' => 'Enable Featured Stamp',
			),
		),
		'location' => 
		array (
			'rules' => 
			array (
				0 => 
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'portfolio',
					'order_no' => 0,
				),
				1 => 
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'post',
					'order_no' => 1,
				),
				2 => 
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'custom_page',
					'order_no' => 2,
				),
			),
			'allorany' => 'any',
		),
		'options' => 
		array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => 
			array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => '515c188b59639',
		'title' => 'General Options',
		'fields' => 
		array (
			0 => 
			array (
				'key' => 'field_64',
				'label' => 'Logo',
				'name' => '',
				'type' => 'tab',
				'order_no' => 0,
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'null',
							'operator' => '==',
							'value' => '',
						),
					),
					'allorany' => 'all',
				),
			),
			1 => 
			array (
				'key' => 'field_67',
				'label' => 'Logo Image',
				'name' => 'logo_image',
				'type' => 'image',
				'order_no' => 1,
				'instructions' => 'Enter your image for the logo',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_79',
							'operator' => '==',
							'value' => 'DateTime',
						),
					),
					'allorany' => 'any',
				),
				'save_format' => 'url',
				'preview_size' => 'full',
			),
			2 => 
			array (
				'key' => 'field_135',
				'label' => 'Mobile Logo',
				'name' => 'mobile_logo',
				'type' => 'image',
				'order_no' => 2,
				'instructions' => 'Please upload a logo for display on mobile view',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_79',
							'operator' => '==',
							'value' => 'DateTime',
						),
					),
					'allorany' => 'all',
				),
				'save_format' => 'url',
				'preview_size' => 'full',
			),
			3 => 
			array (
				'key' => 'field_69',
				'label' => 'Sidenav',
				'name' => 'sidenav_text',
				'type' => 'tab',
				'order_no' => 3,
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_79',
							'operator' => '==',
							'value' => 'DateTime',
						),
					),
					'allorany' => 'all',
				),
			),
			4 => 
			array (
				'key' => 'field_124',
				'label' => 'Sidenav Text',
				'name' => 'sidenav-text',
				'type' => 'wysiwyg',
				'order_no' => 4,
				'instructions' => 'Enter the text you would like to have displayed beneath the logo',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_141',
							'operator' => '==',
							'value' => 'enable',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'yes',
				'the_content' => 'no',
			),
			5 => 
			array (
				'key' => 'field_141',
				'label' => 'Sidenav Static',
				'name' => 'sidenav_static',
				'type' => 'select',
				'order_no' => 5,
				'instructions' => 'Choose whether you would like a fix or static side bar. If using multiple widgets, \'Static\' is recommended.',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_79',
							'operator' => '==',
							'value' => 'DateTime',
						),
					),
					'allorany' => 'all',
				),
				'choices' => 
				array (
					'fixed' => 'Fixed',
					'static' => 'Static',
				),
				'default_value' => 'fixed',
				'allow_null' => 0,
				'multiple' => 0,
			),
			6 => 
			array (
				'key' => 'field_77',
				'label' => 'General',
				'name' => 'general',
				'type' => 'tab',
				'order_no' => 6,
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_141',
							'operator' => '==',
							'value' => 'fixed',
						),
					),
					'allorany' => 'all',
				),
			),
			7 => 
			array (
				'key' => 'field_142',
				'label' => 'Image Lightbox',
				'name' => 'image_lightbox',
				'type' => 'select',
				'order_no' => 7,
				'instructions' => 'Enable/Disable lightbox for Images. Clicking on an image with Lightbox disabled will link to the post.',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_141',
							'operator' => '==',
							'value' => 'fixed',
						),
					),
					'allorany' => 'all',
				),
				'choices' => 
				array (
					'enable' => 'Enable',
					'disable' => 'Disable',
				),
				'default_value' => 'Enable',
				'allow_null' => 0,
				'multiple' => 0,
			),
			8 => 
			array (
				'key' => 'field_143',
				'label' => 'Category Filter',
				'name' => 'category_filter',
				'type' => 'select',
				'order_no' => 8,
				'instructions' => 'Disable/Enable the dynamic category filter',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_141',
							'operator' => '==',
							'value' => 'fixed',
						),
					),
					'allorany' => 'all',
				),
				'choices' => 
				array (
					'enable' => 'Enable',
					'disable' => 'Disable',
				),
				'default_value' => '',
				'allow_null' => 0,
				'multiple' => 0,
			),
			9 => 
			array (
				'key' => 'field_78',
				'label' => 'Grid Animation Duration',
				'name' => 'grid_animation_duration',
				'type' => 'number',
				'order_no' => 9,
				'instructions' => 'Set the animation duration for the grid',
				'required' => 1,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_141',
							'operator' => '==',
							'value' => 'fixed',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => 800,
			),
			10 => 
			array (
				'key' => 'field_62',
				'label' => 'Google Analytics',
				'name' => '',
				'type' => 'tab',
				'order_no' => 10,
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'null',
							'operator' => '==',
							'value' => '',
						),
					),
					'allorany' => 'all',
				),
			),
			11 => 
			array (
				'key' => 'field_61',
				'label' => 'Google Analytics',
				'name' => 'google_analytics',
				'type' => 'textarea',
				'order_no' => 11,
				'instructions' => 'Enter your Google analytics code',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_65',
							'operator' => '==',
							'value' => 'None',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'formatting' => 'none',
			),
			12 => 
			array (
				'key' => 'field_70',
				'label' => 'Google Maps',
				'name' => '',
				'type' => 'tab',
				'order_no' => 12,
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_65',
							'operator' => '==',
							'value' => 'None',
						),
					),
					'allorany' => 'all',
				),
			),
			13 => 
			array (
				'key' => 'field_71',
				'label' => 'API Key',
				'name' => 'api_key',
				'type' => 'text',
				'order_no' => 13,
				'instructions' => 'Please enter your google maps API Key. You can get a free API key from http://developers.google.com',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_65',
							'operator' => '==',
							'value' => 'None',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'formatting' => 'none',
			),
			14 => 
			array (
				'key' => 'field_72',
				'label' => 'Latitude',
				'name' => 'latitude',
				'type' => 'text',
				'order_no' => 14,
				'instructions' => 'Enter the latitude for the location you want to display',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_65',
							'operator' => '==',
							'value' => 'None',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => 41.385,
				'formatting' => 'none',
			),
			15 => 
			array (
				'key' => 'field_73',
				'label' => 'Longitude',
				'name' => 'longitude',
				'type' => 'text',
				'order_no' => 15,
				'instructions' => 'Enter the longitude for the location you want to display',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_65',
							'operator' => '==',
							'value' => 'None',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => 2.169,
				'formatting' => 'none',
			),
			16 => 
			array (
				'key' => 'field_76',
				'label' => 'Custom Bubble',
				'name' => 'bubble',
				'type' => 'image',
				'order_no' => 16,
				'instructions' => 'Upload a custom bubble image to display on your map',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_65',
							'operator' => '==',
							'value' => 'None',
						),
					),
					'allorany' => 'all',
				),
				'save_format' => 'url',
				'preview_size' => 'full',
			),
			17 => 
			array (
				'key' => 'field_80',
				'label' => 'Slider',
				'name' => '',
				'type' => 'tab',
				'order_no' => 17,
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_65',
							'operator' => '==',
							'value' => 'None',
						),
					),
					'allorany' => 'all',
				),
			),
			18 => 
			array (
				'key' => 'field_81',
				'label' => 'Animation Style',
				'name' => 'slider_animation',
				'type' => 'select',
				'order_no' => 18,
				'instructions' => 'Select your animation style',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_65',
							'operator' => '==',
							'value' => 'None',
						),
					),
					'allorany' => 'all',
				),
				'choices' => 
				array (
					'slide' => 'Slide',
					'fade' => 'Fade',
				),
				'default_value' => 'Slide',
				'allow_null' => 0,
				'multiple' => 0,
			),
			19 => 
			array (
				'key' => 'field_83',
				'label' => 'Slider Slideshow',
				'name' => 'slider_slideshow',
				'type' => 'true_false',
				'order_no' => 19,
				'instructions' => 'This option will animate the slider automatically',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_65',
							'operator' => '==',
							'value' => 'None',
						),
					),
					'allorany' => 'all',
				),
				'message' => 'Enable Slideshow',
			),
			20 => 
			array (
				'key' => 'field_85',
				'label' => 'Slideshow Speed',
				'name' => 'slideshow_speed',
				'type' => 'number',
				'order_no' => 20,
				'instructions' => 'Set the speed for the slideshow. (Lower the value, the faster it goes)',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 1,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_83',
							'operator' => '==',
							'value' => 1,
						),
					),
					'allorany' => 'any',
				),
				'default_value' => 7000,
			),
			21 => 
			array (
				'key' => 'field_86',
				'label' => 'Animation Speed',
				'name' => 'slider_animation_speed',
				'type' => 'number',
				'order_no' => 21,
				'instructions' => 'Set the animation speed for the slider',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_65',
							'operator' => '==',
							'value' => 'None',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => 600,
			),
			22 => 
			array (
				'key' => 'field_95',
				'label' => 'Footer',
				'name' => '',
				'type' => 'tab',
				'order_no' => 22,
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_65',
							'operator' => '==',
							'value' => 'None',
						),
					),
					'allorany' => 'all',
				),
			),
			23 => 
			array (
				'key' => 'field_104',
				'label' => 'Footer Icons',
				'name' => 'footer_icons',
				'type' => 'repeater',
				'order_no' => 23,
				'instructions' => 'Add an icon to your footer',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_65',
							'operator' => '==',
							'value' => 'None',
						),
					),
					'allorany' => 'all',
				),
				'sub_fields' => 
				array (
					'field_105' => 
					array (
						'choices' => 
						array (
							'glyphicons_360_pinterest@2x.png' => 'Pinterest',
							'glyphicons_361_dropbox@2x.png' => 'Dropbox',
							'glyphicons_386_google_plus@2x.png' => 'Google +',
							'glyphicons_363_jolicloud@2x.png' => 'Joli Cloud',
							'glyphicons_364_yahoo@2x.png' => 'Yahoo',
							'glyphicons_365_blogger@2x.png' => 'Blogger',
							'glyphicons_366_picasa@2x.png' => 'Picasa',
							'glyphicons_368_tumblr@2x.png' => 'Tumblr',
							'glyphicons_369_wordpress@2x.png' => 'Wordpress',
							'glyphicons_374_dribbble@2x.png' => 'Dribbble',
							'glyphicons_375_deviantart@2x.png' => 'Deviant Art',
							'glyphicons_377_linked_in@2x.png' => 'LinkedIn',
							'glyphicons_378_forrst@2x.png' => 'Forrst',
							'glyphicons_379_pinboard@2x.png' => 'Pinboard',
							'glyphicons_380_behance@2x.png' => 'Behance',
							'glyphicons_381_github@2x.png' => 'Gitbhub',
							'glyphicons_382_youtube@2x.png' => 'Youtube',
							'glyphicons_385_quora@2x.png' => 'Quora',
							'glyphicons_387_spotify@2x.png' => 'Spotify',
							'glyphicons_388_stumbleupon@2x.png' => 'Stumbleupon',
							'glyphicons_390_facebook@2x.png' => 'Facebook',
							'glyphicons_392_twitter@2x.png' => 'Twitter',
							'glyphicons_394_vimeo@2x.png' => 'Vimeo',
							'glyphicons_395_flickr@2x.png' => 'Flickr',
							'glyphicons_399_e-mail@2x.png' => 'Email',
							'glyphicons_012_heart@2x.png' => 'Heart',
							'glyphicons_015_print@2x.png' => 'Print',
							'glyphicons_017_music@2x.png' => 'Music',
							'glyphicons_027_search@2x.png' => 'Search',
							'glyphicons_029_notes_2@2x.png' => 'Notes',
							'glyphicons_030_pencil@2x.png' => 'Pencil',
							'glyphicons_045_calendar@2x.png' => 'Calender',
							'glyphicons_049_star@2x.png' => 'Star',
							'glyphicons_050_link@2x.png' => 'Link',
							'glyphicons_062_attach@2x.png' => 'Paper Clip',
							'glyphicons_063_power@2x.png' => 'Power',
							'glyphicons_064_lightbulb@2x.png' => 'Lightbulb',
							'glyphicons_074_cup@2x.png' => 'Trophy',
						),
						'label' => 'Footer Icon',
						'name' => 'footer_icon',
						'type' => 'select',
						'instructions' => 'Select an icon which you would like to display',
						'column_width' => '',
						'default_value' => '',
						'allow_null' => 0,
						'multiple' => 0,
						'order_no' => 0,
						'key' => 'field_105',
					),
					'field_106' => 
					array (
						'label' => 'Footer Icon Link',
						'name' => 'footer_icon_link',
						'type' => 'text',
						'instructions' => 'Specify where you would like the icon to link to',
						'column_width' => '',
						'default_value' => '',
						'formatting' => 'none',
						'order_no' => 1,
						'key' => 'field_106',
					),
					'field_107' => 
					array (
						'label' => 'Footer icon title',
						'name' => 'footer_icon_title',
						'type' => 'text',
						'instructions' => 'Specify a tooltip title for your icon',
						'column_width' => '',
						'default_value' => '',
						'formatting' => 'html',
						'order_no' => 2,
						'key' => 'field_107',
					),
				),
				'row_min' => 0,
				'row_limit' => '',
				'layout' => 'table',
				'button_label' => 'Add Row',
			),
			24 => 
			array (
				'key' => 'field_100',
				'label' => 'Copyright Text',
				'name' => 'copyright_text',
				'type' => 'text',
				'order_no' => 24,
				'instructions' => 'Enter the copyright text you would like to display on the footer',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_65',
							'operator' => '==',
							'value' => 'None',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'formatting' => 'html',
			),
			25 => 
			array (
				'key' => 'field_122',
				'label' => 'Favicon',
				'name' => 'favicon_&_touch_icon',
				'type' => 'tab',
				'order_no' => 25,
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_65',
							'operator' => '==',
							'value' => 'None',
						),
					),
					'allorany' => 'all',
				),
			),
			26 => 
			array (
				'key' => 'field_121',
				'label' => 'Favicon',
				'name' => 'favicon',
				'type' => 'image',
				'order_no' => 26,
				'instructions' => 'Upload a favicon',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_65',
							'operator' => '==',
							'value' => 'None',
						),
					),
					'allorany' => 'all',
				),
				'save_format' => 'url',
				'preview_size' => 'full',
			),
			27 => 
			array (
				'key' => 'field_123',
				'label' => 'Apple Touch Icon',
				'name' => 'apple_touch_icon',
				'type' => 'image',
				'order_no' => 27,
				'instructions' => 'Apple Touch Icon is the icon that will be displayed when a user saves the website on to their homescreen',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_65',
							'operator' => '==',
							'value' => 'None',
						),
					),
					'allorany' => 'all',
				),
				'save_format' => 'url',
				'preview_size' => 'full',
			),
		),
		'location' => 
		array (
			'rules' => 
			array (
				0 => 
				array (
					'param' => 'options_page',
					'operator' => '==',
					'value' => 'acf-options',
					'order_no' => 0,
				),
			),
			'allorany' => 'all',
		),
		'options' => 
		array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => 
			array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => '515c188b5f935',
		'title' => 'Post Format',
		'fields' => 
		array (
			0 => 
			array (
				'key' => 'field_4',
				'label' => 'Gallery',
				'name' => 'gallery',
				'type' => 'tab',
				'order_no' => 0,
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'null',
							'operator' => '==',
							'value' => '',
						),
					),
					'allorany' => 'all',
				),
			),
			1 => 
			array (
				'key' => 'field_115',
				'label' => 'Slider Images',
				'name' => 'slider_images',
				'type' => 'repeater',
				'order_no' => 1,
				'instructions' => 'Click "Add row" and upload an image. You can upload multiple slides by clicking "Add row"',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_3',
							'operator' => '==',
							'value' => 'Regular',
						),
					),
					'allorany' => 'all',
				),
				'sub_fields' => 
				array (
					'field_116' => 
					array (
						'label' => 'Slider Image',
						'name' => 'slider_image',
						'type' => 'image',
						'instructions' => 'Upload an image for your slider',
						'column_width' => '',
						'save_format' => 'url',
						'preview_size' => 'thumbnail',
						'order_no' => 0,
						'key' => 'field_116',
					),
				),
				'row_min' => 0,
				'row_limit' => '',
				'layout' => 'table',
				'button_label' => 'Add Row',
			),
			2 => 
			array (
				'key' => 'field_25',
				'label' => 'Image',
				'name' => '',
				'type' => 'tab',
				'order_no' => 2,
				'instructions' => 'Please select the post type you would like to display. Further options for each post type are available in the tabs.',
				'required' => 1,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_3',
							'operator' => '==',
							'value' => 'Image',
						),
					),
					'allorany' => 'all',
				),
			),
			3 => 
			array (
				'key' => 'field_24',
				'label' => 'Image',
				'name' => 'image',
				'type' => 'image',
				'order_no' => 3,
				'instructions' => 'Display an image with your post',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_3',
							'operator' => '==',
							'value' => 'Image',
						),
					),
					'allorany' => 'all',
				),
				'save_format' => 'url',
				'preview_size' => 'thumbnail',
			),
			4 => 
			array (
				'key' => 'field_132',
				'label' => 'Link',
				'name' => '',
				'type' => 'tab',
				'order_no' => 4,
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'null',
							'operator' => '==',
							'value' => '',
						),
					),
					'allorany' => 'all',
				),
			),
			5 => 
			array (
				'key' => 'field_133',
				'label' => 'Link Title',
				'name' => 'link_title',
				'type' => 'text',
				'order_no' => 5,
				'instructions' => 'Enter the title you would like to display for the link',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'null',
							'operator' => '==',
							'value' => '',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'formatting' => 'none',
			),
			6 => 
			array (
				'key' => 'field_134',
				'label' => 'Link URL',
				'name' => 'link_url',
				'type' => 'text',
				'order_no' => 6,
				'instructions' => 'Enter the url for the link',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'null',
							'operator' => '==',
							'value' => '',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'formatting' => 'html',
			),
			7 => 
			array (
				'key' => 'field_23',
				'label' => 'Quote',
				'name' => '',
				'type' => 'tab',
				'order_no' => 7,
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_3',
							'operator' => '==',
							'value' => 'Image/text',
						),
					),
					'allorany' => 'all',
				),
			),
			8 => 
			array (
				'key' => 'field_22',
				'label' => 'Quote',
				'name' => 'the_quote',
				'type' => 'textarea',
				'order_no' => 8,
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_3',
							'operator' => '==',
							'value' => 'Image/text',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'formatting' => 'none',
			),
			9 => 
			array (
				'key' => 'field_15',
				'label' => 'Video',
				'name' => '',
				'type' => 'tab',
				'order_no' => 9,
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_3',
							'operator' => '==',
							'value' => 'Image/text',
						),
					),
					'allorany' => 'all',
				),
			),
			10 => 
			array (
				'key' => 'field_21',
				'label' => 'Video Height',
				'name' => 'video_height',
				'type' => 'text',
				'order_no' => 10,
				'instructions' => 'Please specify your video height',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_3',
							'operator' => '==',
							'value' => 'Image/text',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '280px',
				'formatting' => 'none',
			),
			11 => 
			array (
				'key' => 'field_16',
				'label' => 'Video Upload',
				'name' => 'video_upload',
				'type' => 'file',
				'order_no' => 11,
				'instructions' => 'Upload a video',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_3',
							'operator' => '==',
							'value' => 'Image/text',
						),
					),
					'allorany' => 'all',
				),
				'save_format' => 'url',
			),
			12 => 
			array (
				'key' => 'field_125',
				'label' => 'Video URL',
				'name' => 'video_url',
				'type' => 'text',
				'order_no' => 12,
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_3',
							'operator' => '==',
							'value' => 'Regular',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'formatting' => 'none',
			),
			13 => 
			array (
				'key' => 'field_136',
				'label' => 'Video Poster',
				'name' => 'video_poster',
				'type' => 'image',
				'order_no' => 13,
				'instructions' => 'Upload an image for the video',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'null',
							'operator' => '==',
						),
					),
					'allorany' => 'all',
				),
				'save_format' => 'url',
				'preview_size' => 'full',
			),
			14 => 
			array (
				'key' => 'field_18',
				'label' => 'Audio',
				'name' => '',
				'type' => 'tab',
				'order_no' => 14,
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_3',
							'operator' => '==',
							'value' => 'Image/text',
						),
					),
					'allorany' => 'all',
				),
			),
			15 => 
			array (
				'key' => 'field_19',
				'label' => 'Audio Upload',
				'name' => 'audio_upload',
				'type' => 'file',
				'order_no' => 15,
				'instructions' => 'Upload an MP3 File',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_3',
							'operator' => '==',
							'value' => 'Image/text',
						),
					),
					'allorany' => 'all',
				),
				'save_format' => 'url',
			),
			16 => 
			array (
				'key' => 'field_126',
				'label' => 'Audio URL',
				'name' => 'audio_url',
				'type' => 'text',
				'order_no' => 16,
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_3',
							'operator' => '==',
							'value' => 'Regular',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'formatting' => 'none',
			),
		),
		'location' => 
		array (
			'rules' => 
			array (
				0 => 
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'post',
					'order_no' => 0,
				),
				1 => 
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'post',
					'order_no' => 1,
				),
				2 => 
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'post',
					'order_no' => 2,
				),
			),
			'allorany' => 'any',
		),
		'options' => 
		array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => 
			array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => '515c188b62a80',
		'title' => 'Styling',
		'fields' => 
		array (
			0 => 
			array (
				'key' => 'field_129',
				'label' => 'Color Theme',
				'name' => 'color_theme',
				'type' => 'tab',
				'order_no' => 0,
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_40',
							'operator' => '==',
							'value' => 'bgnoise_lg',
						),
					),
					'allorany' => 'all',
				),
			),
			1 => 
			array (
				'key' => 'field_130',
				'label' => 'Theme Style',
				'name' => 'theme_style',
				'type' => 'select',
				'order_no' => 1,
				'instructions' => 'Please select the color theme you would like to use. ',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_40',
							'operator' => '==',
							'value' => 'bgnoise_lg',
						),
					),
					'allorany' => 'all',
				),
				'choices' => 
				array (
					'Ultra Light' => 'Ultra Light',
					'Light' => 'Light',
					'Dark' => 'Dark',
				),
				'default_value' => 'Light',
				'allow_null' => 0,
				'multiple' => 0,
			),
			2 => 
			array (
				'key' => 'field_137',
				'label' => 'Style Switcher',
				'name' => 'style_switcher',
				'type' => 'checkbox',
				'order_no' => 2,
				'instructions' => 'This option enables the style switcher, to allow users to instantly switch between color themes. (This feature is intended only for demo purposes)',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_130',
							'operator' => '==',
							'value' => 'Ultra Light',
						),
					),
					'allorany' => 'all',
				),
				'choices' => 
				array (
					'enable' => 'Enable Style Switcher',
				),
			),
			3 => 
			array (
				'key' => 'field_38',
				'label' => 'Background',
				'name' => 'styling_options',
				'type' => 'tab',
				'order_no' => 3,
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_36',
							'operator' => '==',
							'value' => 'None',
						),
					),
					'allorany' => 'all',
				),
			),
			4 => 
			array (
				'key' => 'field_39',
				'label' => 'Background Color',
				'name' => 'background_color',
				'type' => 'color_picker',
				'order_no' => 4,
				'instructions' => 'Specify a custom background color',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_36',
							'operator' => '==',
							'value' => 'None',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
			),
			5 => 
			array (
				'key' => 'field_40',
				'label' => 'Background Texture',
				'name' => 'background_texture',
				'type' => 'select',
				'order_no' => 5,
				'instructions' => 'Select a pre-installed texture',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_36',
							'operator' => '==',
							'value' => 'None',
						),
					),
					'allorany' => 'all',
				),
				'choices' => 
				array (
					'bgnoise_lg' => 'bgnoise_lg',
					'billie_holiday' => 'billie_holiday',
					'blu_stripes' => 'blu_stripes',
					'bright_squares' => 'bright_squares',
					'cardboard' => 'cardboard',
					'checkered_pattern' => 'checkered_pattern',
					'chruch' => 'chruch',
					'circles' => 'circles',
					'climpek' => 'climpek',
					'concrete_wall_2' => 'concrete_wall_2',
					'concrete_wall_3' => 'concrete_wall_3',
					'crisp_paper_ruffles' => 'crisp_paper_ruffles',
					'cubes' => 'cubes',
					'debut_light' => 'debut_light',
					'diagonal_striped_brick' => 'diagonal_striped_brick',
					'diagonal-noise' => 'diagonal-noise',
					'diagonales_decalees' => 'diagonales_decalees',
					'diamond_upholstery' => 'diamond_upholstery',
					'double_lined' => 'double_lined',
					'dust' => 'dust',
					'extra_clean_paper' => 'extra_clean_paper',
					'fabric_plaid' => 'fabric_plaid',
					'furley_bg' => 'furley_bg',
					'gplaypattern' => 'gplaypattern',
					'gradient_squares' => 'gradient_squares',
					'gray_jean' => 'gray_jean',
					'grid_noise' => 'grid_noise',
					'grilled' => 'grilled',
					'hexellence' => 'hexellence',
					'lghtmesh' => 'lghtmesh',
					'light_noise_diagonal' => 'light_noise_diagonal',
					'lined_paper' => 'lined_paper',
					'little_triangles' => 'little_triangles',
					'natural_paper' => 'natural_paper',
					'noise_pattern_with_crosslines' => 'noise_pattern_with_crosslines',
					'old_mathematics' => 'old_mathematics',
					'old_wall' => 'old_wall',
					'paper_3' => 'paper_3',
					'plaid' => 'plaid',
					'project_papper' => 'project_papper',
					'psychedelic_pattern' => 'psychedelic_pattern',
					'redox_01' => 'redox_01',
					'rockywall' => 'rockywall',
					'rough_diagonal' => 'rough_diagonal',
					'silver_scales' => 'silver_scales',
					'skin_side_up' => 'skin_side_up',
					'straws' => 'straws',
					'struckaxiom' => 'struckaxiom',
					'stucco' => 'stucco',
					'subtle_freckles' => 'subtle_freckles',
					'subtle_stripes' => 'subtle_stripes',
					'subtlenet2' => 'subtlenet2',
					'textured_stripes' => 'textured_stripes',
					'tileable_wood_texture' => 'tileable_wood_texture',
					'wood_pattern' => 'wood_pattern',
					'wall4' => 'wall4',
					'washi' => 'washi',
					'white_texture' => 'white_texture',
					'xv' => 'xv',
				),
				'default_value' => '',
				'allow_null' => 1,
				'multiple' => 0,
			),
			6 => 
			array (
				'key' => 'field_139',
				'label' => 'Upload Background',
				'name' => 'upload_background',
				'type' => 'image',
				'order_no' => 6,
				'instructions' => 'Upload a custom background image',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_130',
							'operator' => '==',
							'value' => 'Ultra Light',
						),
					),
					'allorany' => 'all',
				),
				'save_format' => 'url',
				'preview_size' => 'full',
			),
			7 => 
			array (
				'key' => 'field_49',
				'label' => 'Side Nav',
				'name' => 'side_nav',
				'type' => 'tab',
				'order_no' => 7,
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_130',
							'operator' => '==',
							'value' => 'Light',
						),
					),
					'allorany' => 'all',
				),
			),
			8 => 
			array (
				'key' => 'field_43',
				'label' => 'Side Nav Background',
				'name' => 'side_nav_background',
				'type' => 'color_picker',
				'order_no' => 8,
				'instructions' => 'Select a custom background color for the side nav',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_130',
							'operator' => '==',
							'value' => 'Light',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
			),
			9 => 
			array (
				'key' => 'field_44',
				'label' => 'Navigation Active',
				'name' => 'nav_active',
				'type' => 'color_picker',
				'order_no' => 9,
				'instructions' => 'Specify a custom active button color for the navigation',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_36',
							'operator' => '==',
							'value' => 'None',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
			),
			10 => 
			array (
				'key' => 'field_45',
				'label' => 'Navigation Hover',
				'name' => 'nav_hover',
				'type' => 'color_picker',
				'order_no' => 10,
				'instructions' => 'Specify a custom hover color for the navigation',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_130',
							'operator' => '==',
							'value' => 'Ultra Light',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
			),
			11 => 
			array (
				'key' => 'field_51',
				'label' => 'Post',
				'name' => '',
				'type' => 'tab',
				'order_no' => 11,
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_36',
							'operator' => '==',
							'value' => 'None',
						),
					),
					'allorany' => 'all',
				),
			),
			12 => 
			array (
				'key' => 'field_52',
				'label' => 'Post Shadow',
				'name' => 'post_shadow',
				'type' => 'color_picker',
				'order_no' => 12,
				'instructions' => 'Specify a custom color for the post shadow',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_36',
							'operator' => '==',
							'value' => 'None',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
			),
			13 => 
			array (
				'key' => 'field_89',
				'label' => 'Image Hover Icon',
				'name' => 'image_hover_icon',
				'type' => 'select',
				'order_no' => 13,
				'instructions' => 'Change the icon displayed when you hover over an image',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_40',
							'operator' => '==',
							'value' => 'bgnoise_lg',
						),
					),
					'allorany' => 'all',
				),
				'choices' => 
				array (
					'icon_cross.png' => 'Plus',
					'hover_heart.png' => 'Heart',
					'hover_circleplus.png' => 'Circle Plus',
					'hover_magnify.png' => 'Magnify Glass',
					'hover_camera.png' => 'Camera',
					'hover_flash.png' => 'Flash',
					'hover_cloud.png' => 'Cloud',
					'hover_lightbulb.png' => 'Lightbulb',
				),
				'default_value' => 'Plus',
				'allow_null' => 0,
				'multiple' => 0,
			),
			14 => 
			array (
				'key' => 'field_140',
				'label' => 'Upload Hover Icon',
				'name' => 'upload_hover_icon',
				'type' => 'image',
				'order_no' => 14,
				'instructions' => 'Upload a custom hover icon',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_130',
							'operator' => '==',
							'value' => 'Ultra Light',
						),
					),
					'allorany' => 'all',
				),
				'save_format' => 'url',
				'preview_size' => 'full',
			),
			15 => 
			array (
				'key' => 'field_53',
				'label' => 'Typography',
				'name' => '',
				'type' => 'tab',
				'order_no' => 15,
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_130',
							'operator' => '==',
							'value' => 'Ultra Light',
						),
					),
					'allorany' => 'all',
				),
			),
			16 => 
			array (
				'key' => 'field_54',
				'label' => 'Heading Font',
				'name' => 'heading_font',
				'type' => 'select',
				'order_no' => 16,
				'instructions' => 'Specify another font for all heading elements (h1, h2, h3, h4, h5, h6)',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_130',
							'operator' => '==',
							'value' => 'Light',
						),
					),
					'allorany' => 'all',
				),
				'choices' => 
				array (
					'Default' => 'Default',
					'Oswald' => 'Oswald',
					'Exo' => 'Exo',
					'Julius Sans One' => 'Julius Sans One',
					'Raleway' => 'Raleway',
					'Allerta' => 'Allerta',
					'Arvo' => 'Arvo',
					'Droid Serif' => 'Droid Serif',
					'Ubuntu' => 'Ubuntu',
					'Open Sans' => 'Open Sans',
					'Open Sans Condensed' => 'Open Sans Condensed',
					'Source Sans' => 'Source Sans',
					'PT Sans' => 'PT Sans',
					'Droid Sans' => 'Droid Sans',
					'Lato' => 'Lato',
					'Cabin' => 'Cabin',
					'Alegreya' => 'Alegreya',
					'Rokkitt' => 'Rokkitt',
					'Glegoo' => 'Glegoo',
					'Asap' => 'Asap',
					'Amaranth' => 'Amaranth',
					'Armata' => 'Armata',
					'Cutive' => 'Cutive',
					'Abel' => 'Abel',
					'Dosis' => 'Dosis',
					'Varela' => 'Varela',
				),
				'default_value' => 'Default',
				'allow_null' => 0,
				'multiple' => 0,
			),
			17 => 
			array (
				'key' => 'field_131',
				'label' => 'Heading Font Weight',
				'name' => 'heading_font_weight',
				'type' => 'select',
				'order_no' => 17,
				'instructions' => 'Please select the boldness of your font',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_130',
							'operator' => '==',
							'value' => 'Light',
						),
					),
					'allorany' => 'all',
				),
				'choices' => 
				array (
					300 => 300,
					500 => 500,
					700 => 700,
				),
				'default_value' => 700,
				'allow_null' => 1,
				'multiple' => 0,
			),
			18 => 
			array (
				'key' => 'field_55',
				'label' => 'Body Font',
				'name' => 'body_font',
				'type' => 'select',
				'order_no' => 18,
				'instructions' => 'Specify a custom font for the body text',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_40',
							'operator' => '==',
							'value' => 'bgnoise_lg',
						),
					),
					'allorany' => 'all',
				),
				'choices' => 
				array (
					'Default' => 'Default',
					'Oswald' => 'Oswald',
					'Exo' => 'Exo',
					'Julius Sans One' => 'Julius Sans One',
					'Raleway' => 'Raleway',
					'Allerta' => 'Allerta',
					'Arvo' => 'Arvo',
					'Droid Serif' => 'Droid Serif',
					'Ubuntu' => 'Ubuntu',
					'Open Sans' => 'Open Sans',
					'Source Sans' => 'Source Sans',
					'PT Sans' => 'PT Sans',
					'Droid Sans' => 'Droid Sans',
					'Lato' => 'Lato',
					'Cabin' => 'Cabin',
					'Alegreya' => 'Alegreya',
					'Rokkitt' => 'Rokkitt',
					'Glegoo' => 'Glegoo',
					'Asap' => 'Asap',
					'Amaranth' => 'Amaranth',
					'Armata' => 'Armata',
					'Cutive' => 'Cutive',
					'Abel' => 'Abel',
					'Dosis' => 'Dosis',
					'Varela' => 'Varela',
				),
				'default_value' => 'Default',
				'allow_null' => 0,
				'multiple' => 0,
			),
			19 => 
			array (
				'key' => 'field_56',
				'label' => 'Body Font Size',
				'name' => 'body_font_size',
				'type' => 'text',
				'order_no' => 19,
				'instructions' => 'Specify a custom size for the body font',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_36',
							'operator' => '==',
							'value' => 'None',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '12px',
				'formatting' => 'html',
			),
			20 => 
			array (
				'key' => 'field_50',
				'label' => 'Custom CSS',
				'name' => '',
				'type' => 'tab',
				'order_no' => 20,
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_36',
							'operator' => '==',
							'value' => 'None',
						),
					),
					'allorany' => 'all',
				),
			),
			21 => 
			array (
				'key' => 'field_48',
				'label' => 'Custom CSS',
				'name' => 'custom_css',
				'type' => 'textarea',
				'order_no' => 21,
				'instructions' => 'Use this area to add your own custom CSS code.',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'field_36',
							'operator' => '==',
							'value' => 'None',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'formatting' => 'none',
			),
		),
		'location' => 
		array (
			'rules' => 
			array (
				0 => 
				array (
					'param' => 'options_page',
					'operator' => '==',
					'value' => 'acf-options',
					'order_no' => 0,
				),
			),
			'allorany' => 'any',
		),
		'options' => 
		array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => 
			array (
			),
		),
		'menu_order' => 0,
	));
}
?>