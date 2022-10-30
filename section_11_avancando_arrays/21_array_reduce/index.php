<?php

$arr = [1,2,3,4];

function soma($a, $b){
  echo "a = $a - ";
  echo "b = $b <br>";
  return $a + $b;
}

$result = array_reduce($arr, "soma");

echo "$result <br>";
?>