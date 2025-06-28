<?php
if($_POST){
    $telefone = $_POST["telefone"];
    $ddd = substr($telefone, 0, 2);

    if($ddd === "21" || $ddd === "27" || $ddd === "11"){
        echo "DDD:" . $ddd;
        echo "telefone válido para o DDD informado";
    } else {
        echo "numero invalido";
    }
} else {
    echo "Nenhum dado foi enviado.";
}