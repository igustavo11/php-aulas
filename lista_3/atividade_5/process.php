<?php
if($_POST){
    $loginName = "adm";
    $password = 123;
    $login = $_POST["nome"];
    $passwordInput = $_POST["senha"];

    echo ($login && $passwordInput) ? 
        (($login == $loginName && $passwordInput == $password) ? 
            "Acesso permitido" : "Acesso negado") 
        : "Preencha todos os campos.";
} else {
    echo "Nenhum dado foi enviado.";
}
