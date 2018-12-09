<?php
ini_set('display_errors', 0);
error_reporting(E_ERROR | E_WARNING | E_PARSE); 
include('arrays.php');
//header ("Content-Type:text/xml");

$xml = '<?xml version="1.0" encoding="UTF-8"?><games>';

$myfile = file_put_contents('output.xml', $xml.PHP_EOL , FILE_APPEND | LOCK_EX);
$x = count(json_decode(file_get_contents('games.txt','r'), true));
//print_r($garray);
echo "Total number of Games:".$x ;
for ($i=0;$i<=$x;$i++){

    echo $i.'-';
    $txt = file_get_contents('http://localhost:81/game/game.php?gkey='.$i);
    $txt = ltrim ($txt,'<br><br>');
    $txt = str_replace('&','and',$txt);
    $txt = '<'.$txt;
    $myfile = file_put_contents('output.xml', $txt.PHP_EOL , FILE_APPEND | LOCK_EX);
}
 ?>