<?php


$pessoa = [23, 'casado', 'helberte', 'costa', 'nicareli'];





foreach($pessoa as $valor){
  echo "{$valor} <br>";

  if($valor === 'helberte'){
    continue;
  }

  echo 'chegou aqui';
}

?>