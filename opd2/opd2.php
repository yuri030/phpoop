<?php
class vehicle {

    //properties
    public $brand;
    public $color;

    //methods
    function __construct($brand, $color)  {
        $this->brand = $brand;
        $this->color = $color;
    }
    public function text()  {
        echo "The vehicle is a {$this->brand} the color of the vehicle is {$this->color}.";
    }
}

class car extends vehicle {
    public $km;
    public function __construct($brand, $color, $km) {
        $this->brand = $brand;
        $this->color = $color;
        $this->km = $km;
    }
    public function text() {
        echo "The vehicle is a {$this->brand}, the color of the vehicle is {$this->color}, it has this much km: {$this->km}.";
    }
}

$car = new car("mercedes", "yellow", "1200");
echo "<br>";
$car->text();
echo "<br>";
$motor = new vehicle("bmw", "green");
$motor->text();
?>