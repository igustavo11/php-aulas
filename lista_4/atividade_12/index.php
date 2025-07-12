<?php

$values = [];
$result = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $values = isset($_POST['values']) ? $_POST['values'] : [];
    // Converte todos para float
    foreach ($values as $key => $value) {
        $values[$key] = floatval($value);
    }

    if (count($values) === 5) {
        $multiplication = 1;
        $index = 0;
        while ($index < 5) {
            $multiplication *= $values[$index];
            $index++;
        }
        $result = $multiplication;
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>multiplicação acumulada</title>
</head>
<body>
    <h2>digite 5 valores para multiplicação acumulada:</h2>
    <form method="post">
        <?php for ($value_index = 0; $value_index < 5; $value_index++): ?>
            <label for="value<?php echo $value_index; ?>">valor <?php echo $value_index + 1; ?>:</label>
            <input type="number" name="values[]" id="value<?php echo $value_index; ?>" step="any" required><br>
        <?php endfor; ?>
        <button type="submit">calcular</button>
    </form>

    <?php if ($result !== null): ?>
        <h3>resultado da multiplicação acumulada:</h3>
        <?php echo $result; ?>
    <?php endif; ?>
</body>
</html>

