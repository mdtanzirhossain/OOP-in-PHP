<?php

class Product {
    public $name;
    public $price;
    public $category;
    public $brand;
    public $stock;
    public $sku;

    public function showDetails(){
        echo "Name: $this->name\n";
        echo "Price: $this->price\n";
        echo "Category: $this->category\n";
    }
}

class Mobile extends Product {
    public $manufacturer;

    public function showMobileDetails(){
        echo "Name: $this->name\n";
        echo "Price: $this->price\n";
        echo "Category: $this->category\n";
        echo "Manufacturer: $this->manufacturer\n";
    }
}

// Create Mobile object
$product3 = new Mobile();
$product3->name = "Smartphone";
$product3->price = "2000";
$product3->category = "Technology";
$product3->manufacturer = "Vivo";

// Call method correctly
$product3->showMobileDetails();

?>
