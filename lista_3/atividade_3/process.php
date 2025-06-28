<?php 
    if($_POST){
       $historyNote = $_POST["history"];
       $mathNote = $_POST["math"];
       $sciencieNote = $_POST["sciencie"]; 
         // Calcula a média das notas
         $average = ($historyNote + $mathNote + $sciencieNote) / 3;
    }
    switch ($average) {
        case $average >= 7:
            echo "Aprovado com média: " . number_format($average, 2);
            break;
        case $average >= 5:
            echo "Recuperação com média: " . number_format($average, 2);
            break;
        default:
            echo "Reprovado com média: " . number_format($average, 2);
            break;
    }
   ?>