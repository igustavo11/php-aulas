<?php
if ($_POST) {
    $salary = (float) $_POST['salario'];
    $percentage = (float) $_POST['percentual'];

    // calculo: newSalary = salary + (salary * percentage / 100)
    $newSalary = $salary + ($salary * $percentage / 100);

    echo "Novo Salário: R$ " . number_format($newSalary, 2, ',', '.');
} else {
    echo "Nenhum dado foi enviado!<br>";
}
?>