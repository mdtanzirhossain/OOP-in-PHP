<?php
// parent class is considered as base class.
// do not create object from parent class. Create from child class. In wordpress, parent class is already exists. 

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

class Mobile extends Product{

    public $manufacturer;

    public function showMobileDetails(){
        echo " Name: $this->name\n Price: $this->price\n Category: $this->category\n Manufacturer: $this->manufacturer";
    }

}
 
    
// use "\n" to generate new line. 
$product3 = new Mobile();
$product3->manufacturer = "Vivo";
$product3->name="Mobile"; /*This is a variable to show object name from $sign to name. This is property of oop. This is how we can access to property. */
$product3->price = "2000";
$product3->category="Technology";
$product3->brand="Walton";
$product3->stock="40";
$product3->sku="Tech001";




$product3->showMobileDetails();
?>