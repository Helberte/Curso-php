<?php

function teste(){

  $a = 0;

  $a++;

  echo "$a <br>";
}
function testeStatic(){

  static $a = 0;

  $a++;

  echo "$a <br>";
}


for($i = 0; $i < 10; $i++){
  testeStatic();
}


?>