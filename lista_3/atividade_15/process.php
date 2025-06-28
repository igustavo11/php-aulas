<?php
if($_POST){
    $venda = $_POST["venda"];
    if($venda <= 1000){
        $comissao = $venda * 0.05;
    } elseif($venda <= 5000){
        $comissao = $venda * 0.10;
    } else {
        $comissao = $venda * 0.15;
    }
    echo "valor da venda: R$ " . number_format($venda, 2, ',', '.') . "<br>";
    echo "comissão: R$ " . number_format($comissao, 2, ',', '.');
} else {
    echo "Nenhum dado foi enviado.";
}