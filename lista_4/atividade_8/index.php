<?php
session_start();

$message = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $total = isset($_POST['total']) ? (int)$_POST['total'] : 0;
    $current = isset($_POST['current']) ? (int)$_POST['current'] : 1;
    $sum = isset($_POST['sum']) ? (float)$_POST['sum'] : 0.0;

    if (isset($_POST['grade'])) {
        $sum += floatval($_POST['grade']);
        $current++;
    } elseif (isset($_POST['total'])) {
        
    } else {
        $total = 0;
    }

    if ($total > 0 && $current <= $total) {
        $message = "Por favor, insira a nota de 0 a 10  {$current} de {$total}:";
    } elseif ($total > 0 && $current > $total) {
        
        $count = 0;
        $tempSum = $sum;
        $grades = $total;
        $average = 0;
        do {
            $average = $tempSum / $grades;
            $count++;
        } while ($count < 1); 
        $message = "Média final: " . number_format($average, 2);
        $total = 0;
        $current = 1;
        $sum = 0;
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">   
    <title>document</title>
</head> 
<body>
    <h2>calculo de media(notas de 0 a 10)</h2>
    <?php if (empty($total) || $total == 0): ?>
        <form method="post">
            <label for="total">quantas notas deseja inserir?</label>
            <input type="number" name="total" id="total" min="1" required>
            <button type="submit">iniciar</button>
        </form>
    <?php elseif ($current <= $total): ?>
        <form method="post">
            <label for="grade"><?php echo $message ?: "por favor, insira a nota de $total :"; ?></label>
            <input type="number" name="grade" id="grade" step="0.1" min="0" max="10" required>
            <input type="hidden" name="total" value="<?php echo $total; ?>">
            <input type="hidden" name="current" value="<?php echo $current; ?>">
            <input type="hidden" name="sum" value="<?php echo $sum; ?>">
            <button type="submit">enviar</button>
        </form>
    <?php else: ?>
        <p><?php echo $message; ?></p>
        <form method="post">
            <button type="submit">novo cálculo</button>
        </form>
    <?php endif; ?>

    <?php if (!empty($message) && ($current > $total)): ?>
        <p><?php echo $message; ?></p>
    <?php endif; ?>
</body>
</html>