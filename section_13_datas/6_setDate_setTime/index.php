<?php

date_default_timezone_set("America/Sao_Paulo");
// setDate => Recebe ano mes e dia alterando completamente a data
// setTime => Recebe hora minuto e segundo alterando o tempo da data

// os parametros são
// ano, mês e dia
$data = new DateTime();

$data->setDate(2022, 11, 5);
echo $data->format("d - M - Y") . "<br><br>";

// setTime - parametros => hora, minuto, segundo

$nova_date = new DateTime();

$nova_date->setTime(16,10);
echo $nova_date->format("d - m - Y H:i:s") . "<br>";

echo date("d - m - Y H:i:s", strtotime("-1 hour"));

?>