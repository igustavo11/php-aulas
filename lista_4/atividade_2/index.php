<?php

    if (isset($_POST['number'])) {
        $number = $_POST['number'];
        echo "contagem regressiva de $number:<br>";
        while ($number >= 0) {
            echo $number . "<br>";
            $number--;
        }
    }