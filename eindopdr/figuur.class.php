<?php

abstract class Figuur {
    public static $PI = 3.1415;
    protected $x;
    protected $y;
    private $omschrijving;

    function __construct($Ix, $Iy=null) {
    $this->setX($Ix);
    $this->setY($Iy);
}

public function setX($Ix) {
    if(!is_int($Ix)){
        die('is geen getal');
    }
    $this->x = $Ix;
}

public function setY($Iy) {
    if(!is_int($Iy)){
        die('is geen getal');
    }
    $this->y = $Iy;
}

public function getOmschrijving($Iomschrijving) : string {
    return $omschrijving;
}
public abstract function berekenOppervlakte();

}
?>