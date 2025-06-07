<?php
// concatenate string

$name = $_GET["name"];
$lastName = $_GET["last_name"];
$age =(int) $_GET ["age"];
$city = $_GET["city"];

echo "Olá, meu nome é " . $name . " " . $lastName . ", tenho " . $age . " anos e moro em " . $city . ".";