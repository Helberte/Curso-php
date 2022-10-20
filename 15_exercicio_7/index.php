<?php


  $pessoa = ['nome' => 'Helberte', 
              'altura' => 1.67,
              'idade' => 17,
              'status_civil' => 'solteiro',
              'salario' => 1500];



  if($pessoa['idade'] >= 18){
    echo "<h1>Maior de idade</h1>";
  }else{
    echo "<h1>Menor de idade</h1>";
  }




?>