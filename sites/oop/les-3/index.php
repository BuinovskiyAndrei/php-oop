<?php
error_reporting(-1);
require_once 'class/Car.php';

$car1 = new Car();
$car1->color='черный';
$car1->brand='volvo';

$car2 = new Car();
$car2->color='синий';
$car2->brand='BMW';

echo $car1->getCarInfo();
echo $car2->getCarInfo();