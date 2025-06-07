<?php

$firstGrade = $_GET["nota1"];
$firstWeight = $_GET["peso1"];

$secondGrade = $_GET["nota2"];
$secondWeight = $_GET["peso2"];

$thirdGrade = $_GET["nota3"];
$thirdWeight = $_GET["peso3"];

function calculateWeightedAverage (){
    global $firstGrade, $firstWeight, $secondGrade, $secondWeight, $thirdGrade, $thirdWeight;
    return (($firstGrade * $firstWeight) + ($secondGrade * $secondWeight) + ($thirdGrade * $thirdWeight)) / ($firstWeight + $secondWeight + $thirdWeight);
}
echo "media ponderada ", calculateWeightedAverage();