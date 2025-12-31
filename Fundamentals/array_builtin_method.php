<?php
/*
$data = ['Mango','',null];
$filtered = array_filter($data);
print_r($filtered);

//extract
$user = ['name'=>'Nayem', 'email' => 'nayem@gmail.com'];
// $test = extract($user);
// echo $test;
extract($user);
echo $email;


// $user = ['name'=>'Nayem', 'email' => 'nayem@gmail.com'];
$number = range(1,16);
$sliced = array_slice($number,4,5);
print_r($sliced);

// echo does not output an array
// echo only works with strings and scalars

$arr1 = ['Mango','Jackfruit'];
$arr2 = ['Litchi','Pineapple'];
$merged = array_merge($arr1,$arr2); 
print_r($merged);



 
$searched = ['Mango','Jackfruit'];
if(in_array('Litchi',$searched)){
    echo "Found!";
}else{
    echo "Not Found!";
}


$arr1 = ['Mango','Litchi'];
$arr2 = ['Litchi','Pineapple'];
$difference = array_diff($arr2,$arr1);
print_r($difference);

// echo will not work to print any parts of array.
*/

$numbers = range(1,10,2); // range(start, end, gap between each number)
print_r($numbers);