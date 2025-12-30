<?php

// foreach is used for array
// forelse isused in laravel
// foreach loop to indexed array
/*
$fruits = ["Mango","Jackfruit","Litchi"];
foreach($fruits as $fruit){
    echo $fruit."\n";
}
*/

// foreach loop to associative array

$students = [
    'name' => 'Nayeem',
    'city' => 'Khulna',
    'phone' => '123423435',
];
foreach($students as $key => $value ){
    // echo "$key : $value['name'].";
    echo "$key : $value\n";

}
// print_r($students);