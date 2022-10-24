<?php


  function getParImpar($numero){

    if($numero % 2 === 0){
      echo 'Par';
    }else{
      echo 'Impar';
    }
  }

  getParImpar(4);
?>