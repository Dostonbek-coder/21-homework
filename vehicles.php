<?php
namespace Vehicles;

class Car {
    private string $name;
    private int $speed;

    public function __construct(string $name, int $speed) {
        $this->name = $name;
        $this->speed = $speed;
    }

    public function showDetails() {
        echo "Car Name: {$this->name}, Speed: {$this->speed} km/h\n";
    }
}

class Bike {
    private string $name;
    private int $speed;

    public function __construct(string $name, int $speed) {
        $this->name = $name;
        $this->speed = $speed;
    }

    public function showDetails() {
        echo "Bike Name: {$this->name}, Speed: {$this->speed} km/h\n";
    }
}


// $car = new Car("BMW", 220);
// $bike = new Bike("Ducati", 180);

// $car->showDetails();
// $bike->showDetails();

?>