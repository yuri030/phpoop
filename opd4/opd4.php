<?php

/**
 * Class vehicle
 */
abstract class vehicle {
    public $name;
    /**
     * vehicle constructor.
     * @param $name
     */
    public function __construct($name) {
        $this->name = $name;
    }
    /**
     * @return string
     */
    abstract public function intro() : string;
}

/**
 * Class bike
 */
class bike extends vehicle {
    /**
     * @return string
     */
    public function intro() : string {
        return "I'm travlling with a $this->name!";
    }
}

/**
 * Class motor
 */
class boat extends vehicle {
    /**
     * @return string
     */
    public function intro() : string {
        return "I'm travlling with a $this->name!";
    }
}

$bike = new bike("bicycle");
echo $bike->intro();
echo "<br>";

$boat = new boat("boat");
echo $boat->intro();

?>
