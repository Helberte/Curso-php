<?php


$frase = "Este item está em promocao";


$inicial = strpos($frase, "promocao");
echo $inicial . "<br>";

$novaFrase = substr($frase, $inicial, strlen($frase));
echo $novaFrase . "<br>";

$fraseFinal = substr($frase, 0, $inicial) . " " . strtoupper($novaFrase);

echo $fraseFinal;
?>