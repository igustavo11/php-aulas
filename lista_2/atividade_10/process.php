<?php
if ($_POST) {
    $length = (float) $_POST['comprimento'];
    $width = (float) $_POST['largura'];
    $height = (float) $_POST['altura'];

    // calculo: volume = c * l * a
    $volume = $length * $width * $height;

    echo "Volume: " . number_format($volume, 2, ',', '.');
} else {
    echo "Nenhum dado foi enviado!<br>";
}
?>