<?php
    $basePrice = $_GET['a'];
    $taxRate = $_GET['b'];


    $taxValue = $basePrice * ($taxRate / 100);
    $finalPrice = $basePrice + $taxValue;

    echo 'preço Base: ' . $basePrice . '<br>' .'taxa de imposto: ' . $taxRate . '<br>' .'valor do imposto:  ' . $taxValue . '<br>' .'preço final: R$ ' . $finalPrice . '';
