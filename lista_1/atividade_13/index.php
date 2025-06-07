<?php
// Temperature conversion from Celsius to Fahrenheit

$temperature_celsius = $_GET['a'];

$temperature_fahrenheit = ($temperature_celsius * 9/5) + 32;

echo "temperatura em fahrenheit: " . $temperature_fahrenheit;
