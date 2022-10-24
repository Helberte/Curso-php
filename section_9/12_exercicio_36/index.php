<?php


$arr = [];

for($i = 0; $i < 100; $i++){
  array_push($arr, $i + 2);
}

function maioresSete ($array, $padrao = 10){
  $retorno = [];

  for ($i=0; $i < count($array) ; $i++) { 
    if($array[$i] > 7){
      array_push($retorno, $array[$i]);
    }
  }  
  echo $padrao . "<br>";
  return $retorno;
}

foreach(maioresSete($arr) as $elemento){
  echo $elemento . ", ";
}
?>