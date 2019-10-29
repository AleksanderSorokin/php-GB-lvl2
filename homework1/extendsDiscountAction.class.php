<?php

include 'discountAction.class.php';

class validDiscount extends discountAction {
    var $condition;

    function getCondition() {
        return $this->condition;
    }    
    function setCondition($condition) {
        $this->condition = $condition;
    }

    function startMethod($condition='При покупке 2-х товаров получи 3-й бесплатно') {
        echo "Внимание! ".$this->name.". Скидки до ".$this->discount."%. Только ".$this->period."дней.<br> Условие акции: ".$condition;
    }

}

$action = new discountAction('2=3', 100, 10);
$action = new validDiscount('2=3', 100, 10);
$action->startMethod();

?>