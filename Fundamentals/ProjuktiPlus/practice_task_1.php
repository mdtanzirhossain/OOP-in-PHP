<?php
echo "Hello World!\n";
$test = "This is a variable\n";
echo $test;
define("Good_Morning", "This is an example of constant\n");
echo Good_Morning;
define("GREETING", "Welcome to W3Schools.com!\n");
echo GREETING;
?>
<!-- There are 3 types of case which are considered as best practice

1. Snakecase - $my_name (variable/function)
2. camelCase - $myname (Method)
3. MyName - PascalCase (Class) -->

$a = $b;
$a is an expression
$b is another expression 
$a = $b; This is a statement

Data Type:

There are 3 types of data type.
1. Scalar data type
    a. Integer Ex: 25, -2
    b. Float/Double Ex: 10.5, -5.7
    c. String Ex: "Hello"
    d. Boolean Ex: True, False
2. Compound data type
    a. Array Ex: $colors = ["Red", "Green", "Blue"];
    b. Object Ex: $user1 = new User();
3. Spacial type
    a. Null Ex: $name = null; 
    <!-- the null data type is used when set a default value -->
     <!-- we can use Null for coupon code. If there is coupon, we use it. 
      Otherwise, we use default price. 
      If there is Null as default, there is no coupon    -->
    b. Resources 
    Ex:
    $file = fopen("example.txt", "r");
    var_dump($file);

<!-- Operator -->
Arithmetic Operators
<!-- <?php
    //  $a = 15;
    //  $b = 4;
    //  $addition = $a + $b;
    //  echo $addition."\n";
    //  $subtraction = $a - $b;
    //  echo $subtraction."\n";
    //  $multiplication = $a * $b;
    //  echo $multiplication."\n";
    //  $division = $a / $b;
    //  echo $division."\n";
    //  $modulus = $a % $b;
    //  echo $modulus."\n";
    //  $exponentiation = $a ** $b;
    //  echo $exponentiation."\n";
?> -->
    <!-- Assignment Operator -->
<?php
$a =0;
$a = $a + 2;
echo $a."\n";
$a += 2;
echo $a."\n";
$a -= 2;
echo $a."\n";
$a *= 2;
echo $a."\n";
$a /= 2;
echo $a."\n";
$a %= 2;
echo $a."\n";

?>