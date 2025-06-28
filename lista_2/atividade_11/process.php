<?php
if ($_POST) {
    $name = $_POST['nome'];
    $surname = $_POST['sobrenome'];

    // geracao: email = strtolower(nome) . '.' . strtolower(sobrenome) . '@senai.com.br'
    $email = strtolower($name) . '.' . strtolower($surname) . '@senai.com.br';

    echo "E-mail: " . $email;
} else {
    echo "Nenhum dado foi enviado!<br>";
}
?>