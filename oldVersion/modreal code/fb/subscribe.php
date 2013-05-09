<?php # Script must return TRUE (if allright) or FALSE (if e-mail not valid)

require_once 'inc/MCAPI.class.php';
require_once 'inc/config.inc.php';

$api = new MCAPI($apikey);
/*
	Return data
*/
$ret = new stdClass();
$ret->isError = false;
$ret->msg = '';

if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
     $ret->isError = true;
	 $ret->msg ='Invalid email!'; 
}else{
	$retval = $api->listSubscribe( $listId, trim($_POST['email']), $merge_vars );
	if (!$retval) {
		switch($api->errorCode) {
			case '105' : 
				$ret->isError = true;
				$ret->msg = "Please try again later."; 
				break;
			case '214' : 
				$ret->isError = true;
				$ret->msg = "That email address is already subscribed." ; 
				break;
			case '250' : 
				$ret->isError = true;
				list($field, $rest) = explode(' ', $api->errorMessage, 2);					
				$ret->msg = sprintf(__("You must fill in %s."), esc_html($mv_tag_keys[$field]['name']."."));
				break;
			case '254' : 
				$ret->isError = true;
				list($i1, $i2, $i3, $field, $rest) = explode(' ',$api->errorMessage,5);
				$ret->msg = sprintf(__("%s has invalid content "), esc_html($mv_tag_keys[$field]['name']."."));
				break;
			case '270' : 
				$ret->isError = true;
				$ret->msg  = "An invalid Interest Group was selected.";
				break;
			case '502' : 
				$ret->isError = true;
				$ret->msg = "That email address is invalid.";
				break;
			default:
				$ret->isError = true;
				$ret->msg = $api->errorCode.":".$api->errorMessage;
				break;
		}
	}
	/*
	if ($api->errorCode){
		echo "Unable to load listSubscribe()!\n";
		echo "\tCode=".$api->errorCode."\n";
		echo "\tMsg=".$api->errorMessage."\n";
	} else {
		echo "Subscribed - look for the confirmation email!\n";
	}*/


	if ($ret->isError == false) {
		$ret->msg = "Subscribed - look for the confirmation email!\n";
	}
	echo json_encode($ret);
}
?>