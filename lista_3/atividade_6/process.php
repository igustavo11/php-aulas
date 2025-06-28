<?php
    if($_POST){
        $fristValue = $_POST["fristNumber"];
        $secondValue = $_POST["secondNumber"];

        if($fristValue > $secondValue){
            echo "O primeiro número é maior.";
        } else if($fristValue < $secondValue){
            echo "O segundo número é maior.";
        } else {
            echo "Os números são iguais.";
        }
    }
?>