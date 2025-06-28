<?php
if ($_POST) {
    $base = (float) $_POST['valorBase'];
    $taxa = (float) $_POST['taxa'];

    // caculo: final = base + (base * taxa / 100)
    $final = $base + ($base * $taxa / 100);

    echo "Preço Final: R$ " . number_format($final, 2, ',', '.');
} else {
    echo "Nenhum dado foi enviado!<br>";
}
?>