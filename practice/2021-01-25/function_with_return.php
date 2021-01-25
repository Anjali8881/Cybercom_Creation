<?php
    function add($number1,$number2){
        $resultadd = $number1 + $number2;
        return $resultadd;
    }

    function divide($number1,$number2){
        $resultdivide = $number1/$number2;
        return $resultdivide;
    }

    $resultcal = divide(add(10,10),add(5,5));
    echo $resultcal;
?>