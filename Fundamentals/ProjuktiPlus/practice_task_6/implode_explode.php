<?php
$test = "Banana, Pineapple, Guava";
$stringToArray = explode(",", $test);
$arrayToString = implode(" -",$stringToArray);
print_r($stringToArray);
print_r($arrayToString);

?>