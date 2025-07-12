<?php
    //calculadora com switch case
    if($_POST){
        $num1 = $_POST['numero1'];
        $num2 = $_POST['numero2'];
        $operacao = $_POST['operacao'];

        function calcular($num1, $num2, $operacao) {
            switch ($operacao) {
                case 'somar':
                    return $num1 + $num2;
                case 'subtrair':
                    return $num1 - $num2;
                case 'multiplicar':
                    return $num1 * $num2;
                case 'dividir':
                    if ($num2 == 0) {
                        return "erro: tentou dividir por zero ❌🚫💢.";
                    }
                    return $num1 / $num2;
                default:
                    return "Operação inválida.";
            }
        }

        $resultado = calcular($num1, $num2, $operacao);
        echo "Resultado: " . $resultado;
    } else {
        echo "por favor, preencha o formulário.";
    }