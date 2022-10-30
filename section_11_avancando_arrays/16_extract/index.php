<?php

// com o extract as chaves se tornam variaveis contendo o valor

$arr = ["nome" => "helberte", "idade" => 24];

extract($arr);

echo $idade;
?>