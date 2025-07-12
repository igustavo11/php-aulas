<?php
$message = '';
$number = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $number = isset($_POST['number']) ? (int)$_POST['number'] : null;
    if ($number < 1 || $number > 10) {
        $message = 'valor inválido, digite um número entre 1 e 10.';
        $number = null;
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>validador de entrada</title>
</head>
<body>
    <h2>digite um número entre 1 e 10:</h2>
    <?php if ($number === null): ?>
        <form method="post">
            <input type="number" name="number" >
            <button type="submit">enviar</button>
        </form>
        <?php if ($message): ?>
            <p style="color:red;"><?php echo $message; ?></p>
        <?php endif; ?>
    <?php else: ?>
        <p>você digitou: <?php echo $number; ?></p>
    <?php endif; ?>