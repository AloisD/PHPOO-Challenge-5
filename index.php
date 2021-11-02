<?php
// index.php

require_once 'Bicycle.php';
require_once 'Car.php';


$bike = new Bicycle('red',1);
$bugatti = new Car('blue', 1, 'pedals');

var_dump($bugatti->switchOn());
var_dump($bike->switchOn());
$bike->setCurrentSpeed(15);
var_dump($bike->switchOn());
