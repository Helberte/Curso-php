<?php

$controller = 0;

  while($controller < 100){

    echo $controller;
    echo ' - ';

    $controller++;

    if($controller === 50){
      break;
    }
  }
?>