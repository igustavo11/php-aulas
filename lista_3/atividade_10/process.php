<?php
if($_POST){
    $note = $_POST["nota"];
    // - Lógica:
    // - A (9–10)
    // - B (7–8.9)
    // - C (5–6.9)
    // - D (3–4.9)
    // - E (0–2.9)

    switch(true){
        case ($note >= 9 && $note <= 10):
           echo $result = "A";
            break;
        case ($note >= 7 && $note < 9):
          echo  $result = "B";
            break;
        case ($note >= 5 && $note < 7):
           echo $result = "C";
            break;
        case ($note >= 3 && $note < 5):
         echo   $result = "D";
            break;
        case ($note >= 0 && $note < 3):
          echo  $result = "E";
            break;
        default:
          echo  $result = "Nota inválida";
            break;               
    }
  
} else {
    echo "Nenhum dado foi enviado.";
}