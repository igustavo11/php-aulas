<?php
    if($_POST){
        $numberInput = $_POST["numero"];
  
    if($numberInput > 0 ){
        echo"positivo";
    }else if($numberInput < 0){
        echo "negativo";
    }else{
        echo "zero";
    }
}
?>
 

