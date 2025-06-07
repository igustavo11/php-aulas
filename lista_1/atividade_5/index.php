<?php
// calculate avarage 
$historyNote = $_GET['a'];
$sicencieNote = $_GET['b'];
$sportsNote = $_GET['c'];

function calculateAvarage() {
    global $historyNote, $sicencieNote, $sportsNote;
    return ($historyNote + $sicencieNote + $sportsNote) / 3;
}

echo'A média final do aluno é ', calculateAvarage();