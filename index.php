<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php

        abstract class Car {
            protected $speed;
            protected $color;

            abstract protected function showInfo();
        }

        class BMW extends Car {

            function __construct($speed, $color) {
                $this->speed = $speed;
                $this->color = $color;
            }

            function showInfo() {
                echo 'Скорость автомобиля: ' . $this->speed . '<br>';
                echo 'Цвет автомобиля: ' . $this->color . '<br>';
            }
        }

        interface Human {
            public function talk();
            public function walk();
        }

        interface Mutant {
            public function fly();
        }

        trait PrintSome {
            function say() {
                echo 'Привет<br>';
            }
        }

        class Person implements Human, Mutant {
            function talk() {
                echo 'Человек говорит<br>';
            }

            function walk() {
                echo 'Человек ходит<br>';
            }

            function fly() {
                echo 'Мутант умеет летать<br>';
            }
        }

        class Test {
            use PrintSome;
        }

        $max = new Person();
        $max->talk();
        $max->walk();
        $max->fly();
        $obj = new Test();
        $obj->say();

        $m3 = new BMW(310, 'Green');
        $m3->showInfo();
    ?>
</body>
</html>