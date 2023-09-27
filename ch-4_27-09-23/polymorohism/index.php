<?php

use app\Circle;
use app\gem\Shape;
use app\Square;

require_once 'vendor/autoload.php';
class Index
{
    public function __construct()
    {


        $square = new Square(50, 20);
        echo "Square Area is " . $square->getArea();
        echo "<hr>";
        $this->getPrice($square);

        echo "<hr>";
        $circle = new Circle(20);
        echo "Circle Area is " . $circle->getArea();

        echo "<hr>";
        $this->getPrice($circle);
    }
    public function getPrice(Shape $shape)
    {
        $area = $shape->getArea();
        echo "Total Price is " . ($area * 20) . " $<hr>";
    }
}

new Index();


##62 6:56
