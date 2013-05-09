<?php

/*-----------------------------------------------------------------------------------*/
/*	Accordian
/*-----------------------------------------------------------------------------------*/

add_shortcode("collapse", "collapse");
add_shortcode("collapse_group", "collapse_group");
function collapse_group( $atts, $content = null ) { 
    extract(shortcode_atts(array( 
    'id' => '',
    'class' => ''
    ), $atts)); 
     
    $output  = '<div class="accordion '.$class.'"  ';
     
    if(!empty($id))
        $output .= 'id="'.$id.'"';
         
    $output .='>'.do_shortcode($content).'</div>';
    return $output; 
} 
 
function collapse($atts, $content = null) { 
    extract(shortcode_atts(array( 
    'id' => '',
    'title' => '',
    'open'=>'n'
    ), $atts)); 
 
    // autogenerate id to link the accordian title with contents.
    if(empty($id))
        $id = 'accordian_item_'.rand(100,999);
         
    $output = '<div class="accordion-group">
        <div class="accordion-heading">
        <a class="accordion-toggle" data-toggle="collapse"
        data-parent="#accordion2" href="#'.$id.'">'.$title.'</a>
        </div>
         <div id="'.$id.'" class="accordion-body collapse '.($open == 'y' ? 'in' :'').'">
            <div class="accordion-inner"><p>'.$content.'</p></div>
         </div>
        </div>'; 
         
    return $output;
}  

/*-----------------------------------------------------------------------------------*/
/*	Quote
/*-----------------------------------------------------------------------------------*/

function quote( $atts, $content = null ) {  
    return '<blockquote><p>'.$content.'</p></blockquote>';  
}
add_shortcode("quote", "quote");    

/*-----------------------------------------------------------------------------------*/
/*	Headings
/*-----------------------------------------------------------------------------------*/

// h1
function h1( $atts, $content = null ) {  
    return '<h1>'.$content.'</h1>';  
}
add_shortcode("h1", "h1");

// h2
function h2( $atts, $content = null ) {  
    return '<h2>'.$content.'</h2>';  
}
add_shortcode("h2", "h2");     

// h3
function h3( $atts, $content = null ) {  
    return '<h3>'.$content.'</h3>';  
}
add_shortcode("h3", "h3");  

// h4
function h4( $atts, $content = null ) {  
    return '<h4>'.$content.'</h4>';  
}
add_shortcode("h4", "h4");  

// h5
function h5( $atts, $content = null ) {  
    return '<h5>'.$content.'</h5>';  
}
add_shortcode("h5", "h5");  

// h6
function h6( $atts, $content = null ) {  
    return '<h6>'.$content.'</h6>';  
}
add_shortcode("h6", "h6");

/*-----------------------------------------------------------------------------------*/
/*	Columns
/*-----------------------------------------------------------------------------------*/

// row-fluid
function row( $atts, $content = null ) { 


    return '<div class="row-fluid"><p>'.do_shortcode( shortcode_unautop( $content ) ).'</p></div>';
	$content = preg_replace('#^<\/p>|<p>$#', '', $content);
    
}
add_shortcode("row", "row");

// span1
function span1( $atts, $content = null ) {  
	
    return '<div class="span1"><p>'.do_shortcode( shortcode_unautop( $content ) ).'</p></div>';  
   $content = preg_replace('#^<\/p>|<p>$#', '', $content);
}
add_shortcode("span1", "span1");

// span2
function span2( $atts, $content = null ) {  

    return '<div class="span2"><p>'.do_shortcode( shortcode_unautop( $content ) ).'</p></div>';  
    $content = preg_replace('#^<\/p>|<p>$#', '', $content);
}
add_shortcode("span2", "span2");

// span3
function span3( $atts, $content = null ) {  

    return '<div class="span3"><p>'.do_shortcode( shortcode_unautop( $content ) ).'</p></div>';  
    $content = preg_replace('#^<\/p>|<p>$#', '', $content);
}
add_shortcode("span3", "span3");

// span4
function span4( $atts, $content = null ) {  

    return '<div class="span4"><p>'.do_shortcode( shortcode_unautop( $content ) ).'</p></div>'; 
    $content = preg_replace('#^<\/p>|<p>$#', '', $content); 
}
add_shortcode("span4", "span4");

// span5
function span5( $atts, $content = null ) { 

    return '<div class="span5"><p>'.do_shortcode( shortcode_unautop( $content ) ).'</p></div>'; 
    $content = preg_replace('#^<\/p>|<p>$#', '', $content); 
}
add_shortcode("span5", "span5");

// span6
function span6( $atts, $content = null ) {  

    return '<div class="span6"><p>'.do_shortcode( shortcode_unautop( $content ) ).'</p></div>';  
    $content = preg_replace('#^<\/p>|<p>$#', '', $content);
}
add_shortcode("span6", "span6");

// span7
function span7( $atts, $content = null ) {  

    return '<div class="span7"><p>'.do_shortcode( shortcode_unautop( $content ) ).'</p></div>';  
    $content = preg_replace('#^<\/p>|<p>$#', '', $content);
}
add_shortcode("span7", "span7");

// span8
function span8( $atts, $content = null ) {  

    return '<div class="span8"><p>'.do_shortcode( shortcode_unautop( $content ) ).'</p></div>';  
    $content = preg_replace('#^<\/p>|<p>$#', '', $content);
}
add_shortcode("span8", "span8");

// span9
function span9( $atts, $content = null ) {  

    return '<div class="span9"><p>'.do_shortcode( shortcode_unautop( $content ) ).'</p></div>';  
    $content = preg_replace('#^<\/p>|<p>$#', '', $content);
}
add_shortcode("span9", "span9");

// span10
function span10( $atts, $content = null ) {  

    return '<div class="span10"><p>'.do_shortcode( shortcode_unautop( $content ) ).'</p></div>';  
    $content = preg_replace('#^<\/p>|<p>$#', '', $content);
}
add_shortcode("span10", "span10");

// span11
function span11( $atts, $content = null ) {  

    return '<div class="span11"><p>'.do_shortcode( shortcode_unautop( $content ) ).'</p></div>';  
    $content = preg_replace('#^<\/p>|<p>$#', '', $content);
}
add_shortcode("span11", "span11");

// span12
function span12( $atts, $content = null ) {  

    return '<div class="span12"><p>'.do_shortcode( shortcode_unautop( $content ) ).'</p></div>';  
    $content = preg_replace('#^<\/p>|<p>$#', '', $content);
}
add_shortcode("span12", "span12");

/*-----------------------------------------------------------------------------------*/
/*	Alerts
/*-----------------------------------------------------------------------------------*/

function alert( $atts, $content = null ) {
	extract(shortcode_atts( array('alert_type' => ''), $atts));   
    return '<div class="alert alert-'.$alert_type.'">'.do_shortcode($content).'</div>';  
}
add_shortcode("alert", "alert");

/*-----------------------------------------------------------------------------------*/
/*	Progress Bar
/*-----------------------------------------------------------------------------------*/

function progress_bar( $atts, $content = null ) {
	extract(shortcode_atts( array(
							'progress_type' => '',
							'progress' => '',
							), $atts));   
    return '<div class="progress progress-'.$progress_type.'"><div class="bar" style="width: '.$progress.'"></div></div>';  
}
add_shortcode("progress_bar", "progress_bar");

/*-----------------------------------------------------------------------------------*/
/*	Buttons
/*-----------------------------------------------------------------------------------*/

function btn( $atts, $content = null ) {
	extract(shortcode_atts( array(
							'btn_color' => '',
							), $atts));   
    return '<div class="button-rounded '.$btn_color.'">'.do_shortcode($content).'</div>';  
}
add_shortcode("btn", "btn");

/*-----------------------------------------------------------------------------------*/
/*	Buttons Mini
/*-----------------------------------------------------------------------------------*/

function btn_mini( $atts, $content = null ) {
	extract(shortcode_atts( array(
							'btn_color' => '',
							), $atts));   
    return '<div class="button-mini '.$btn_color.'">'.do_shortcode($content).'</div>';  
}
add_shortcode("btn_mini", "btn_mini");

/*-----------------------------------------------------------------------------------*/
/*	Tabs
/*-----------------------------------------------------------------------------------*/

function tabgroup( $atts, $content ){
	$GLOBALS['tab_count'] = 0;

	do_shortcode( $content );

	if( is_array( $GLOBALS['tabs'] ) ){
		foreach( $GLOBALS['tabs'] as $tab ){
			$tabs[] = '<li class="'.$tab['state'].'"><a href="#'.$tab['title'].'" data-toggle="tab">'.$tab['title'].'</a></li>';
			$panes[] = '<div id="'.$tab['title'].'"><p>'.$tab['content'].'</p></div>';
			}
			$return = "\n".'<ul class="tabs">'.implode( "\n", $tabs ).'</ul>'."\n".'<div class="tab-content">'.implode( "\n", $panes ).'</div>'."\n";
		}
		return $return;
	}
add_shortcode( 'tabgroup', 'tabgroup' );
	
function tabs( $atts, $content ){
	extract(shortcode_atts(array(
	'title' => 'Tab %d',
	'state' => ''
), $atts));

$x = $GLOBALS['tab_count'];
$GLOBALS['tabs'][$x] = array( 'title' => sprintf( $title, $GLOBALS['tab_count'] ), 'state' => sprintf( $state, $GLOBALS['tab_count'] ), 'content' =>  $content );

$GLOBALS['tab_count']++;
}
add_shortcode( 'tab', 'tabs' );

?>