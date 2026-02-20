<!-- Logical Operator -->


<?php
$n1 =10;
$n2 = "10";


// $equal = $n1 == $n2;
// echo $equal;

$notequal = $n1 != $n2;
// echo $notequal;
var_dump($notequal);
// The var_dump() function dumps information about one or more variables. 
// The information holds type and value of the variable(s).
?>



<?php
$t = true;
$f = false;
$and = $t && $f;
var_dump($and);
$or = $t || $f;
var_dump($or);
$not = !$t;
var_dump($not);

var_dump($t && $f);
var_dump($t || $f);
var_dump(!$t);
?>

<!-- comparison operator -->
<!-- Increment/Decrement operator -->

<?php
$a = 5;
$b = 5;

$c = $a++; //post increment
echo "$c\n";
$d = ++$b; //pre increment
echo "$b\n";
?>