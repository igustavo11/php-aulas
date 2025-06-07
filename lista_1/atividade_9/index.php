
<?php
    // operation to parentheses

    $fristValue = (int) $_GET['a'];
    $secondaryValue = (int) $_GET['b'];
    $thridValue = (int) $_GET['c'];

    function resultFristExpression (){
        global $fristValue, $secondaryValue, $thridValue;
            return ($fristValue + $secondaryValue) * $thridValue;
    }
    
    function resultLastExpression() {
        global $fristValue, $secondaryValue, $thridValue;
         return $fristValue + ($secondaryValue * $thridValue);
    }


    echo "primeira expressão: (a + b) * c = " . resultFristExpression() . "<br/>";
    echo "segunda expressão: a + (b * c) =  ", resultLastExpression();