<?php

session_start();

$message = '';
$guess = null;

// gera o número aleatório e salva na sessão se não existir ainda
if (!isset($_SESSION['secret'])) {
    $_SESSION['secret'] = rand(1, 20);
    $_SESSION['attempts'] = 0;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $guess = isset($_POST['guess']) ? (int)$_POST['guess'] : null;
    $_SESSION['attempts']++;

    while ($guess !== null && $guess !== $_SESSION['secret']) {
        if ($guess < $_SESSION['secret']) {
            $message = 'tente um número maior!';
        } elseif ($guess > $_SESSION['secret']) {
            $message = 'tente um número menor!';
        }
        break; // para não entrar em loop infinito no post
    }

    if ($guess === $_SESSION['secret']) {
        $message = 'parabéns, você acertou em ' . $_SESSION['attempts'] . ' tentativa(s)!<br>';
        $message .= '<form method="post"><button type="submit" name="reset" value="1">jogar novamente</button></form>';
        unset($_SESSION['secret']);
        unset($_SESSION['attempts']);
    }
}

if (isset($_POST['reset'])) {
    unset($_SESSION['secret']);
    unset($_SESSION['attempts']);
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>jogo da adivinhação</title>
</head>
<body>
    <h2>adivinhe o número entre 1 e 20</h2>
    <?php if (!isset($_SESSION['secret'])): ?>
        <?php echo $message; ?>
    <?php else: ?>
        <form method="post">
            <input type="number" name="guess"  required>
            <button type="submit">tentar</button>
        </form>
        <?php if ($message): ?>
            <p><?php echo $message; ?></p>
        <?php endif; ?>
    <?php endif; ?>
</body>