<?php
$sentence = "PHP is a programming language";
echo strlen($sentence)."\n";
echo str_word_count($sentence)."\n";
echo strrev($sentence)."\n";
echo strpos($sentence, "a")."\n";
echo str_replace("programming", "coding", $sentence)."\n";
echo strtolower($sentence)."\n";
echo strtoupper($sentence)."\n";
$extraSpace = " Laravel is a wonderful framework";
echo trim($extraSpace)."\n";
echo substr($extraSpace,2,7)."\n";
$str1 = "apple";
$str2 = "Apple";
// test if case is sensitive
echo strcmp($str1,$str2)."\n"; //if equal, output will be 0
// test if case is insensitive
echo strcasecmp($str1,$str2); 
$password = "secret";
echo md5($password)."\n";
echo sha1($password)."\n";
?>