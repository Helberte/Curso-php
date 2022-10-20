<?php

// chamando uma variavel global no escopo local de uma function



$amor = "Nicarei Pereira";


function acessar(){

  global $amor;

  echo $amor . " e helberte";
}

acessar();

?>