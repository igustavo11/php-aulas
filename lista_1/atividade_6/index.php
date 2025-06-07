<?php
    // discount price

    $originalValue = $_GET["a"];
    $percentDiscount = $_GET["b"];

    function discountSalary (){
        global $percentDiscount, $originalValue;
        
        return $originalValue * ( $percentDiscount/100) ;
    }
    $discount = $originalValue - discountSalary();
    
    echo"valor original do salario é $originalValue <br>";
    echo"valor do desconto é $percentDiscount % <br/>";
    echo "e o valor do desconto é". discountSalary() . "<br/>";
    echo "valor final é $discount";