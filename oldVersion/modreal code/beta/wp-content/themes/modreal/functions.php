<?php
/*-----------------------------------------------------------------------------------

	Hello. This file contains all the important custom functions for 
	this theme. Please be very careful when editing this file.

-----------------------------------------------------------------------------------*/

/*-----------------------------------------------------------------------------------*/
/*	Set Content Width
/*-----------------------------------------------------------------------------------*/

function mytheme_adjust_content_width() {
    if ( ! isset( $content_width ) ) {
        if (get_field('column_size') == "4") {
            $content_width = 306;
        }
        if (get_field('column_size') == "8") {
            $content_width = 634;
        }
    }
}

add_action( 'template_redirect', 'mytheme_adjust_content_width' );

/*-----------------------------------------------------------------------------------*/
/*	Load CSS Files
/*-----------------------------------------------------------------------------------*/

function theme_styles()  {  

		// Load CSS
        wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array(), '20120208');
        wp_enqueue_style( 'custom', get_template_directory_uri() . '/css/custom_css.php', array(), '20120208' ); 
       
        
        // Load Dark Theme
        if (get_field('theme_style', 'option') == "Dark") {
            wp_enqueue_style( 'dark', get_template_directory_uri() . '/css/dark.css', array(), '20120208' );
        }
        
        // Load Ultra Light Theme
        if (get_field('theme_style', 'option') == "Ultra Light") {
            wp_enqueue_style( 'ultra-light', get_template_directory_uri() . '/css/ultra-light.css', array(), '20120208' );
        }
         wp_enqueue_style( 'responsive', get_template_directory_uri() . '/css/responsive.css', array(), '20120208' );
    }  
add_action( 'wp_enqueue_scripts', 'theme_styles' );  

/*-----------------------------------------------------------------------------------*/
/*	Load Javascript Files
/*-----------------------------------------------------------------------------------*/

function theme_scripts() {
		wp_enqueue_script( 'jquery');
		wp_enqueue_script( 'comment-reply' );
        wp_enqueue_script( 'flexslider', get_template_directory_uri() . "/js/jquery.flexslider-min.js", array(),'', 'in_footer');	
        wp_enqueue_script( 'bootstrap', get_template_directory_uri() . "/js/bootstrap.min.js", array(),'', 'in_footer');
        wp_enqueue_script( 'jplayer', get_template_directory_uri() . "/js/jquery.jplayer.min.js", array(),'', 'in_footer');
        wp_enqueue_script( 'isotope_infinite', get_template_directory_uri() . "/js/jquery.infinitescroll.min.js", array(),'', 'in_footer');
        wp_enqueue_script( 'isotope_manual', get_template_directory_uri() . "/js/jquery.manual-trigger.js", array(),'', 'in_footer');

        if (!is_page() && !is_single()) {
        wp_enqueue_script( 'isotope', get_template_directory_uri() . "/js/jquery.isotope.min.js", array(),'', 'in_footer');
        } 

        wp_enqueue_script( 'bbq', get_template_directory_uri() . "/js/jquery.ba-bbq.min.js", array(),'', 'in_footer');
        wp_enqueue_script( 'fancybox', get_template_directory_uri() . "/js/jquery.fancybox.js", array(),'', 'in_footer');
        wp_enqueue_script( 'easing', get_template_directory_uri() . "/js/easing.js", array(),'', 'in_footer');
        wp_enqueue_script( 'totop', get_template_directory_uri() . "/js/jquery.ui.totop.js", array(),'', 'in_footer');
        wp_enqueue_script( 'maps', "https://maps.googleapis.com/maps/api/js?key=".get_field('api_key', 'option')."&amp;sensor=true", array(),'', 'in_footer');
        wp_enqueue_script( 'like_post', get_template_directory_uri().'/js/post-like.js');

}    

add_action('wp_enqueue_scripts', 'theme_scripts');

/*-----------------------------------------------------------------------------------*/
/*	Load Google Fonts
/*-----------------------------------------------------------------------------------*/

function mytheme_fonts() {
    	$protocol = is_ssl() ? 'https' : 'http';
    	wp_enqueue_style( 'mytheme-opensans', "$protocol://fonts.googleapis.com/css?family=Oswald:300,400" );
    	

}
	   
add_action( 'wp_enqueue_scripts', 'mytheme_fonts' );


/*-----------------------------------------------------------------------------------*/
/*	Get Category Slug
/*-----------------------------------------------------------------------------------*/

function get_cat_slug($cat_id) {
	$cat_id = (int) $cat_id;
	$category = &get_category($cat_id);
	return $category->slug;
}

/*-----------------------------------------------------------------------------------*/
/*	Add Theme Support
/*-----------------------------------------------------------------------------------*/

add_theme_support( 'post-formats', array('chat','gallery','image','link', 'quote', 'video', 'audio' ) );
add_theme_support( 'automatic-feed-links' );
add_theme_support('post-thumbnails');

/*-----------------------------------------------------------------------------------*/
/*	Menu
/*-----------------------------------------------------------------------------------*/

add_action( 'init', 'register_my_menus' );
function register_my_menus() {
  register_nav_menus(
    array( 'header-menu' => 'Header Menu' )
  );
}

add_filter( 'wp_nav_menu_items', 'your_custom_menu_item', 10, 2 );
function your_custom_menu_item ( $items, $args ) {
    if (is_single() && $args->theme_location == 'primary') {
        $items .= '<li>Show whatever</li>';
    }
    return $items;
}
add_filter( 'wp_nav_menu_items', 'add_loginout_link', 10, 2 );
function add_loginout_link( $items, $args ) {
    if (is_user_logged_in() && $args->theme_location == 'primary') {
        $items .= '<li><a href="'. wp_logout_url() .'">Log Out</a></li>';
    }
    elseif (!is_user_logged_in() && $args->theme_location == 'primary') {
        $items .= '<li><a href="'. site_url('wp-login.php') .'">Log In</a></li>';
    }
    return $items;
}

/*-----------------------------------------------------------------------------------*/
/*	Get Posts
/*-----------------------------------------------------------------------------------*/

function my_get_posts( $query ) {

	if ( is_home() && $query->is_main_query() )
		$query->set( 'post_type', array( 'post') );

	return $query;
}

function make_href_root_relative($input) {
    return preg_replace('!http(s)?://' . $_SERVER['SERVER_NAME'] . '/!', '/', $input);
}

/*-----------------------------------------------------------------------------------*/
/*	Navigation Output
/*-----------------------------------------------------------------------------------*/

class Clean_Walker extends Walker_Page {
    function start_lvl(&$output, $depth) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul>\n";
    }
    function start_el(&$output, $page, $depth, $args, $current_page) {
        if ( $depth )
            $indent = str_repeat("\t", $depth);
        else
            $indent = '';
        extract($args, EXTR_SKIP);
        $class_attr = '';
        if ( !empty($current_page) ) {
            $_current_page = get_page( $current_page );
            if ( (isset($_current_page->ancestors) && in_array($page->ID, (array) $_current_page->ancestors)) || ( $page->ID == $current_page ) || ( $_current_page && $page->ID == $_current_page->post_parent ) ) {
                $class_attr = 'sel';
            }
        } elseif ( (is_single() || is_archive()) && ($page->ID == get_option('page_for_posts')) ) {
            $class_attr = 'sel';
        }
        if ( $class_attr != '' ) {
            $class_attr = ' class="' . $class_attr . '"';
            $link_before .= '<strong>';
            $link_after = '</strong>' . $link_after;
        }
        $output .= $indent . '<li' . $class_attr . '><a href="hello"' . $class_attr . '>' . $link_before . apply_filters( 'the_title', $page->post_title, $page->ID ) . $link_after . '</a>';

        if ( !empty($show_date) ) {
            if ( 'modified' == $show_date )
                $time = $page->post_modified;
            else
                $time = $page->post_date;
            $output .= " " . mysql2date($date_format, $time);
        }
    }
}

/*-----------------------------------------------------------------------------------*/
/*	Chat Post Format
/*-----------------------------------------------------------------------------------*/


/* Filter the content of chat posts. */
add_filter( 'the_content', 'my_format_chat_content' );

/**
 * This function filters the post content when viewing a post with the "chat" post format.  It formats the 
 * content with structured HTML markup to make it easy for theme developers to style chat posts.  The 
 * advantage of this solution is that it allows for more than two speakers (like most solutions).  You can 
 * have 100s of speakers in your chat post, each with their own, unique classes for styling.
 *
 * @author David Chandra
 * @link http://www.turtlepod.org
 * @author Justin Tadlock
 * @link http://justintadlock.com
 * @copyright Copyright (c) 2012
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 * @link http://justintadlock.com/archives/2012/08/21/post-formats-chat
 *
 * @global array $_post_format_chat_ids An array of IDs for the chat rows based on the author.
 * @param string $content The content of the post.
 * @return string $chat_output The formatted content of the post.
 */
function my_format_chat_content( $content ) {
	global $_post_format_chat_ids;

	/* If this is not a 'chat' post, return the content. */
	if ( !has_post_format( 'chat' ) )
		return $content;

	/* Set the global variable of speaker IDs to a new, empty array for this chat. */
	$_post_format_chat_ids = array();

	/* Allow the separator (separator for speaker/text) to be filtered. */
	$separator = apply_filters( 'my_post_format_chat_separator', ':' );

	/* Open the chat transcript div and give it a unique ID based on the post ID. */
	$chat_output = "\n\t\t\t" . '<div id="chat-transcript-' . esc_attr( get_the_ID() ) . '" class="chat-transcript">';

	/* Split the content to get individual chat rows. */
	$chat_rows = preg_split( "/(\r?\n)+|(<br\s*\/?>\s*)+/", $content );

	/* Loop through each row and format the output. */
	foreach ( $chat_rows as $chat_row ) {

		/* If a speaker is found, create a new chat row with speaker and text. */
		if ( strpos( $chat_row, $separator ) ) {

			/* Split the chat row into author/text. */
			$chat_row_split = explode( $separator, trim( $chat_row ), 2 );

			/* Get the chat author and strip tags. */
			$chat_author = strip_tags( trim( $chat_row_split[0] ) );

			/* Get the chat text. */
			$chat_text = trim( $chat_row_split[1] );

			/* Get the chat row ID (based on chat author) to give a specific class to each row for styling. */
			$speaker_id = my_format_chat_row_id( $chat_author );

			/* Open the chat row. */
			$chat_output .= "\n\t\t\t\t" . '<div class="chat-row ' . sanitize_html_class( "chat-speaker-{$speaker_id}" ) . '">';

			/* Add the chat row author. */
			$chat_output .= "\n\t\t\t\t\t" . '<div class="chat-author ' . sanitize_html_class( strtolower( "chat-author-{$chat_author}" ) ) . ' vcard"><cite class="fn">' . apply_filters( 'my_post_format_chat_author', $chat_author, $speaker_id ) . '</cite>' . $separator . '</div>';

			/* Add the chat row text. */
			$chat_output .= "\n\t\t\t\t\t" . '<div class="chat-text">' . str_replace( array( "\r", "\n", "\t" ), '', apply_filters( 'my_post_format_chat_text', $chat_text, $chat_author, $speaker_id ) ) . '</div>';

			/* Close the chat row. */
			$chat_output .= "\n\t\t\t\t" . '</div><!-- .chat-row -->';
		}

		/**
		 * If no author is found, assume this is a separate paragraph of text that belongs to the
		 * previous speaker and label it as such, but let's still create a new row.
		 */
		else {

			/* Make sure we have text. */
			if ( !empty( $chat_row ) ) {

				/* Open the chat row. */
				$chat_output .= "\n\t\t\t\t" . '<div class="chat-row ' . sanitize_html_class( "chat-speaker-{$speaker_id}" ) . '">';

				/* Don't add a chat row author.  The label for the previous row should suffice. */

				/* Add the chat row text. */
				$chat_output .= "\n\t\t\t\t\t" . '<div class="chat-text">' . str_replace( array( "\r", "\n", "\t" ), '', apply_filters( 'my_post_format_chat_text', $chat_row, $chat_author, $speaker_id ) ) . '</div>';

				/* Close the chat row. */
				$chat_output .= "\n\t\t\t</div><!-- .chat-row -->";
			}
		}
	}

	/* Close the chat transcript div. */
	$chat_output .= "\n\t\t\t</div><!-- .chat-transcript -->\n";

	/* Return the chat content and apply filters for developers. */
	return apply_filters( 'my_post_format_chat_content', $chat_output );
}

/**
 * This function returns an ID based on the provided chat author name.  It keeps these IDs in a global 
 * array and makes sure we have a unique set of IDs.  The purpose of this function is to provide an "ID"
 * that will be used in an HTML class for individual chat rows so they can be styled.  So, speaker "John" 
 * will always have the same class each time he speaks.  And, speaker "Mary" will have a different class 
 * from "John" but will have the same class each time she speaks.
 *
 * @author David Chandra
 * @link http://www.turtlepod.org
 * @author Justin Tadlock
 * @link http://justintadlock.com
 * @copyright Copyright (c) 2012
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 * @link http://justintadlock.com/archives/2012/08/21/post-formats-chat
 *
 * @global array $_post_format_chat_ids An array of IDs for the chat rows based on the author.
 * @param string $chat_author Author of the current chat row.
 * @return int The ID for the chat row based on the author.
 */
function my_format_chat_row_id( $chat_author ) {
	global $_post_format_chat_ids;

	/* Let's sanitize the chat author to avoid craziness and differences like "John" and "john". */
	$chat_author = strtolower( strip_tags( $chat_author ) );

	/* Add the chat author to the array. */
	$_post_format_chat_ids[] = $chat_author;

	/* Make sure the array only holds unique values. */
	$_post_format_chat_ids = array_unique( $_post_format_chat_ids );

	/* Return the array key for the chat author and add "1" to avoid an ID of "0". */
	return absint( array_search( $chat_author, $_post_format_chat_ids ) ) + 1;
}

function menu_set_dropdown( $sorted_menu_items, $args ) {
    $last_top = 0;
    foreach ( $sorted_menu_items as $key => $obj ) {
        // it is a top lv item?
        if ( 0 == $obj->menu_item_parent ) {
            // set the key of the parent
            $last_top = $key;
        } else {
            $sorted_menu_items[$last_top]->classes['dropdown'] = 'dropdown';
        }
    }
    return $sorted_menu_items;
}
add_filter( 'wp_nav_menu_objects', 'menu_set_dropdown', 10, 2 );

class MyWalker extends Walker_Category {
 
	function start_el(&$output, $category, $depth, $args) {
		extract($args);
 
		$cat_name = esc_attr( $category->name );
		$cat_name = apply_filters( 'list_cats', $cat_name, $category );
		
		$link = '<a href="#filter=.' . $category->slug . '">' . $cat_name . '</a>'; 
		
		if ( 'list' == $args['style'] ) {
			if ( !empty($current_category) ) {
				$_current_category = get_term( $current_category, $category->taxonomy );
				if ( $category->term_id == $current_category )
					$class .=  ' current-cat';
				elseif ( $category->term_id == $_current_category->parent )
					$class .=  ' current-cat-parent';
			}
			
			$output .= "<li class=" . $class;
			$output .=  '>'.$link;
			$output .=  '';
		} else {
			$output .= $link;
		}
	}
}

/*-----------------------------------------------------------------------------------*/
/*	Remove title attributes
/*-----------------------------------------------------------------------------------*/

function wp_list_categories_remove_title_attributes($output) {
    $output = preg_replace('` title="(.+)"`', '', $output);
    return $output;
}
add_filter('wp_list_categories', 'wp_list_categories_remove_title_attributes');


/*-----------------------------------------------------------------------------------*/
/*	Register SideNav Side bar
/*-----------------------------------------------------------------------------------*/

$side_nav = array(
	'name'          => 'sidebar-widgets',
	'before_widget' => '<div class="side-nav-widget"><div class="side-nav-widget-inner"><ul><li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li></ul></div></div>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>' );
	
	
register_sidebar($side_nav);

/*-----------------------------------------------------------------------------------*/
/*	Register SidePost Side bar
/*-----------------------------------------------------------------------------------*/

$side_post = array(
	'name'          => 'post-widgets',
	'before_widget' => '<div class="post-nav-widget"><div class="post-nav-widget-inner"><ul><li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li></ul></div></div>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>' );
	
	
register_sidebar($side_post);

/*-----------------------------------------------------------------------------------*/
/*	Custom Search Output
/*-----------------------------------------------------------------------------------*/

function html5_search_form( $form ) {
    $form = '<form role="search" method="get" id="searchform" action="' . home_url( '/' ) . '" >
    <input type="text" placeholder="'.__("Search").'" value="' . get_search_query() . '" name="s" id="s" />
    <input type="submit" id="searchsubmit" value="Search" />
    </form>';

    return $form;
}
add_filter( 'get_search_form', 'html5_search_form' );

/*-----------------------------------------------------------------------------------*/
/*	Add Read More to excerpt
/*-----------------------------------------------------------------------------------*/

function new_excerpt_more($more) {
       global $post;
	return ' <a href="'. get_permalink($post->ID) . '">Read more</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

/*-----------------------------------------------------------------------------------*/
/*	Custom Comment Styling
/*-----------------------------------------------------------------------------------*/

function mytheme_comment($comment, $args, $depth) {
		$GLOBALS['comment'] = $comment;
		extract($args, EXTR_SKIP);

		if ( 'div' == $args['style'] ) {
			$tag = 'div';
			$add_below = 'comment';
		} else {
			$tag = 'li';
			$add_below = 'div-comment';
		}
?>
		<<?php echo $tag ?> <?php comment_class(empty( $args['has_children'] ) ? '' : 'parent') ?> id="comment-<?php comment_ID() ?>">
		
		<?php if ( 'div' != $args['style'] ) : ?>
		<li id="div-comment-<?php comment_ID(); ?>">
		<?php endif; ?>
		<div class="entry drop-shadow curved span4 margin-bottom">
		<div class="avatar">
			<?php echo get_avatar( '', 50, '', '' ); ?> 
		</div>
		<div class="comment-meta">
			<h4><?php comment_author_link(); ?></h4>
			<p><?php the_time(); ?> <?php edit_comment_link('(Edit)','  ','' ); ?></p>
		</div>	
		<div class="comment-body">
	  		<?php if ($comment->comment_approved == '0') : ?>
	  			<p>Your comment is awaiting approval</p>
	  		<?php endif; ?>
	  		<?php comment_text(); ?>
	  		<?php comment_reply_link(array_merge( $args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
	  	</div>

		</div>
		<?php if ( 'div' != $args['style'] ) : ?>
		</li>
		<?php endif; ?>
<?php
        }
        
/*-----------------------------------------------------------------------------------*/
/*	Display class if not single
/*-----------------------------------------------------------------------------------*/

function isotope_post() {
	if (!is_single()) {
		echo 'isotope-post';
	}
}


/*-----------------------------------------------------------------------------------*/
/*	Add editor style
/*-----------------------------------------------------------------------------------*/

add_editor_style();

/*-----------------------------------------------------------------------------------*/
/*	Remove thumbnail dimensions
/*-----------------------------------------------------------------------------------*/

add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10, 3 );

function remove_thumbnail_dimensions( $html, $post_id, $post_image_id ) {
    $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
    return $html;
}

/*-----------------------------------------------------------------------------------*/
/*	Time Ago Function
/*-----------------------------------------------------------------------------------*/

function themeblvd_time_ago() {
 
	global $post;
 
	$date = get_post_time('G', true, $post);
 
	/**
	 * Where you see 'themeblvd' below, you'd
	 * want to replace those with whatever term
	 * you're using in your theme to provide
	 * support for localization.
	 */ 
 
	// Array of time period chunks
	$chunks = array(
		array( 60 * 60 * 24 * 365 , __( 'year', 'themeblvd' ), __( 'years', 'themeblvd' ) ),
		array( 60 * 60 * 24 * 30 , __( 'month', 'themeblvd' ), __( 'months', 'themeblvd' ) ),
		array( 60 * 60 * 24 * 7, __( 'week', 'themeblvd' ), __( 'weeks', 'themeblvd' ) ),
		array( 60 * 60 * 24 , __( 'day', 'themeblvd' ), __( 'days', 'themeblvd' ) ),
		array( 60 * 60 , __( 'hour', 'themeblvd' ), __( 'hours', 'themeblvd' ) ),
		array( 60 , __( 'minute', 'themeblvd' ), __( 'minutes', 'themeblvd' ) ),
		array( 1, __( 'second', 'themeblvd' ), __( 'seconds', 'themeblvd' ) )
	);
 
	if ( !is_numeric( $date ) ) {
		$time_chunks = explode( ':', str_replace( ' ', ':', $date ) );
		$date_chunks = explode( '-', str_replace( ' ', '-', $date ) );
		$date = gmmktime( (int)$time_chunks[1], (int)$time_chunks[2], (int)$time_chunks[3], (int)$date_chunks[1], (int)$date_chunks[2], (int)$date_chunks[0] );
	}
 
	$current_time = current_time( 'mysql', $gmt = 0 );
	$newer_date = strtotime( $current_time );
 
	// Difference in seconds
	$since = $newer_date - $date;
 
	// Something went wrong with date calculation and we ended up with a negative date.
	if ( 0 > $since )
		return __( 'sometime', 'themeblvd' );
 
	/**
	 * We only want to output one chunks of time here, eg:
	 * x years
	 * xx months
	 * so there's only one bit of calculation below:
	 */
 
	//Step one: the first chunk
	for ( $i = 0, $j = count($chunks); $i < $j; $i++) {
		$seconds = $chunks[$i][0];
 
		// Finding the biggest chunk (if the chunk fits, break)
		if ( ( $count = floor($since / $seconds) ) != 0 )
			break;
	}
 
	// Set output var
	$output = ( 1 == $count ) ? '1 '. $chunks[$i][1] : $count . ' ' . $chunks[$i][2];
 
 
	if ( !(int)trim($output) ){
		$output = '0 ' . __( 'seconds', 'themeblvd' );
	}
 
	$output .= __(' ago', 'themeblvd');
 
	return $output;
}
 
// Filter our themeblvd_time_ago() function into WP's the_time() function
add_filter('the_time', 'themeblvd_time_ago');

/*-----------------------------------------------------------------------------------*/
/*	Get category slug
/*-----------------------------------------------------------------------------------*/

function get_category_slug() {
	foreach(get_the_category() as $category) {
		echo $category->slug . ' ';
	} 
}

/*-----------------------------------------------------------------------------------*/
/*	Span Size
/*-----------------------------------------------------------------------------------*/

function span_size() {
	if (!is_single()) { echo 'span4'; } 
}

/*-----------------------------------------------------------------------------------*/
/*	Style Switcher
/*-----------------------------------------------------------------------------------*/

function style_switcher() { ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/style-switcher.css"/>
<div class="style-switcher-body"></div>
<ul id="navigation">
	<li><span></span>
			<div id="panel">
				<p>Color theme</p>
	    		<div data-theme-path="<?php echo get_template_directory_uri() ?>" class="style-switcher-container">
	    		 <a id="style-light" class="style-color">default</a>
    			 <a id="style-ultralight" href="#" class="style-color">ultra-light.css</a>
    			 <a id="style-dark" class="style-color">dark.css</a>		  	     
	   			 </div>
			</div>
	</li>
	</ul>
	<script type='text/javascript' src='<?php echo get_template_directory_uri() ?>/js/style-switcher.js'></script>
<?php }

/*-----------------------------------------------------------------------------------*/
/*	Custom wp_link_pages
/*-----------------------------------------------------------------------------------*/

function custom_wp_link_pages( $args = '' ) {
	$defaults = array(
		'before' => '<p id="post-pagination"> Pages: ', 
		'after' => '</p>',
		'text_before' => '',
		'text_after' => '',
		'next_or_number' => 'number', 
		'nextpagelink' => 'Next page',
		'previouspagelink' => 'Previous page',
		'pagelink' => '%',
		'echo' => 1
	);

	$r = wp_parse_args( $args, $defaults );
	$r = apply_filters( 'wp_link_pages_args', $r );
	extract( $r, EXTR_SKIP );

	global $page, $numpages, $multipage, $more, $pagenow;

	$output = '';
	if ( $multipage ) {
		if ( 'number' == $next_or_number ) {
			$output .= $before;
			for ( $i = 1; $i < ( $numpages + 1 ); $i = $i + 1 ) {
				$j = str_replace( '%', $i, $pagelink );
				$output .= ' ';
				if ( $i != $page || ( ( ! $more ) && ( $page == 1 ) ) )
					$output .= _wp_link_page( $i );
				else
					$output .= '<span class="current-post-page">';

				$output .= $text_before . $j . $text_after;
				if ( $i != $page || ( ( ! $more ) && ( $page == 1 ) ) )
					$output .= '</a>';
				else
					$output .= '</span>';
			}
			$output .= $after;
		} else {
			if ( $more ) {
				$output .= $before;
				$i = $page - 1;
				if ( $i && $more ) {
					$output .= _wp_link_page( $i );
					$output .= $text_before . $previouspagelink . $text_after . '</a>';
				}
				$i = $page + 1;
				if ( $i <= $numpages && $more ) {
					$output .= _wp_link_page( $i );
					$output .= $text_before . $nextpagelink . $text_after . '</a>';
				}
				$output .= $after;
			}
		}
	}

	if ( $echo )
		echo $output;

	return $output;
}

/*-----------------------------------------------------------------------------------*/
/*	Enable/Disable Lightbox
/*-----------------------------------------------------------------------------------*/
function fancybox() {
	if (get_field('image_lightbox', 'option') == "enable") { 
		echo "fancybox";
	}
}

function fancybox_url($url) {
	if (get_field('image_lightbox', 'option') == "enable") { echo $url; } else { the_permalink(); }
}
        
/*-----------------------------------------------------------------------------------*/
/*	Load Shortcodes, Plugins, Widgets
/*-----------------------------------------------------------------------------------*/

// Add the Theme Shortcodes
include("functions/shortcodes.php");

// Add the custom jQuery
include("functions/jquery.php");

// Add custom like plugin
include("functions/like.php");

// Add custom fields and options
require_once('acf/acf-lite.php');
include("functions/acf-functions.php");


?>