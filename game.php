<?php
include("config.php");
include("functions.php");
$game=get_response ("games",$_GET['gid']);
$genres_id = $game[0]['genres']; // genres ID's array
$platforms_id = $game[0]['platforms']; // platforms ID's array

// ======== Screen shots html ======== 
$screenshots_html = "No screenshots available";
if (array_key_exists('screenshots',$game[0])){
    $screenshots_html = "";
    $screenshots = $game[0]['screenshots'];
    foreach ($screenshots as $subarraykey) {

        $screenshots_html .='<img src="https://images.igdb.com/igdb/image/upload/t_screenshot_med/'.$subarraykey['cloudinary_id'].'.jpg"><br>';
        // all images sizes are here https://igdb.github.io/api/references/images/
    }
} 
// ===================================

// ======== developers html ========
$company_html = "No company information available";
if(array_key_exists('developers', $game[0])){
    $company_html = "";
    $developers_id = $game[0]['developers'];
    foreach ($developers_id as $value) { // print companies
        $developers=get_response ('companies', $value.'?fields=name');
        $company_html .= $developers[0]['name'].'<br>';

    }

}

//==================================

// ======== videos trailers html ========
$video_html = "";
if (array_key_exists("videos",$game[0])){
    $videos = $game[0]['videos'];
    foreach ($videos as $subarraykey) {

        $video_html .= '<iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/'.$subarraykey['video_id'].'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><br>';
        
    }
}
else {

    $video_html = "No videos available";
}

//======================================

echo '<h1>'.$game[0]['name'].'</h1><br>';

echo "<h2>Release date: </h2>".$game[0]['release_dates'][0]['human'].'<br>';


    
   
// if (array_key_exists("rating",$game[0])){
//     echo '<h2>Rating 1: </h2>'.$game[0]['rating'].'<br>';
// }
if (array_key_exists("aggregated_rating",$game[0])){    
    echo '<h2>Rating: </h2>'.$game[0]['aggregated_rating'].'<br>';
}    
echo "<h2>Platforms: </h2><br>";

foreach ($platforms_id as $value) { // print Platforms
    $platforms=get_response ('platforms', $value.'?fields=name');
    echo $platforms[0]['name'].'<br>';

}

echo '<h2>Company: </h2><br>';

echo $company_html;

echo "<h2>Genres: </h2><br>";
if (array_key_exists("genres",$game[0])){
    //print_r($game[0]['genres']);
    foreach ($genres_id as $value) { // print genres
        $genres=get_response ('genres', $value);
        //print_r($genres);
        echo $genres[0]['name'].'<br>';

    }
}
echo '<h2>Websites: <br></h2>';
if (array_key_exists("websites",$game[0])){
    $links = $game[0]['websites'];

    foreach ($links as $subarraykey) {

        echo '<a href="'.$subarraykey['url'].'">'.$subarraykey['url'].'</a><br>';
        
    }
}
else echo 'No websites available!';
echo '<h2>Cover Image: </h2><br>'.'<img src="https://images.igdb.com/igdb/image/upload/t_cover_big/'.$game[0]['cover']['cloudinary_id'].'.jpg"><br>';
echo '<h2>Screenshots: </h2><br>';
echo $screenshots_html;

echo '<h2>Videos: </h2><br>';

echo $video_html;

?>