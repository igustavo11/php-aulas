<?php 
// Products at cart shopping

$firstProductPrice = $_GET["preco1"];
$firstAmountPrice = $_GET["quantidade1"];

$secondProductPrice = $_GET["preco2"];
$secondAmountPrice = $_GET["quantidade2"];

$firstBuy = $firstProductPrice * $firstAmountPrice;
$secondBuy = $secondProductPrice * $secondAmountPrice;
$totalPurchase = $firstBuy + $secondBuy;

echo "Valor total do carrinho : " . $totalPurchase;

