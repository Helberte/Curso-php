<?php


$frase = "O rato roeu a roupa do rei de roma";
$quant = 0;

for ($i=0; $i < strlen($frase); $i++) { 
  if(strtoupper($frase[$i])  === "A"){
    $quant++;
  }
}
echo "Quantidade de letras a => $quant";


?>