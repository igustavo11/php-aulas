<?php
if ($_POST) {
    $hourlyRate = $_POST['valorHora'];
    $weeklyHours = $_POST['horasSemana'];

    // calculate the monthly salary
    $monthlyGrossSalary = $hourlyRate * $weeklyHours * 4.5;
}

if ($_POST) {
    echo "Salario Bruto Mensal: R$ " . number_format($monthlyGrossSalary, 2, ',', '.');
} else {
    echo "Nenhum dado foi enviado!";
}
?>

