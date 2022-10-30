<?php


class User{

  function logar($senha){
    if($senha === "123456"){
      return "Logado";
    }else{
      return "Senha errada";
    }
  }
}


$helberte = new User;

echo $helberte->logar("12345k6")


?>