<?php
include("config.php");
include("functions.php");
$i = 1;
$pquery = '';
while ($i<401){

    $pquery .= ','.$i;
    $i++;
}
$platforms = get_response ('platforms','1'.$pquery.'?fields=name,id');
//print_r($platforms);
//var_dump($platforms);
echo $platforms;
?>