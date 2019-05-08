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
        class Car {
            protected $speed;
            protected $model;

            function __construct($speed, $model)
            {
                $this->speed = $speed;
                $this->model = $model;
            }

            function showSpecifications() {
                echo 'Скорость автомобиля : ' . $this->speed . '<br>';
                echo 'Модель автомобиля : ' . $this->model . '<br>';
            }
        }

        class BMW extends Car {
            private $color;

            function __construct($speed, $model, $color)
            {
                parent::__construct($speed, $model);
                $this->color = $color;
            }

            function showColor() {
                echo 'Цвет автомобиля : ' . $this->color . '<br>';
            }
        }

        $m3 = new BMW(250, "M3", "Black");
        $m3->showSpecifications();
        $m3->showColor();
        
        $m3 = new BMW(310, "X5", "White");
        $m3->showSpecifications();
        $m3->showColor();


    ?>
</body>
</html>