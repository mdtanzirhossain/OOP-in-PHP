<?php
// __constructor function reduce codes. It is automatically called.
// class Shape{
//     public $color;
//     public function showColor(){
//         return "Color: $this->color";
//     }
// }
// class Rectangle extends Shape{
//     public $width;
//     public $height;
//     public function area(){
//         return "Color: $this->color; \n". $this->width * $this->height;
//     }
// }

// $area = new Rectangle();
// $area->color = "Green";
// $area->width = 100;
// $area->height = 100;
// echo "Area of this Rectangle is: ".$area->area();
// echo $area->showColor();


class Shape{
    public $color;
    public $width;

    public function __construct($retanglecolor,$rectanglewidth){
        $this->color = $retanglecolor;
        $this->width = $rectanglewidth;

    }

    public function showColor(){
        echo "Color: $this->color, Width: $this->width";
    }
}
 


$area = new Shape("Blue", 30);

// echo "Area of this Rectangle is: ".$area->area();
$area->showColor();
?>