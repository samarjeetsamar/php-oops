<?php

require_once 'autoload.php';

$car = new Car('blue', 'Toyota');
echo $car->getInfo(); // output: This is a blue Toyota car.