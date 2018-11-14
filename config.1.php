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
$file_contents = curl_exec ( $ch ); // excute the request we will get our response on $file_contents
if (curl_errno ( $ch )) {
    echo curl_error ( $ch );
    curl_close ( $ch );
    exit ();
}
curl_close ( $ch ); // destroy curl object

// dump output of api
$game = json_decode($file_contents); // Game array contains all game or set of games data
//print_r($game); // let's have a look on the array
$screenshoots = $game[0][37]; // initiate empty array to put all screen shoot into it.
print_r($game[0][37]);
$single_screen = array(); // initiate empty array to put all screen shoot into it.
//foreach($screenshoots as $single_screen)
 //  $id[] = $single_screen['cloudinary_id'];
//print_r($single_screen);
?>