<?php   

    // sum two numbers int
    
    $primaryValue = $_GET["a"];
    $secondaryValue = $_GET['b'];

    $result = $primaryValue + $secondaryValue;

    echo "O resultado dos valores $primaryValue e $secondaryValue é $result";