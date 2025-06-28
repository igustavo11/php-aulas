<?php
if ($_POST) {
    $reais = (float) $_POST['reais'];
    $exchangeRate = (float) $_POST['cotacao'];
    $action = $_POST['action'];

    if($action === 'toDolar'){
    // calculo: dollarValue = reais / exchangeRate
        $dollarValue = $reais * $exchangeRate;
        echo "valor do real em dolar R$ " . number_format($dollarValue, 2, ',', '.');
    }else if ($action === 'toReal'){
        $realValue = $reais / $exchangeRate;
        echo "conversor do dolar em realR$ " . number_format($realValue, 2, ',', '.');
    }

}
else {
    echo "nenhum dado foi enviado!";
}
?>