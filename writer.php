<?php
include('arrays.php');
//header ("Content-Type:text/xml");
echo '<?xml version="1.0" encoding="UTF-8"?>';
$garray = $games_array[0]['games'];
//print_r($garray);
foreach($garray as $k => $val){

    echo $val.'-';
    $txt = file_get_contents('http://localhost:81/game/game.php?gid='.$val);
    $myfile = file_put_contents('output.xml', $txt.PHP_EOL , FILE_APPEND | LOCK_EX);
}
 ?>