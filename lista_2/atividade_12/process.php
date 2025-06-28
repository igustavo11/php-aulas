<?php
if ($_POST) {
    $day = $_POST['dia'];
    $month = $_POST['mes'];
    $year = $_POST['ano'];

    // formatar: data = dia . '/' . mes . '/' . ano
    $date = $day . '/' . $month . '/' . $year;

    echo "Data formatada: " . $date;
} else {
    echo "Nenhum dado foi enviado!<br>";
}
?>