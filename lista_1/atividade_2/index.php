<?php

    // subtracton two numbers
    
    $primaryValue = $_GET["a"];
    $secondaryValue = $_GET['b'];

    $result = $primaryValue - $secondaryValue;

    echo "O resultado da subtração dos valores $primaryValue e $secondaryValue é $result";