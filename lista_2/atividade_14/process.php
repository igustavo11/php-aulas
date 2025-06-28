<?php
if ($_POST) {
    $total = floatval($_POST['total']);
    $amigos = intval($_POST['amigos']);

    if ($amigos > 0) {
        $valorPorPessoa = $total / $amigos;
        echo "Cada pessoa deve pagar: R$ " . number_format($valorPorPessoa, 2, ',', '.');
    } else {
        echo "O número de amigos deve ser maior que zero.";
    }
} else {
    echo "Nenhum dado foi enviado!<br>";
}
?>