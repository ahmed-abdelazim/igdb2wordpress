<?php
include("config.php");
include("arrays.php");
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

// ======== Publishers html ========
$publishers_html = "No publisher information available";
if(array_key_exists('publishers', $game[0])){
    $publishers_html = "";
    $publishers_id = $game[0]['publishers'];
    foreach ($publishers_id as $value) { // print companies
        $publishers=get_response ('companies', $value.'?fields=name');
        $publishers_html .= $publishers[0]['name'].'<br>';

    }

}

//==================================

// ======== Game modes html ========
$game_modes_html = "No Game modes information available";
if(array_key_exists('game_modes', $game[0])){
    $game_modes_html = "";
    $game_modes_id = $game[0]['game_modes'];
    foreach ($game_modes_id as $value) { // print companies
        $game_modes=get_response ('game_modes', $value.'?fields=name');
        $game_modes_html .= $game_modes[0]['name'].'<br>';

    }

}

//==================================

// ======== Themes html ========
$themes_html = "No themes information available";
if(array_key_exists('themes', $game[0])){
    $themes_html = "";
    $themes_id = $game[0]['themes'];
    foreach ($themes_id as $value) { // print companies
        $themes=get_response ('themes', $value.'?fields=name');
        $themes_html .= $themes[0]['name'].'<br>';

    }

}

//==================================

// ======== Keyword html ========
$keyword_html = "No keyword information available";
if(array_key_exists('keywords', $game[0])){
    $keyword_html = "";
    $keyword_id = $game[0]['keywords'];
    foreach ($keyword_id as $value) { // print companies
        $keyword=get_response ('keywords', $value.'?fields=name');
        
        $keyword_html .= $keyword[0]['name'].'<br>';

    }

}

//==================================


// ======== player_perspectives html ========
$player_perspectives_html = "No player perspectives information available";
if(array_key_exists('player_perspectives', $game[0])){
    $player_perspectives_html = "";
    $player_perspectives_id = $game[0]['player_perspectives'];
    foreach ($player_perspectives_id as $value) { // print companies
        $player_perspectives=get_response ('player_perspectives', $value.'?fields=name');
        $player_perspectives_html .= $player_perspectives[0]['name'].'<br>';

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

echo "<h2>Release dates: </h2>";

if (array_key_exists('release_dates',$game[0])){
    $array = $game[0]['release_dates'];
    foreach ( $array as $k => $value) { // print Platforms
        
        echo $game[0]['release_dates'][$k]['human'].' : '; // release date
        $platform_temp_id= $game[0]['release_dates'][$k]['platform'];
        $platform_name_key = array_search($platform_temp_id, array_column($platforms, 'id'));
        echo $platforms[$platform_name_key]['name'].'<br>';
    }
}




    
   
// if (array_key_exists("rating",$game[0])){
//     echo '<h2>Rating 1: </h2>'.$game[0]['rating'].'<br>';
// }
if (array_key_exists("aggregated_rating",$game[0])){    
    echo '<h2>Rating: </h2>'.$game[0]['aggregated_rating'].'<br>';
}    
echo "<h2>Platforms: </h2><br>";
foreach ($platforms_id as $value){
    // find the key of certain platform id on our already fetched array $platforms in arrays.php
    $key = array_search($value, array_column($platforms, 'id'));
    // $value is current platform id and 'id' is in the sub array of a single platform in $platforms
    echo $platforms[$key]['name'].'<br>';
    

}

/*foreach ($platforms_id as $value) { // print Platforms
    $platforms=get_response ('platforms', $value.'?fields=name');
    echo $platforms[$value]['name'].'<br>';

}*/


echo '<h2>Company: </h2><br>';

echo $company_html;

echo '<h2>Publishers: </h2><br>';
echo $publishers_html;

echo '<h2>Game modes: </h2><br>';
echo $game_modes_html;

echo '<h2>Themes: </h2><br>';
echo $themes_html;

echo '<h2>Player perspectives </h2><br>';
echo $player_perspectives_html;

echo '<h2>Keywords: </h2><br>';
echo $keyword_html;

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