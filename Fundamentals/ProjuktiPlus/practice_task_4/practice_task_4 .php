
<?php
/*while loop
we use while loop when we do not know how 
many times the loop will take place*/
$i = 1;
while($i < 5){
  echo "$i\n";
  // $i = $i + 1;
  $i++;
}


?>

<?php
/* we use for loop when we know how 
 many times the loop will take place
for loop ascending order*/
for($i=1; $i < 7;$i++){
  echo "$i\n";
}

?>

<?php
// for loop example 2
for($i=1; $i < 9;$i++){
  echo "3 x $i = ". (3*$i)."\n";
}

?>
<?php
// for loop example 3 descending order
for($i=5; $i >= 1;$i--){
  echo "$i\n";
}

?>