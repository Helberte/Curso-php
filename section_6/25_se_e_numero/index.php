<?php

$var = "1.5";
$result = 0;

if(is_numeric($var)){
  echo 'É numero';
  $result = $var * 5;
  echo '<br>';

  echo $result;
}else{
  echo 'não é numero';
}



?>