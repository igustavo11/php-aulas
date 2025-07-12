<?php
$products = [
    "arroz" => 7.50,
    "feijão" => 8.20,
    "macarrão" => 4.30,
    "óleo" => 6.99,
    "café" => 15.00
];
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>produtos e preços</title>
</head>
<body>
    <h2>lista de produtos</h2>
    <ul>
        <?php foreach ($products as $name => $price): ?>
            <li><?php echo $name . ": R$ " . number_format($price, 2, ',', '.'); ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>