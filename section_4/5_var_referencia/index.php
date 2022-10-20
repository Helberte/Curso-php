<?php

$teste = "nome";


$nova = & $teste;
// var $nova aponta para $teste

$nova = 15;
echo $nova . "<br>";

echo $teste;


?>