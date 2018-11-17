<?php
include("config.php");
include("functions.php");
$game=get_response ("games","1942");

//print_r($game); // let's have a look on the array
$screenshots = $game[0]['screenshots'];
$developer = get_response ("companies","1");

echo $game[0]['name'].'<br>';
echo "Release date: ".date("Y-m-d", substr($game[0]['release_dates'][0]['date'], 0, 10)).'<br>';
echo $developer[0]['name'].'<br>';

foreach ($screenshots as $subarraykey) {

    echo '<img src="https://images.igdb.com/igdb/image/upload/t_screenshot_med/'.$subarraykey['cloudinary_id'].'.jpg"><br>';
    // all images sizes are here https://igdb.github.io/api/references/images/
}
?>