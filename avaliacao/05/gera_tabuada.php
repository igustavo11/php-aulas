<?php

if($_POST){
    $numero = $_POST['numero_tabuada'];

    if($numero && $numero > 0){
        echo "<h3>Tabuada do $numero:</h3>";
        for($tabuada = 1; $tabuada <= 10; $tabuada++){
            $resultado = $numero * $tabuada;
            echo "$numero x $tabuada = $resultado<br>";
        }
    } else {
        echo "por favor, insira um número válido.";
    }
} else {
    echo "por favor, preencha o formulário.";
}