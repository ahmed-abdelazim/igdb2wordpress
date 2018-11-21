<?php
header('Content-Type: application/json');
include("config.php");
include("functions.php");
$i = 1;
$pquery = '';
while ($i<401){

    $pquery .= ','.$i;
    $i++;
}
$platforms = get_json_response ('game_engines','1'.$pquery.'?fields=name,id');
//print_r($platforms);
//var_dump($platforms);
echo $platforms;
?>