<?php
/*
function greet(){
    echo "Hello World";
}
greet();
*/
// function parameter with default value 
// things inside second bracket is called block
// function add($n1,$n2 = 20){
//     return $n1+$n2;
// }
// echo add(10);
?>

<?php
$globalVar = "Global"; //Global variable
function testScope(){
    $local = "Tanzir Hossain"; // local variable
    global $globalVar; //without writing the word global, global variable will not work
    echo $local."\n";
    echo $globalVar;
}
testScope();  
?>

<?php
// anonymous function
// an anonymous function can be kept under a variable
// at the end of the block, a semicolon will be added
// $greet = function(){
//     echo "Anonymous Function";
// };
// echo $greet(); // give a dollar sign before calling the anonymous function
?>

<?php
// arrow function
//  $add = fn($n1,$n2)=> $n1+$n2; // here fn is a keyword/syntax for declaration
// echo $add(10,5);
?>

<?php
// callback function
// function process($callback){
//     return $callback("Tanzir");
// }

// $result = process(function($name){
//     return "I am,$name";
// });

// echo $result;
?>