<?php
if ($_POST) {
    $birthYear = (int) $_POST['anoNascimento'];

    // calculo: idade = date('Y') - anoNascimento
    $age = date('Y') - $birthYear;

    echo "Idade: " . $age . " anos";
} else {
    echo "Nenhum dado foi enviado!<br>";
}
?>