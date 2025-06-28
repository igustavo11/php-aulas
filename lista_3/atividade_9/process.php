<?php
if($_POST){
    $salary = $_POST["salario"];

    if($salary <= 1500){
        $bonus = $salary * 0.20;
    } elseif($salary <= 3000){
        $bonus = $salary * 0.15;
    } else {
        $bonus = $salary * 0.10;
    }
    echo "o bônus é de R$ " . number_format($bonus, 2, ',', '.');
    echo" e o salário total é de R$ " . number_format($salary + $bonus, 2, ',', '.');
} else {    
    echo "Nenhum dado foi enviado.";
}