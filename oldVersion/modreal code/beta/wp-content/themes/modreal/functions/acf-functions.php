<?php

/*
*  Advanced Custom Fields Lite
*
*  @description: this is an example of a functions.php file and demonstrates how to use ACF Lite in your theme
*  @Author: Elliot Condon
*  @Author URI: http://www.elliotcondon.com/
*  @Copyright: Elliot Condon
*/


/*
*  2. Use the new "acf_settings" hook to setup your ACF settings
*  http://www.advancedcustomfields.com/docs/filters/acf_settings/
*/

function my_acf_settings( $options )
{
    // activate add-ons
    $options['activation_codes']['repeater'] = 'QJF7-L4IX-UCNP-RF2W';
    $options['activation_codes']['options_page'] = 'OPN8-FA4J-Y2LW-81LS';
           
    return $options;
    
}
add_filter('acf_settings', 'my_acf_settings');


/*
*  4. Register your field groups
*     Field groups can be exported to PHP from the WP "Advanced Custom Fields" plugin.
*/

// Add custom fields
include("acf-fields.php");
