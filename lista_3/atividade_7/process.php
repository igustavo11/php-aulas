<?php
    if($_POST){
        $age = $_POST["age"];

        switch(true){
            case ($age >= 0 && $age <= 12):
                echo "Criança";
                break;
            case ($age >= 13 && $age <= 17):
                echo "Adolescente";
                break;
            case ($age >= 18 && $age <= 59):
                echo "Adulto";
                break;
            case ($age >= 60):
                echo "Idoso";
                break;
            default:
                echo "Idade inválida";
        }
        // echo "voce é " . $age;
    }
?>