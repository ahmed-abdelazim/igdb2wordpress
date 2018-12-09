<?php
ini_set('display_errors', 0);
error_reporting(E_ERROR | E_WARNING | E_PARSE);
include("config.php");
include("arrays.php");
include("functions.php");
//$game_raw = file_get_contents('ps4_games_full.txt','r');
$game = json_decode(file_get_contents('games.txt','r'), true);

//echo '<pre>'.print_r($game).'</pre>';
//print_r($game_raw);
$gkey = $_GET['gkey'];
if (isset($game[$gkey]['name']) &&  isset($game[$gkey]['cover'])){ // if statement to avoid generating errors in case of bad game id or bad response from server
    if (array_key_exists('genres',$game[$gkey])){ $genres_id = $game[$gkey]['genres'];} // genres ID's array
$platforms_id = $game[$gkey]['platforms']; // platforms ID's array

// ======== Screen shots html ======== 
$screenshots_html = "No screenshots available";
if (array_key_exists('screenshots',$game[$gkey])){
    $screenshots_html = "";
    $screenshots = $game[$gkey]['screenshots'];
    foreach ($screenshots as $subarraykey) {

        $screenshots_html .='<img src="https://images.igdb.com/igdb/image/upload/t_screenshot_med/'.$subarraykey['cloudinary_id'].'.jpg"><br />';
        // all images sizes are here https://igdb.github.io/api/references/images/
    }
} 
// ===================================

// ======== developers html ========
$company_html = "No company information available";
if(array_key_exists('developers', $game[$gkey])){
    $company_html = "";
    $developers_id = $game[$gkey]['developers'];
    foreach ($developers_id as $value) { // print companies

            $company_html .= return_name($value,'developers.txt').'<br />';

    }

}

//==================================

// ======== Publishers html ========
$publishers_html = "No publisher information available";
if(array_key_exists('publishers', $game[$gkey])){
    $publishers_html = "";
    $publishers_id = $game[$gkey]['publishers'];
    foreach ($publishers_id as $value) { // print companies
 
        $publishers_html .= return_name($value,'developers.txt').'<br />';

    }

}

//==================================

// ======== Game modes html ========
$game_modes_html = "No Game modes information available";
if(array_key_exists('game_modes', $game[$gkey])){
    $game_modes_html = "";
    $game_modes_id = $game[$gkey]['game_modes'];
    foreach ($game_modes_id as $value) { // print companies
        $game_modes_html .= return_name($value,'game_modes.txt').'<br />';        
    }

}

//==================================

// ======== Themes html ========
$themes_html = "No themes information available";
if(array_key_exists('themes', $game[$gkey])){
    $themes_html = "";
    $themes_id = $game[$gkey]['themes'];
    foreach ($themes_id as $value) { // print companies
        $themes_html .= return_name($value,'themes.txt').'<br />';

    }

}

//==================================

// ======== Keyword html ========
/* $keyword_html = "No keyword information available";
if(array_key_exists('keywords', $game[$gkey])){
    $keyword_html = "";
    $keyword_id = $game[$gkey]['keywords'];
    foreach ($keyword_id as $value) { // print companies
        $keyword=get_response ('keywords', $value.'?fields=name');
        
        $keyword_html .= $keyword[0]['name'].'<br />';

    }

} */

//==================================


// ======== player_perspectives html ========
$player_perspectives_html = "No player perspectives information available";
if(array_key_exists('player_perspectives', $game[$gkey])){
    $player_perspectives_html = "";
    $player_perspectives_id = $game[$gkey]['player_perspectives'];
    foreach ($player_perspectives_id as $value) { // print companies
        $player_perspectives_html .= return_name($value,'player_perspectives.txt').'<br />';

    }

}

//==================================


// ======== videos trailers html ========
$video_html = "";
if (array_key_exists("videos",$game[$gkey])){
    $videos = $game[$gkey]['videos'];
    foreach ($videos as $subarraykey) {

        $video_html .= '<iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/'.$subarraykey['video_id'].'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><br />';
        
    }
}
else {

    $video_html = "No videos available";
}

//============START XML OUTPU=============


echo '<game>';
echo '<ID>'.$game[$gkey]['id'].'</ID>';
echo '<title>'.$game[$gkey]['name'].'</title>';
echo '<image>https://images.igdb.com/igdb/image/upload/t_cover_big/'.$game[$gkey]['cover']['cloudinary_id'].'.jpg</image>';
echo '<htmlData><![CDATA[';
echo "<h2>Date de sortie: </h2>";

if (array_key_exists('release_dates',$game[$gkey])){
    $array = $game[$gkey]['release_dates'];
    foreach ( $array as $k => $value) { // print Platforms
        
        echo $game[$gkey]['release_dates'][$k]['human'].' : '; // release date
        $platform_temp_id= $game[$gkey]['release_dates'][$k]['platform'];
        $platform_name_key = array_search($platform_temp_id, array_column($platforms, 'id'));
        echo $platforms[$platform_name_key]['name'].'<br />';
    }
}




    
   
// if (array_key_exists("rating",$game[$gkey])){
//     echo '<h2>Rating 1: </h2>'.$game[$gkey]['rating'].'<br />';
// }
if (array_key_exists("aggregated_rating",$game[$gkey])){    
    echo '<h2>Note Moyenne: </h2>'.round($game[$gkey]['aggregated_rating']).'<br />';
}    
echo "<h2>Plateforme(s): </h2><br />";
foreach ($platforms_id as $value){
    // find the key of certain platform id on our already fetched array $platforms in arrays.php
    $key = array_search($value, array_column($platforms, 'id'));
    // $value is current platform id and 'id' is in the sub array of a single platform in $platforms
    echo $platforms[$key]['name'].'<br />';
    

}

/*foreach ($platforms_id as $value) { // print Platforms
    $platforms=get_response ('platforms', $value.'?fields=name');
    echo $platforms[$value]['name'].'<br />';

}*/


echo '<h2>Développeur: </h2><br />';

echo $company_html;

echo '<h2>Editeur(s): </h2><br />';
echo $publishers_html;

echo '<h2>Mode de jeu: </h2><br />';
echo $game_modes_html;

echo '<h2>Themes: </h2><br />';
echo $themes_html;

echo '<h2>Vue du joueur</h2><br />';
echo $player_perspectives_html;

/* echo '<h2>Keywords: </h2><br />';
echo $keyword_html; */

echo "<h2>Genres: </h2><br />";
if (array_key_exists("genres",$game[$gkey])){
    //print_r($game[$gkey]['genres']);
    foreach ($genres_id as $value) { // print genres

        echo return_name($value,'genres.txt');

    }
}
echo '<h2>Sites Web: <br /></h2>';
if (array_key_exists("websites",$game[$gkey])){
    $links = $game[$gkey]['websites'];

    foreach ($links as $subarraykey) {

        echo '<a href="'.$subarraykey['url'].'">'.$subarraykey['url'].'</a><br />';
        
    }
}
else echo 'No websites available!';
echo '<h2>Image de couverture: </h2><br />'.'<img src="https://images.igdb.com/igdb/image/upload/t_cover_big/'.$game[$gkey]['cover']['cloudinary_id'].'.jpg"><br />';
echo "<h2>Captures d'écan: </h2><br />";
echo $screenshots_html;

echo '<h2>Videos: </h2><br />';

echo $video_html;
echo ' ]]>
</htmlData>';
echo '</game>';
}
?>