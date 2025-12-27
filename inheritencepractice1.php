<?php
class Shape{
    public $color;
    public function showColor(){
        return "Color: $this->color";
    }
}
class Rectangle extends Shape{
    public $width;
    public $height;
    public function area(){
        return "Color: $this->color; \n". $this->width * $this->height;
    }
}

$area = new Rectangle();
$area->color = "Green";
$area->width = 100;
$area->height = 100;
echo "Area of this Rectangle is : " .$area->area();
echo $area->showColor();
?>