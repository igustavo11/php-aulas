<?php
    if($_POST){
        $anoBissexto = $_POST["ano"];

        if(($anoBissexto % 4 == 0 && $anoBissexto % 100 != 0) || ($anoBissexto % 400 == 0)){
            echo "O ano " . $anoBissexto . " é bissexto.";
        } else {
            echo "O ano " . $anoBissexto . " não é bissexto.";
        }

    }else{
        echo "Nenhum dado foi enviado.";
    }