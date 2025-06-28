<?php
if ($_POST) {
    $age = (float) $_POST['idade'];

    // calculo: dias = idade * 365
    $days = $age * 365;

    echo "Idade: " . $age . " anos<br>";
    echo "Tempo de vida em dias: " . number_format($days, 0, ',', '.') . " dias";
} else {
    echo "Nenhum dado foi enviado!<br>";
}
?>