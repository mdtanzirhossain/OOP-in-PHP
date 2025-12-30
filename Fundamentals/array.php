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

$data = ['name' => 'Abdur Rahim', 'age' =>25];
$serialized = serialize($data);
// string to json
$json =  json_encode($data);
print_r($json);
// print_r($serialized);

