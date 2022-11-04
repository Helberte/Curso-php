<?php


// os parametros desta funcção é
// hora, minuto, segundo, mês, dia, ano
// retorna um timestamp unix, ou seja o valor em segundos correspondente aquela data

echo mktime(0,0,0,5,15,2022) . "<br>";
echo date('d - m - y', mktime(0,0,0,5,15,2022)) . "<br>";
echo date('d - m - y', mktime(0,0,0,12,0,2022)) . "<br>";




?>