<?php
//  if I declare a variable inside a block or within second bracket, it becomes local.
// User defined function
// function greeting(){
//     echo "Hello World\n";
// }

// greeting();
// greeting();
// greeting();
// greeting();

/*
function add($n1,$n2){
   return $n1 + $n2;
}

add(5,60);
*/
/*
$globalVar = "Hossain"; // Global Variable

function testScope(){
    $local = "Tanzir "; // local variable
    echo $local;
    global $globalVar;
    echo $globalVar;
}

testScope();


// anonymous function
// Give 2 semicolon.One before the end of last 2nd bracket, and another after the last 2nd bracket
$greet = function (){
    echo "Hello, Future Devlopers!";
};

$greet(); // after variable name, give first bracket. This is a function call



// Array function
$add = fn($n1,$n2)  =>$n1 + $n2;


echo $add(60,60);

//fn is used to declare array function
*/

// callback function

function main($va){  //$va is the parameter of main function
    return $va("Future Developers"); //"Future Developers" is the arguement to anonymous function
}
//function->function->parameter
$result = main(function($name){  //$name is the parameter of the anonymous function
    return"Hello, $name!";         //function($name){...} is the arguement to main
});
echo $result;