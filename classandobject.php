<?php
class Product {
// Property
    public $name;
    public $price ;
    public $category;
    public $brand;
    public $stock;
    public $sku;
    
// Method
public function showDetails(){
    echo " Name: $this->name\n Price: $this->price\n Category: $this->category "; /*if you write property inside function, write this instead of object name */
// standard rules is to write access modifier name before property and method's name
}
}
    
// use "\n" to generate new line. 
$product1 = new Product();
$product1->name="Mobile"; /*This is a variable to show object name from $sign to name. This is property of oop. This is how we can access to property. */
$product1->price = "2000";
$product1->category="Technology";
$product1->brand="Walton";
$product1->stock="40";
$product1->sku="Tech001";

// echo $product1->name;
// we are creating new object inside the same class.
$product2 = new Product();
$product2->name="Laptop"; 
$product2->price = "80000";
$product2->category="Technology";
$product2->brand="ASUS"; 
$product2->stock="100";
$product2->sku="Tech002";

// echo $product2->name;
$product1->showDetails();

// echo $product2->sku;
?>

   <!-- writing public means, we can access property and method from outside the class -->
<!-- we will not create object via parent class -->