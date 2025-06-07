<?php

    // multiplication two values
    
    $primaryValue = $_GET["a"];
    $secondaryValue = $_GET['b'];

    $result = $primaryValue * $secondaryValue;

    echo "O resultado da multiplicação dos valores $primaryValue e $secondaryValue é $result";