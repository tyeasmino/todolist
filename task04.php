<?php
    class Animal {
        function sounds() {
            echo "making sounds randomly";
        }
    }

    class Cat extends Animal {
        function sounds() {
            echo "Cat makes sound <strong>meow</strong>.<br>";
        }
    }

    class Cow extends Animal {
        function sounds() {
            echo "Cow makes sound <strong>humba</strong>.<br>";
        }
    }

    class Crow extends Animal {
        function sounds() {
            echo "Crow makes sound <strong>caw</strong>.<br>";
        }
    }

    $cat = new Cat();
    $cat->sounds();

    $cow = new Cow();
    $cow->sounds();

    $crow = new Crow();
    $crow->sounds();
?>