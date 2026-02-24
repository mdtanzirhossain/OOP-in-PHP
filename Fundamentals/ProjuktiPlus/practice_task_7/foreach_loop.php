<?php
// foreach an indexed array
$fruits = ["Mango", "Jackfruit", "Litchi"];
foreach ($fruits as $fruit){
    echo $fruit."\n";
}
// foreach an associative array
$person = [
    'name' => 'Tanzir',
    'city' => 'Khulna'
]; 
foreach($person as $key => $value){
    echo "$key:$value\n";
}
print_r($person);
?>