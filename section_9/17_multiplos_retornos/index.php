<?php


function retornaVarias(){

  return ["helberte", "costa", 24, "Analista"];
}

foreach(retornaVarias() as $item){
  echo $item . " ";
}

?>