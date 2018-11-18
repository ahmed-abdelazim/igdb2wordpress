<?php

function get_response ($endpoint,$query) {
    //this function returns response as array
    include("config.php");
    if (! function_exists ( 'curl_version' )) { // check curl
        exit ( "Enable cURL in PHP" );
    }
    // let's prepare grabing data from api
    $ch = curl_init (); // initiat curl object
    $timeout = 0; // 100; // set to zero for no timeout
     // api request url
    
    $url = $host.$endpoint.'/'.$query;
    
    curl_setopt ( $ch, CURLOPT_URL, $url);
    
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
    unset($url);
    $game = json_decode($file_contents, true);
    return $game;

}
function get_game($id){
    $aggregated_rating=$response[aggregated_rating];
}
function get_developer($id){

}
function get_gener($id){}
function get_platforms($id){}
function get_release_dates($id){}
function get_screenshote($id){}
function get_artwork($id){} //cover
function get_videos($id){}
function get_websites($id){} // like twitter or instagram
function get_aggregated_rating($response){}
?>