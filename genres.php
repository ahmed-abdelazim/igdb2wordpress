<?php
// getting all genres ID's in our selected games
//header('Content-Type: application/json');
include("config.php");
include("functions.php");
$game = json_decode(file_get_contents('games.txt','r'), 'r');
$genres_ids_array = array();
$ps4Query = '';
foreach ($game as $key => $val){
    if (array_key_exists('genres',$game[$key])){$genres_inner = $game[$key]['genres'];}
    //$ps4Query .= $gid.',';
    if (is_array($genres_inner) || is_object($genres_inner)){
            foreach ($genres_inner as $val1) {
            array_push($genres_ids_array,$val1);
            //echo $gid.'<br>';
            }
    }
}
$genres_ids_array_uniuqe = array_unique($genres_ids_array);
print_r($genres_ids_array_uniuqe);
?>