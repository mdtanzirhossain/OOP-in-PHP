<?php
// array stores multiple data type
// // $fruit = array(
//     "Mango", "Jackfruit", "Litchi"
// );
// var_dump($fruit);
// print_r($fruit);


// There are 3 types of Array:
// Indexed Array
// Associative Array
// Multidimensional Array

// $student = [
//     'name' => 'Abdur Rahim', /*This is called key value pair  */
//     'age' => '25',
//     'department' => 'Mathmatics',
// ];
// // print_r($student);
// echo $student['age'];
/*
$data = ['name' => 'Abdur Rahim', 'age' =>25];
$serialized = serialize($data);
// string to json
$json =  json_encode($data);
print_r($json);
// print_r($serialized);



$csv = "Mango,Jackfruit,Litchi";
$fruits = explode(",",$csv); //The explode() function breaks a string into an array.
$fruitStr = implode("-",$fruits); //The implode() function breaks a array into an string.
print_r($fruitStr);
print_r($fruits);



$student = [
    ['name' => 'Abdur Rahim', 'age' => 35 ],
    ['name' => 'Abdur Kaium', 'age' => 39],
    ['name' => 'Abdur Jamal', 'age' => 32 ],
];

echo $student[1]['name']. "\n";
echo $student[2]['name'] . ' ' . $student[2]['age'];

*/

$data =['name' => 'Abdur Rahim', 'age' =>25];
$serialized = serialize($data);
echo $serialized ."\n";

$json = json_encode($data);
echo $json;