<?php

// format => formata a data que o DateTime entregou
// modify => Altera a data que o DateTime entregou


$dataNow = new DateTime();

echo $dataNow->format("d - m - y H:i:s") . "<br>";
echo $dataNow->format("d/m/Y") . "<br>";

// modify

$nova_data = new DateTime();

$nova_data->modify('+10 days');
echo $nova_data->format("d - m - Y") . "<br>";

?>