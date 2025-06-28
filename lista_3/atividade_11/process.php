<?php 
    if($_POST){
        $fristNumber = $_POST["fristNumber"];
        $secondNumber = $_POST["secondNumber"];
        $operacao = $_POST["operacao"];

        switch ($operacao) {
            case "+":
                $result = $fristNumber + $secondNumber;
                echo "A soma é: " . $result;
                break;
            case "-":
                $result = $fristNumber - $secondNumber;
                echo "A subtração é: " . $result;
                break;
            case "*":
                $result = $fristNumber * $secondNumber;
                echo "A multiplicação é: " . $result;
                break;
            case "/":
                if ($secondNumber != 0) {
                    $result = $fristNumber / $secondNumber;
                    echo "A divisão é: " . $result;
                } else {
                    echo "Divisão por zero não é permitida.";
                }
                break;
            default:
                echo "Operação inválida.";
        }
    }