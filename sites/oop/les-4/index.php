<?php
error_reporting(-1);
require_once 'class/Car.php';

$car1 = new Car('синий', 180, 'volvo', 4);
$car2 = new Car('Красный', 200, 'BMV', 4);

echo $car1->getCarInfo();
echo $car2->getCarInfo();