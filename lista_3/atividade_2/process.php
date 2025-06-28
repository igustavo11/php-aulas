<?php
    if($_POST){
        $numberInput = $_POST["numero"];

        $numberInput % 2 == 0 ? $result = "par" : $result = "impar";

      echo "O número é " .  $result;
}else{
    echo "Nenhum dado foi enviado.";
}
?>  