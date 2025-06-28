<?php
if ($_POST) {
    $weight = (float) $_POST['peso'];
    $heightcm = (float) $_POST['altura'];

    // convert height from cm to m
    $height = $heightcm / 100;
    // calculo: IMC = peso / (altura * altura)
    $imc = $weight / ($height * $height);
    
    // classification based on IMC value
    if ($imc < 18.5) {
        $classification = "Abaixo do peso";
    } else if ($imc >= 18.5 && $imc < 25) {
        $classification = "Peso normal";
    } else if ($imc >= 25 && $imc < 30) {
        $classification = "Sobrepeso";
    } else {
        $classification = "Obesidade";
    }
    echo "IMC: " . number_format($imc, 2, ',', '.') . "<br>";
    echo "Classificação: " . $classification;
} else {
    echo "Nenhum dado foi enviado";

}
?>