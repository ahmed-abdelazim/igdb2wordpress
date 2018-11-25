<?php
header('Content-Type: application/json');
include("config.php");
include("functions.php");
/* $i = 1;
$pquery = '';
while ($i<401){

    $pquery .= ','.$i;
    $i++;
}
$platforms = get_json_response ('game_engines','1'.$pquery.'?fields=name,id'); */
$output = '[';
$ps_platforms = array('48','165','7','8','9','38','45','46');
//https://api-endpoint.igdb.com/platforms/48?fields=games
foreach ($ps_platforms as $pid){
    $platforms = rtrim(substr(get_json_response ('platforms',$pid.'?fields=games'), 1),']').',';
    $output .= $platforms;
    unset($platforms);
    
}
//print_r($platforms);
//var_dump($platforms);
echo rtrim($output,',').']';
?>