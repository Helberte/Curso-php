<?php

// a função func_get_args() do php retorna os parâmetros passados
// para a função

function soma($a, $b){

  print_r(func_get_args());

  return $a + $b;
}

soma(15,5);
echo "<br>";
// a função func_num_args() do php retorna o numero de 
// parâmetros passados para a função

function soma2($a, $b){

  print_r(func_num_args());

  return $a + $b;
}

soma2(15,5);
?>