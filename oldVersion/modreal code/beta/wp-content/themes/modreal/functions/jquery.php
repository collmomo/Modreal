<?php

/*-----------------------------------------------------------------------------------*/
/*	This page contains the custom jQuery code with custom options
/*	Manually editing this file could break the theme.
/*	Edit the settings in the options panel instead.
/*-----------------------------------------------------------------------------------*/

/*-----------------------------------------------------------------------------------*/
/*	Video Player
/*-----------------------------------------------------------------------------------*/

function jquery_video() {
	?>
	<script>
	jQuery(document).ready(function() {
	jQuery('div[data-video-id]').each(function(){
	   	var videoid = jQuery(this).attr('data-video-id');
	    var videoposter = jQuery(this).attr('data-video-poster');
	    var videourl = jQuery(this).attr('data-video-url');
	    var videoheight = jQuery(this).attr('data-video-height');
	    
		jQuery(this).jPlayer({
	     ready: function () {
	     
		       jQuery(this).jPlayer("setMedia", {
		          m4v: ""+videourl+"",
		          poster: ""+videoposter+""
		         
		       });
	     },
	     play: function() { // To avoid both jPlayers playing together.
	         jQuery(this).jPlayer("pauseOthers");
			},
	     cssSelectorAncestor: "#jp_container_"+videoid,
	     swfPath: "http://www.jplayer.org/latest/js/Jplayer.swf",
	     supplied: "m4v",
	     size: { width: "100%", height: ""+videoheight+""}
	     
	   }); 
	       
	});
	});
	</script>
	<?php
}

/*-----------------------------------------------------------------------------------*/
/*	Audio Player
/*-----------------------------------------------------------------------------------*/

function jquery_audio() {
	?>
	<script>
	jQuery(document).ready(function() {
	jQuery('div[data-audio-id]').each(function(){
			var audioid = jQuery(this).attr('data-audio-id');
			var audiourl = jQuery(this).attr('data-audio-url');
			
		       jQuery(this).jPlayer({
		         ready: function () {
		           jQuery(this).jPlayer("setMedia", {
		             m4a: ""+audiourl+"",
		           });
		         },
		         play: function() { // To avoid both jPlayers playing together.
			         jQuery(this).jPlayer("pauseOthers");
					},
		         cssSelectorAncestor: "#jp_container_"+audioid,
		         swfPath: "http://www.jplayer.org/latest/js/Jplayer.swf",
		         supplied: "m4a",
		       });
		 });
	});
	</script>
	<?php
}

/*-----------------------------------------------------------------------------------*/
/*	Flexslider
/*-----------------------------------------------------------------------------------*/

function jquery_flexslider() {
	?>
	<script>
	jQuery(document).ready(function() {
	"use strict";
	jQuery('.widget-slider .flexslider').flexslider({
		animation: "<?php if (get_field('slider_animation', 'option')) { the_field('slider_animation', 'option'); } else { echo 'slide'; } ?>",
		slideshow: "<?php if (get_field('slider_slideshow', 'option')) { the_field('slider_slideshow', 'option'); } else { echo 'false';} ?>", 
		slideshowSpeed: <?php if (get_field('slideshow_speed', 'option')) {the_field('slideshow_speed', 'option'); } else { echo '800'; } ?>,
		animationSpeed: <?php if (get_field('slider_animation_speed', 'option')) {the_field('slider_animation_speed', 'option'); } else { echo '600'; } ?>, 
		easing: "swing", 
		directionNav: false 
		});
	});
	</script>
	<?php
}

/*-----------------------------------------------------------------------------------*/
/*	Google Maps
/*-----------------------------------------------------------------------------------*/

function jquery_googlemaps() {
	?>
	<script>
	// Google Maps
	function initialize() {
		var styles = [ { "stylers": [ { "visibility": "on" }, { "saturation": -100 }, { "gamma": 1 } ] },{ } ];
		
		var myLatlng = new google.maps.LatLng(<?php if (get_field('latitude', 'option')) {the_field('latitude', 'option'); } else { echo '41.385'; } ?>,<?php if (get_field('longitude', 'option')) {the_field('longitude', 'option'); } else { echo '2.169'; } ?>);
	    var mapOptions = {
		    zoom: 15,
		    mapTypeId: google.maps.MapTypeId.ROADMAP,
		    disableDefaultUI: true,
		    draggable: false,
		    scrollwheel: false,
		    center: myLatlng,
		};
		
		var map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
	    map.setOptions({styles: styles});
	    
		var marker = new google.maps.Marker({
		    position: myLatlng,
		    map: map,
		});
	
	}
	</script>
	<?php
}

/*-----------------------------------------------------------------------------------*/
/*	Contact Form
/*-----------------------------------------------------------------------------------*/

function jquery_contact() {
	?>
	<script>
	jQuery('.contact-submit').click(function() {
	"use strict";
	var name = $("#name").val();
	var email = $("#email").val();
	var message = $("#message").val();
	
	var dataString = 'name='+ name + '&email=' + email + '&message=' + message;
	
	jQuery.ajax({  
		type: "POST",  
		url: "<?php echo get_template_directory_uri(); ?>/contact.php",  
		data: dataString,  
		success:  function (html) { 
			if (html === "invalid_email ") {
				$('.contact-alerts').empty();
				$('.contact-alerts').append('<div id="email-error" class="alert alert-error">This email is invalid!</div>');
				} else if (html === "success ") {
					$('.contact-alerts').empty();
					$('.contact-alerts').append('<div id="email-success" class="alert alert-success">Your email has been sent!</div>');
				} else if (html === "error ") {
					$('.contact-alerts').empty();
					$('.contact-alerts').append('<div id="email-error" class="alert alert-error">Please fill out all the fields!</div>');
				}
			}  
		});  
	});
	</script>
	<?php
}

/*-----------------------------------------------------------------------------------*/
/*	Isotope
/*-----------------------------------------------------------------------------------*/

function jquery_isotope() {
	?>
	<script>
	jQuery(window).load(function(){
    
	// Check if Mobile or Tablet device  
	function is_touch_device() {
		return !!('ontouchstart' in window) // works on most browsers 
		|| !!('onmsgesturechange' in window); // works on ie10
	};
    
	// If touch device, disable transforms.
	if (is_touch_device() && $(window).width() < 800) { 
		var bubu = {
			animationEngine: 'best-available',
			filter: '',
			sortBy: 'original-order',
			sortAscending: true,
			transformsEnabled: false,
			layoutMode: 'masonry'
		};
		
     } else {
	     var bubu = {
		     animationEngine: 'best-available',
		     filter: '',
			sortBy: 'original-order',
			sortAscending: true,
			transformsEnabled: true,
			layoutMode: 'masonry',
			animationOptions: {
				queue: false,
				easing: 'linear',
				duration: <?php if (get_field('grid_animation_duration', 'option')) {the_field('grid_animation_duration', 'option');} else { echo '5000'; } ?>
			},
		};
	}
	
	// Settings for the grid
    jQuery(function(){
	    var $container = jQuery('#container'),
	    // object that will keep track of options
	    isotopeOptions = {},
	    // defaults, used if not explicitly set in hash
	    defaultOptions = bubu;
	    
	    var setupOptions = jQuery.extend( {}, defaultOptions, {
		    itemSelector : '.isotope-post',
		    masonry: {
			    gutterWidth: 50,
			    columnWidth: 1,
			   },
		});

    	$container.infinitescroll({
       		navSelector  : '.isotope-loadmore',    // selector for the paged navigation 
	       	nextSelector : '.isotope-loadmore a',  // selector for the NEXT link (to page 2)
		    itemSelector : '.isotope-post',     // selector for all items you'll retrieve
	        behavior : 'twitter',
        loading: {
            finishedMsg: '',
            img: ''
          }
        },
        // call Isotope as a callback
        function( newElements ) {
        
		var $newElems = jQuery(newElements);
		$newElems.css("opacity","0");
		$newElems.imagesLoaded(function(){
		$newElems.css("opacity","1");
		jQuery(".post").css("opacity","1");
		$container.isotope('appended', $newElems );
		});
		
		// Load More Callback scripts
		// =========================================
		
		// Post Like
  		jQuery.getScript("<?php echo get_template_directory_uri(); ?>/js/post-like.js");
  		
  		jQuery(".isotope-loadmore a").html("Load More");
  		
  		// Slider
  		
        jQuery('.widget-slider .flexslider').flexslider({
		animation: "<?php if (get_field('slider_animation', 'option')) { the_field('slider_animation', 'option'); } else { echo 'slide'; } ?>",
		slideshow: "<?php if (get_field('slider_slideshow', 'option')) { the_field('slider_slideshow', 'option'); } else { echo 'false';} ?>", 
		slideshowSpeed: <?php if (get_field('slideshow_speed', 'option')) {the_field('slideshow_speed', 'option'); } else { echo '800'; } ?>,
		animationSpeed: <?php if (get_field('slider_animation_speed', 'option')) {the_field('slider_animation_speed', 'option'); } else { echo '600'; } ?>, 
		easing: "swing", 
		directionNav: false 
		});
	    
	    // Video Player
		jQuery('div[data-video-id]').each(function(){
		   	var videoid = jQuery(this).attr('data-video-id');
		    var videoposter = jQuery(this).attr('data-video-poster');
		    var videourl = jQuery(this).attr('data-video-url');
		    var videoheight = jQuery(this).attr('data-video-height');
		 
			jQuery(this).jPlayer({
		     ready: function () {
		       jQuery(this).jPlayer("setMedia", {
		          m4v: ""+videourl+"",
		          poster: ""+videoposter+""
		       });
		     },
		     play: function() { // To avoid both jPlayers playing together.
		         jQuery(this).jPlayer("pauseOthers");
				},
		     cssSelectorAncestor: "#jp_container_"+videoid,
		     swfPath: "http://www.jplayer.org/latest/js/Jplayer.swf",
		     supplied: "m4v",
		     size: { width: "100%", height: ""+videoheight+""}
		     
		   }); 
		       
		});
		
		// Audio Player
		jQuery('div[data-audio-id]').each(function(){
			var audioid = jQuery(this).attr('data-audio-id');
			var audiourl = jQuery(this).attr('data-audio-url');
			
		       jQuery(this).jPlayer({
		         ready: function () {
		           jQuery(this).jPlayer("setMedia", {
		             m4a: ""+audiourl+"",
		           });
		         },
		         play: function() { // To avoid both jPlayers playing together.
			         jQuery(this).jPlayer("pauseOthers");
					},
		         cssSelectorAncestor: "#jp_container_"+audioid,
		         swfPath: "http://www.jplayer.org/latest/js/Jplayer.swf",
		         supplied: "m4a",
		       });
		 });
		     
		//
	        
        }
          
      );
      
	// set up Isotope
	$container.isotope( setupOptions );
	var $optionSets = jQuery('.category-filter').find('li'),
	isOptionLinkClicked = false;
  
	// switches selected class on buttons
	function changeSelectedLink( $elem ) {
		// remove selected class on previous item
		$elem.parents().find('.selected').removeClass('selected');
		// set selected class on new item
		$elem.addClass('selected');
	}
  
	$optionSets.find('a').click(function(){
		var $this = $(this);
		// don't proceed if already selected
		if ( $this.hasClass('selected') ) {
			return;
		}
		changeSelectedLink( $this );
		// get href attr, remove leading #
		var href = $this.attr('href').replace( /^#/, '' ),
		// convert href into object
		// i.e. 'filter=.inner-transition' -> { filter: '.inner-transition' }
		option = jQuery.deparam( href, true );
		// apply new option to previous
		jQuery.extend( isotopeOptions, option );
		// set hash, triggers hashchange on window
		$.bbq.pushState( isotopeOptions );
		isOptionLinkClicked = true;
      
		if (jQuery(window).width() <= 480) {  
			jQuery('#nav-collapse').removeClass('in');
			jQuery('#nav-collapse').css('height','0');
		}
		// Reloads script on filter.
		jQuery.getScript("<?php echo get_template_directory_uri(); ?>/js/load-more.js");
        return false;
    });

    var hashChanged = false;
    jQuery(window).bind( 'hashchange', function( event ){
	    // get options object from hash
	    var hashOptions = window.location.hash ? jQuery.deparam.fragment( window.location.hash, true ) : {},
	    // do not animate first call
	    aniEngine = hashChanged ? 'best-available' : 'none',
	    // apply defaults where no option was specified
	    options = jQuery.extend( {}, defaultOptions, hashOptions, { animationEngine: aniEngine } );
	    // apply options from hash
	    $container.isotope( options );
	    // save options
	    isotopeOptions = hashOptions;
	    
	    // if option link was not clicked
        // then we'll need to update selected links
        if ( !isOptionLinkClicked ) {
	        // iterate over options
	        var hrefObj, hrefValue, $selectedLink;
	        for ( var key in options ) {
		        hrefObj = {};
		        hrefObj[ key ] = options[ key ];
		        // convert object into parameter string
		        // i.e. { filter: '.inner-transition' } -> 'filter=.inner-transition'
		        hrefValue = jQuery.param( hrefObj );
		        // get matching link
		        $selectedLink = $optionSets.find('a[href="#' + hrefValue + '"]');
		        changeSelectedLink( $selectedLink );
		    }
		}
		
		isOptionLinkClicked = false;
		hashChanged = true;
	})
    // trigger hashchange to capture any hash data on init
    .trigger('hashchange');
    });
    });

	</script>
	<?php
}

/*-----------------------------------------------------------------------------------*/
/*	Remove empty <p> tags
/*-----------------------------------------------------------------------------------*/

function jquery_removep() {
	?>
	<script>
	jQuery(document).ready(function() {
	jQuery( 'p:empty' ).remove();
	});
	</script>
	<?php
}

/*-----------------------------------------------------------------------------------*/
/*	Tooltips
/*-----------------------------------------------------------------------------------*/

function jquery_tooltips() {
	?>
	<script>
	jQuery(document).ready(function() {
	jQuery("[rel=alternate]").tooltip();
	});
	</script>
	<?php
}

/*-----------------------------------------------------------------------------------*/
/*	Fancybox
/*-----------------------------------------------------------------------------------*/

function jquery_fancybox() {
	?>
	<script>
	jQuery(document).ready(function() {
		jQuery(".fancybox").fancybox({
			helpers : {
				overlay : {
					locked : false
					}
			    },
			padding: ['5px', '5px', '5px', '5px']
		});
	});
	</script>
	<?php
}

/*-----------------------------------------------------------------------------------*/
/*	Dropdown Menu
/*-----------------------------------------------------------------------------------*/

function jquery_dropdown() {
	?>
	<script>
	jQuery('.dropdown').click(function() {
    	jQuery('.sub-menu', this).slideToggle(300);
    });
    
	jQuery(function($) {
		jQuery(".dropdown").children("a").attr('href', "javascript:void(0)"); 
    });
	</script>
	<?php
}

/*-----------------------------------------------------------------------------------*/
/*	Back to top
/*-----------------------------------------------------------------------------------*/

function jquery_backtotop() {
	?>
	<script>
	jQuery(document).ready(function() {
		jQuery().UItoTop({ easingType: 'easeOutQuart' });
	});
	</script>
	<?php
}

/*-----------------------------------------------------------------------------------*/
/*	Custom Jquery
/*-----------------------------------------------------------------------------------*/

function jquery_custom() {
	?>
	<script>
	jQuery(document).ready(function() {
		jQuery(".isotope-loadmore").click(function() {
			jQuery(".isotope-loadmore a").html("Loading...");
		});
		<?php if (get_field('sidenav_static', 'option') == "static") { ?>
		jQuery('.side-nav').height(jQuery(document).height());
		<?php } ?>
	});
	</script>
	<?php
}


