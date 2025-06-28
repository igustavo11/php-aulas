<?php
if ($_POST) {
    $city = $_POST['cidade'];
    $neighborhood = $_POST['bairro'];
    $street = $_POST['rua'];
    $number = $_POST['numero'];
    $block = $_POST['quadra'];

    // concatenação: (neighborhood . ' ' . city ...)
    $completeAddress = $neighborhood . ' ' . $city . ' ' . $street . ' ' . $number . ' ' . $block;

    echo "Endereço completo: " . $completeAddress;
} else {
    echo "Nenhum dado foi enviado!<br>";
}
?>