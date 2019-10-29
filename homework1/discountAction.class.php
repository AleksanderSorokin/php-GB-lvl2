<?php

//класс акции (скидки)
class discountAction {
    var $name;
    var $discount;
    var $period;
    
    function __construct($name, $discount, $period) {
        $this->setName($name);
        $this->setDiscount($discount);
        $this->setPeriod($period);
    }
    
    function getName () {
        return $this->name;
    }
    function getDiscount () {
        return $this->discount;
    }
    function getPeriod () {
        return $this->period;
    }

    function setName () {
        $this->name = $name; 
    } 
    function setDiscount () {
        $this->discount = $discount; 
    } 
    function setPeriod () { 
        $this->period = $period; 
    } 
    function startMethod() {
        echo "Внимание! Акция ".$this->name." Скидки до ".$this->discount."%. Только ".$this->period." дней";
    }
}


?>