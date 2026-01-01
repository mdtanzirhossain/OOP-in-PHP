<?php

// use double quote, use single quote inside the double quote
/*
$text =<<<EOT
This is 
    multiple 
        string
EOT;
echo $text;
*/

$sentence = "PHP is awesome";
echo strlen($sentence)."\n";
echo str_word_count($sentence)."\n";
echo strrev($sentence)."\n";
echo strpos($sentence,"is")."\n";
echo str_replace("awesome","powerful",$sentence)."\n";
echo strtoupper($sentence)."\n";
echo strtolower($sentence)."\n";
$extraSpace = " Laravel is a framework ";
$test = trim($extraSpace);
echo $test."\n";
echo substr($test,0,7)."\n";

$str1 = "apple";
$str2 = "Apple";
echo strcmp($str1, $str2)."\n";
echo strcasecmp($str1, $str2)."\n";

$password = "sectet";
echo md5($password)."\n";
echo sha1($password);