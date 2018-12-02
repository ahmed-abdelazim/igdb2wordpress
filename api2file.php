<?php
// this file dumps all games response in certain platform to games.txt
include("config.php");
include("arrays.php");
include("functions.php");
$ps4Query = '';
//$ps4ids = $games_ids_array[0]['games'];
$ps4ids = $game_array_uniqe;
$ps4Qarray = array(); // declear an array to store queries which must be less than 1900 chars.
foreach ($ps4ids as $gid){
    $ps4Query .= $gid.',';
    //echo $gid.'<br>';
    if (strlen($ps4Query) > 1900){
        $ps4Query = rtrim($ps4Query,',');
        array_push($ps4Qarray,$ps4Query);
        $ps4Query = "";    
    }
}
print_r ($ps4Qarray);
foreach ($ps4Qarray as $gameQ){
    $game = get_json_response ("games",$gameQ.'?fields=developers,id,name,aggregated_rating,publishers,game_engines,category,player_perspectives,game_modes,themes,genres,platforms,release_dates,screenshots,videos,cover,websites');
    $myfile = file_put_contents('games.txt', $game.PHP_EOL , FILE_APPEND | LOCK_EX);
}
//echo $ps4Query.'<br>';
//echo get_json_response ("games",$ps4Query);
//echo $game;

?>