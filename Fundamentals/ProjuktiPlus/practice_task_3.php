
<!-- string operator -->

<!-- <?php
// $firstName = "Tanzir";
// $lastname = "Rahman ";
// $fullName = $firstName ." ". $lastname;
// echo $fullName;

// $product = "Laptop";
// $price = 85000;
// echo "Product Name: ".$product." Product price:".$price."BDT";
?> -->

<!-- Spaceship Operator -->

<?php
$spaceship1 = 3<=>5;
echo "$spaceship1\n";
$spaceship2 = 5<=>5;
echo "$spaceship2\n";
$spaceship3 = 6<=>5;
echo "$spaceship3\n";

?>  

<!-- Null Coalescing Operator -->
 <?php
 $customer = null;
 $result = $customer ?? "visitor\n";
 echo $result;
 $customer = " Tanzir";
 $result = $customer ?? "visitor";
 echo $result;
 ?>

 <!-- If else -->
  <!-- It takes more runtime that switch -->
<!-- to set condition we need comparison operator -->
 <?php
//  $score = 40;
//  if($score >=80){
//     echo "A+\n";
//  }elseif($score >=70){
//     echo "A\n";
//  }elseif($score >=60){
//     echo "A-\n";
//  }elseif($score >=50){
//     echo "B\n";
//  }elseif($score >=40){
//     echo "C\n";
//  }elseif($score >=33){
//     echo "D\n";
//  }else{
//     echo "Failed";
//  }
 ?>
  
  <!-- switch -->
<?php
//   $score = 70;
  
//   switch($score){
//     case($score >=90);
//         echo "A";
//         break;
//     case($score >=80);
//         echo "B";
//         break;
//     case($score >=70);
//         echo "C";
//         break;
//     case($score >=60);
//         echo "D";
//         break;
//     default:
//         echo "Failed";
//   }

  
?>
 <!-- Turnery operator-->
  <!-- shorter version of if else  -->
<?php
//   condition ? "true": "false";

  $score = 100;
  $result = $score >=80 ? "A+" : "B";
  echo $result;
?>