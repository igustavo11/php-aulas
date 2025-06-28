<?php
if($_POST){
    $stars = $_POST["stars"];

    if ($stars == 5) {
        echo "Excelente";
    } elseif ($stars == 4) {
        echo "Muito bom";
    } elseif ($stars == 3) {
        echo "Bom";
    } elseif ($stars == 2) {
        echo "Regular";
    } elseif ($stars == 1) {
        echo "Ruim";
    } else {
        echo "avaliação inválida.";
    }
} else {
    echo "Nenhum dado foi enviado.";
}