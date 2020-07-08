<?php

class Cilinder extends Figuur {

        public function __construct(float $Ih, float $Ir) {
            parent::__construct($Ih, $Ir);
        }

        public function getH(){
            return $this->$x;
        }
        
        public function getR(){
            return $this->$y;
        }

        public function berekenOppervlakte(){
            $oppTweeCirkels = 2 * parent::$PI * $this->getR() * $this->getR();

            $oppvlakteBuis = 2 * parent::$PI * $this->getR() * $this->getH();
            
            $oppvlakteCillinder = $oppTweeCirkels + $oppTweeCirkels;

            return $oppvlakteCillinder;
        }        
}
?>