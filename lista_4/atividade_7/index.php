<?php
session_start(); //sessao para armazenar dados entre requisições

if (!isset($_SESSION['sum'])) { //verifica se a variável de soma já existe na sessão
    $_SESSION['sum'] = 0;
}

if ($_POST) {
    $number = (int) $_POST['numero'];
    
    if ($number == 0) {
        $finalSum = $_SESSION['sum'];
        $_SESSION['sum'] = 0;
        echo "A soma total dos números digitados é: " . $finalSum;
    } else {
        $_SESSION['sum'] += $number;
        echo "Número adicionado! Soma parcial: " . $_SESSION['sum'];
    }
} else {
    $_SESSION['sum'] = 0;
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma de Números</title>
</head>
<body>
    <h2>soma de numeros</h2>
    <form method="post" action="">
        <label for="numero">digite um número (0 para finalizar):</label>
        <input type="number" name="numero" id="numero" required>
        <button type="submit">enviar</button>
    </form>
</body>
</html>