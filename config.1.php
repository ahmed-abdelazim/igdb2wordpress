<?php
$apikey = "4988c731520d39390dc4194e6534ae93";
if (! function_exists ( 'curl_version' )) {
    exit ( "Enable cURL in PHP" );
}

$ch = curl_init ();
$timeout = 0; // 100; // set to zero for no timeout
$myHITurl = "http://api-endpoint.igdb.com/games/1942?fields=*";
curl_setopt ( $ch, CURLOPT_URL, $myHITurl );
curl_setopt ( $ch, CURLOPT_HEADER, 0 );
curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, 1 );
curl_setopt ( $ch, CURLOPT_CONNECTTIMEOUT, $timeout );
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'user-key: '.$apikey,
    'Accept: application/json'
));
$file_contents = curl_exec ( $ch );
if (curl_errno ( $ch )) {
    echo curl_error ( $ch );
    curl_close ( $ch );
    exit ();
}
curl_close ( $ch );

// dump output of api if you want during test
echo "$file_contents";

?>