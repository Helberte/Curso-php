<?php


$array = [
  [1,2,3,4],
  [5,6,7,8],
  [9,10,11,12]
];

for($i = 0; $i < count($array); $i++){
  for($col = 0; $col < count($array[$i]); $col++){
    echo $array[$i][$col] . " ";
  }
  echo "<br>Mudando de array<br>";
}


?>