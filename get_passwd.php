<?php

$symbols = array(1,2,3,4,5,6,7,8,9,0, "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z", "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z", "!", "@", "$", "%", "&", "*", "<", "?", ">", "{", "}", "[", "]");
    
shuffle($symbols);


if($_GET["symbols"]) {
  $symbols_count = $_GET["symbols"];
} else {
  $symbols_count = 10;
}
$passwd = "";
for($i = 1; $i <= $symbols_count; $i++) {
  $rand_keys = array_rand($symbols, 1);
  $passwd = $passwd . $symbols[$rand_keys];
}
echo $passwd;