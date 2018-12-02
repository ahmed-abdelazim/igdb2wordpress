<?php
include('functions.php');
//header('Content-Type: application/json');
print_r(get_inner_ids('games.txt','player_perspectives')); echo "<br>";
print_r(get_inner_ids('games.txt','game_modes')); echo "<br>";
print_r(get_inner_ids('games.txt','themes')); echo "<br>";
print_r(get_inner_ids('games.txt','genres')); echo "<br>";
print_r(get_inner_ids('games.txt','developers')); echo "<br>";
print_r(get_inner_ids('games.txt','publishers')); echo "<br>";


