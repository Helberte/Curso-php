<?php


$palavra = "boa";
$var = "fulano de tal é boa pessoa, boa pessoa ele é, boa pessoa nós veremos se fulano é boa pessoa";

echo $var . "<br><br>";
$parte_inici = substr($var, 0, strrpos($var, $palavra));

echo $parte_inici . "<br><br>";
echo substr($var, strrpos($var, $palavra), strlen($palavra)) ;

?>