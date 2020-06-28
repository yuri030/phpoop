<?php

/**
 * Class vehicle
 */
class vehicle
{
    /**
     * @var
     */
    public $brand;
    public $color;


    /**
     * vehicle constructor.
     * @param $brand
     * @param $color
     */
function __construct($brand, $color)
    {
        $this->brand = $brand;
        $this->color = $color;
    }
    public function text()
    {
        echo "The vehicle is a {$this->brand} the color of the vehicle is {$this->color}.";
    }
}

/**
 * Class car
 */
class car extends vehicle {
    public $km;

    /**
     * car constructor.
     * @param $brand
     * @param $color
     * @param $km
     */

    public function __construct($brand, $color, $km) {
        $this->brand = $brand;
        $this->color = $color;
        $this->km = $km;
    }
    public function text() {
        echo "The vehicle is a {$this->brand} the color of the vehicle is {$this->color}, it has this much km: {$this->km}";
    }
}
$car = new car("mercedes", "yellow", "1200");
echo "<br>";
$car->text();
echo "<br>";
$motor = new vehicle("bmw", "green");
$motor->text();
?>