<?php
  if($_POST){
    $passwordValue = "bobbiegoods";
    $passwordInput = $_POST["senha"];

    echo $passwordInput == $passwordValue ? "acesso permitido" : "acesso negado";
  }else{
    echo "Nenhum dado foi enviado.";
  }