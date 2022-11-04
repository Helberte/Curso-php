<?php

date_default_timezone_set("America/Sao Paulo");
// datas criadas com DateTime podem ser comparadas


$hoje = new DateTime();
$amanha = new DateTime();

$amanha->setDate(2022, 11, 5);

var_dump($hoje == $amanha) . "<br>"; // false
echo "<br>";
var_dump($hoje <> $amanha) . "<br>"; // true
echo "<br>";
var_dump($hoje < $amanha) . "<br>"; // true
echo "<br>";
var_dump($hoje > $amanha) . "<br>"; // false

?>