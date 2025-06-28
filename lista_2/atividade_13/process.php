<?php
if ($_POST) {
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];

    // reorganizar: Sobrenome, Nome
    $saida = $sobrenome . ', ' . $nome;

    echo "Nome reorganizado: " . $saida;
} else {
    echo "Nenhum dado foi enviado!<br>";
}
?>