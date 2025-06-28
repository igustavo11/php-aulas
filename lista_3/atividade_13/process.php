<?php
if($_POST){
    $age = $_POST["idade"];

    if($age >= 18){
        echo"acesso permitido";
    }else{
        echo "acesso negado, idade nao permitida";
    }
} else {
    echo "Nenhum dado foi enviado.";
}