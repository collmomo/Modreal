<?php
    //API Key - see http://admin.mailchimp.com/account/api
    $apikey = '30ba34d1811b00716cc7d2950b507e03-us4';
    
    // A List Id to run examples against. use lists() to view all
    // Also, login to MC account, go to List, then List Tools, and look for the List ID entry
    $listId = '85f64f187a';
    
    // A Campaign Id to run examples against. use campaigns() to view all
    $campaignId = 'YOUR MAILCHIMP CAMPAIGN ID - see campaigns() method';

    //some email addresses used in the examples:
    $my_email = 'contact@modreal.com';
    $boss_man_email = 'contact@askovi.com';

    //just used in xml-rpc examples
    $apiUrl = 'http://api.mailchimp.com/1.3/';
    
?>
