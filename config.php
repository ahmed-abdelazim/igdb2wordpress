<?php
$apikey = "4988c731520d39390dc4194e6534ae93";
$response = exec ('curl -X GET -k -H "user-key: '.$apikey.'" -H "Accept: application/json" -i "https://api-endpoint.igdb.com/games/1942?fields=*"');
echo $response;
//$json = json_decode($response, true);
//print_r($json[0]);


//phpinfo();

?>