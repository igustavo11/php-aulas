<?php
$employees = [
    'ana' => 2500,
    'bruno' => 3200,
    'carla' => 2800,
    'daniel' => 3100,
    'elisa' => 2950
];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>tabela de aumento salarial</title>
</head>
<body>
    <h2>tabela de aumento salarial (10%)</h2>
    <ul>
        <?php foreach ($employees as $name => $salary): ?>
            <li>
                <?php echo $name; ?> - salário antigo: R$ <?php echo number_format($salary, 2, ',', '.'); ?>, 
                novo salário: R$ <?php echo number_format($salary * 1.10, 2, ',', '.'); ?>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>