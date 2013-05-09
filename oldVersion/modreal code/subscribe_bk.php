<?php # Script must return TRUE (if allright) or FALSE (if e-mail not valid)

require_once 'inc/MCAPI.class.php';
require_once 'inc/config.inc.php';

$api = new MCAPI($apikey);

if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        echo 0;
        exit;
}

$retval = $api->listSubscribe( $listId, $_POST['email'], $merge_vars );

if ($api->errorCode){
	echo "Unable to load listSubscribe()!\n";
	echo "\tCode=".$api->errorCode."\n";
	echo "\tMsg=".$api->errorMessage."\n";
} else {
    echo "Subscribed - look for the confirmation email!\n";
}
 
define('TO', 'contact@askovi.com'); // Your e-mail adress
define('FROM', "From: Modreal <hello@{$_SERVER['HTTP_HOST']}>\r\n");
define('SUBJECT', 'New subscription'); // Subject of mail
$message = $_POST['email'];
 
$r = mail(TO, SUBJECT, $message, FROM);
 
echo ($r) ? 1 : 0;
?>