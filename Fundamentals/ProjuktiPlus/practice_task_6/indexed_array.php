<?php
$fruitName = array(
    "Pineapple", "Guava", "Strawberry"
);
var_dump($fruitName);// data type, length and value are shown in output
print_r($fruitName); // more human readable than var_dump

?>
<?php
$number = [1,2,3];
array_push($number, 90);//add to the right side
array_unshift($number, 80);//add to the left side
array_shift($number);//delete from left side
array_pop($number);//delete from right side
print_r($number);
?>