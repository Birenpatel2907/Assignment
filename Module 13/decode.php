<?php

$string   = '{"a":1,"b":2,"c":3,"d":4,"e":5}';

$my_array_data = json_decode($string,true);
var_dump($my_array_data);

?>