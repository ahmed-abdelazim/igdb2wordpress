<?php
// In this file we get companies Id's for ps4 games
//header('Content-Type: application/json');
include("config.php");
include("functions.php");
include('arrays.php')  ;
//echo $my_companies_json;
//$companies_array = json_decode($my_companies_json,true);
$companies_array  = array_uniqe( json_decode(file_get_contents('games.txt','r'), true));
$devQuery = '';
$dev_query_array = array();
foreach ($companies_array as $k => $value){
   if (array_key_exists('developers',$companies_array[$k])){ 
       foreach($companies_array[$k]['developers'] as $devVal){
        $devQuery .= $devVal.',';
        if (strlen($devQuery) > 1900){
            $devQuery = rtrim($devQuery,',');
            array_push($dev_query_array,$devQuery);
            $devQuery = "";    
        }
       }
   }

}
//print_r($dev_query_array);

foreach ($dev_query_array as $gameQ){
    $developer = get_json_response ("companies",$gameQ.'?fields=name');
    $myfile = file_put_contents('developers.txt', $developer.PHP_EOL , FILE_APPEND | LOCK_EX);
}

?>