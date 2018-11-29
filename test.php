<?php
header('Content-Type: application/json');
$game = json_decode(file_get_contents('ps4_1.txt','r'));
print_r($game);