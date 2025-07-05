<?php
    //Permita que o usuário informe um número (1 a 10) via formulário, e imprima a tabuada completa desse número com do...while.
    if (isset($_POST['number'])) {
        $number = $_POST['number'];
        $i = 1;
        echo "Tabuada do $number:<br>";
        do {
            echo "$number x $i = " . ($number * $i) . "<br>";
            $i++;
        } while ($i <= 10);
    }