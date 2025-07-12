<?php
$days = ['segunda', 'terça', 'quarta', 'quinta', 'sexta', 'sábado', 'domingo'];
$sales = [];
$total = 0;
$average = 0;
$max = 0;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    for ($day_index = 0; $day_index < 7; $day_index++) {
        $sales[$day_index] = isset($_POST['sales'][$day_index]) ? floatval($_POST['sales'][$day_index]) : 0;
        $total += $sales[$day_index];
    }
    $average = $total / 7;
    $max = max($sales);
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>controle de vendas semanais</title>
</head>
<body>
    <h2>informe o valor das vendas de cada dia:</h2>
    <form method="post">
        <?php for ($day_index = 0; $day_index < 7; $day_index++): ?>
            <label for="sales<?php echo $day_index; ?>"><?php echo $days[$day_index]; ?>:</label>
            <input type="number" name="sales[]" id="sales<?php echo $day_index; ?>" step="0.01" min="0" required><br>
        <?php endfor; ?>
        <button type="submit">calcular</button>
    </form>

    <?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
        <h3>resultados da semana:</h3>
        <label>total da semana:</label>
        <?php echo number_format($total, 2, ',', '.'); ?> <br>
        <label>média diária:</label>
        <?php echo number_format($average, 2, ',', '.'); ?><br>
        <label>maior venda do dia:</label>
        <?php echo number_format($max, 2, ',', '.'); ?><br>
    <?php endif; ?>
</body>
</html>