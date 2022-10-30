<?php


$cor = "vermelho";
$modelo = "BMW";
$forca = "1.0";
$portas = 4;
$flex = true;


$carro = compact("cor", "modelo","forca", "portas", "flex");

foreach($carro as $key => $valor){
  echo $key . " - " . $valor . "<br>";
}
?>