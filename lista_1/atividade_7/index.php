<?php
    // increase price

    $originalValue = $_GET["a"];
    $increasePercent = $_GET["b"];

    function discountSalary (){
        global $increasePercent, $originalValue;
        
        return $originalValue * ( $increasePercent/100) ;
    }
    $increase = $originalValue + discountSalary();
    
    echo"valor original do salario é $originalValue <br>";
    echo"percentual do aumento é $increasePercent % <br/>";
    echo"e o valor do aumento é    " . discountSalary() ."<br/>";
    echo "valor final é $increase";