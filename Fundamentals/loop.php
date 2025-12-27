<?php
//  while loop
//  if condition met, loop will be conducted in the block. 
//  if condition is not met, loop will not go through the block.

// 

// for loop

// ascending order
// for($i = 1; $i <=5; $i++){
//     echo"$i\n";
// }
// for($i = 5; $i >=1; $i--){
//     echo"$i\n";
// }
// for($i = 1; $i <= 5; $i++){
//     echo "5 x $i  = " . (5 * $i)."\n";
// }
/* Difference between while and for loop
in case of for loop, we know how many iteration will be there.
if we do not know, use while loop  */

// do while loop
// 1st iteration happpen, without checking the condition.

$i = 1;
do{
    echo "Login Attempt ". $i ."\n";
    $i++;
}while($i <=4);
