<?php
$host = "http://api-endpoint.igdb.com/"; // main api host
$apikey = "4988c731520d39390dc4194e6534ae93"; // the api key
if (! function_exists ( 'curl_version' )) { // check curl
    exit ( "Enable cURL in PHP" );
}
// let's prepare grabing data from api
$ch = curl_init (); // initiat curl object
$timeout = 0; // 100; // set to zero for no timeout
$myHITurl = "http://api-endpoint.igdb.com/games/1942?fields=*"; // api request url
curl_setopt ( $ch, CURLOPT_URL, $myHITurl );
curl_setopt ( $ch, CURLOPT_HEADER, 0 );
curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, 1 );
curl_setopt ( $ch, CURLOPT_CONNECTTIMEOUT, $timeout );
curl_setopt($ch, CURLOPT_HTTPHEADER, array( //add desired headers to the request
    'user-key: '.$apikey,
    'Accept: application/json'
));
$file_contents = curl_exec ( $ch ); // execute the request we will get our response on $file_contents
if (curl_errno ( $ch )) {
    echo curl_error ( $ch );
    curl_close ( $ch );
    exit ();
}
curl_close ( $ch ); // destroy curl object

// dump output of api
$game = json_decode($file_contents, true); // Game array contains all game or set of games data
//print_r($game); // let's have a look on the array
$screenshots = $game[0]['screenshots'];

foreach ($screenshots as $subarraykey) {

    echo $subarraykey['cloudinary_id'];
}
?>