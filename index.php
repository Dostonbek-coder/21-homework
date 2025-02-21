<?php
require_once 'Vehicles.php'; 

use Vehicles\Car;
use Vehicles\Bike;

$car = new Car("BMW", 220);
$bike = new Bike("Ducati", 180);

$car->showDetails();
$bike->showDetails();

?># Vehiles-namespace
