<?php
// the issue of security
// with access modifier we secure property and method

class Product{
    public $name;
    private $price;

    function productInfo(){
        // writing this instead of all objects.
        // $price is private. But we access here via this method
        echo $this->price = 15000;
    }
}

$product1 = new Product();
$product1->name = "Mobile\n";
echo $product1->name;
// $product1->price = 15000;
// echo $product1->price;
$product1->productInfo();
// new object from same class.
$product2 = new Product(); 
?>