<?php
//     Seu programa PHP deve: 
// 1. Receber o peso, a altura e o gênero (Masculino/Feminino) informados pelo usuário no 
// formulário. 
// 2. Calcular o IMC usando a fórmula: IMC=Peso/(Altura×Altura). 
// o Lembre-se: Peso em kg e Altura em metros. 
// 3. Classificar o IMC do usuário com base na tabela abaixo, que diferencia os resultados por 
// gênero. 
// 4. Exibir o IMC calculado e a classificação correspondente na tela.

if($_POST){
    $weight = $_POST['peso'];
    $height = $_POST['altura'];
    $gender = $_POST['genero'];

    function calculateIMC($weight, $height) {
        return $weight / ($height * $height);
    }
    if($gender === "masculino"){
        $imc = calculateIMC($weight, $height);
        if ($imc < 20) {
            $classification = "abaixo do peso";
        } elseif ($imc >= 20 && $imc < 24.9) {
            $classification = "normal";
        } elseif ($imc >= 25 && $imc < 29.9) {
            $classification = "obesidade leve";
        } elseif ($imc >= 30 && $imc < 39.9) {
            $classification = "obesidade moderada";
        } else {
            $classification = "obesidade mórbida";
        }
    } elseif($gender === "feminino"){
        $imc = calculateIMC($weight, $height);
        if ($imc < 19) {
            $classification = "abaixo do peso";
        } elseif ($imc >= 19 && $imc < 23.9) {
            $classification = "normal";
        } elseif ($imc >= 24 && $imc < 28.9) {
            $classification = "obesidade leve";
        } elseif ($imc >= 29 && $imc < 38.9) {
            $classification = "obesidade moderada";
        } else {
            $classification = "obesidade mórbida";
        }
    }
    echo $classification . "<br>";
    echo "IMC: " . number_format($imc, 2, ',', '.');
    
}else {
    echo "por favor, preencha o formulário.";
}