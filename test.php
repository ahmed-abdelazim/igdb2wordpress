<?php
include('functions.php');
//header('Content-Type: application/json');
print_r(get_inner_ids('games-formed.txt','player_perspectives')); echo "<br>";
print_r(get_inner_ids('games-formed.txt','game_modes')); echo "<br>";
print_r(get_inner_ids('games-formed.txt','themes')); echo "<br>";
print_r(get_inner_ids('games-formed.txt','genres')); echo "<br>";
print_r(get_inner_ids('games-formed.txt','developers')); echo "<br>";
print_r(get_inner_ids('games-formed.txt','publishers')); echo "<br>";


