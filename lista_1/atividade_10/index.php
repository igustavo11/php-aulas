<?php
    // calculate IMC

    $width = (float) $_GET['altura'];
    $weight =  $_GET['peso'];


    function calculateIMC ( $weight, $width) {       
        $result = $weight/$width**2;
        return $result;
    }

    echo'Seu IMC é: ', calculateIMC($weight, $width);