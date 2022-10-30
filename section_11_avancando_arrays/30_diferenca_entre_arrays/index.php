<?php


$primeiro = [2,10,3,4,5,1000];
$segundo =  [2,3,4,15,6,54,45,85,888,555];
$segundox =  [2,3,4,5,6];


$teste = array_diff($primeiro, $segundo, $segundox);

print_r($teste);


?>