<?php
if ($_POST) {
    $width = (float) $_POST['largura'];
    $height = (float) $_POST['altura'];

    // calculo: perimetro = 2 * (largura + altura)
    $perimeter = 2 * ($width + $height);

    echo "Perímetro: " . number_format($perimeter, 2, ',', '.');
} else {
    echo "Nenhum dado foi enviado!<br>";
}
?>