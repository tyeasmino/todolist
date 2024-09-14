<?php
    class Shape {
        function circleArea($r) {
            return M_PI * $r * $r;
        }
        
        function rectangeArea($w, $h) {
            return $w * $h;
        }
        
    }

    class Circle extends Shape {
        public $r;

        function displayArea() {
            return $this->circleArea($this->r);
        }
    }

    class Rectange extends Shape {
        public $w, $h;

        function displayArea() {
            return $this->rectangeArea($this->w, $this->h);
        }
    }

    $r=2;
    $circle = new Circle();
    $circle->r = $r;
    echo "Area of circle is ". $circle->displayArea() ." for radius ".$r;
    echo "<br>"; 

    $w=5;
    $h=6;
    $rectangle = new Rectange();
    $rectangle->w = $w;
    $rectangle->h = $h;
    echo "Area of rectangle is ". $rectangle->displayArea() ." for width: ".$w ." and height: ". $h;
    echo "<br>";
?>