<?php


class Cachorro{

  function latir(){
    return "Au Au Au Au";
  }

  function andar(){
    return "Passo 1 passo 2 passo 3";
  }
}

$rex = new Cachorro;
$buldogue = new Cachorro;
$betina = new Cachorro;


echo $rex->latir();
echo "<br>";
echo $buldogue->andar();
echo "<br>";
echo $betina->latir();
?>