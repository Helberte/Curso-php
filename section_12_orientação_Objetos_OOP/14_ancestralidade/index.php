<?php

class Humano{

}

class Programador extends Humano{

}

class Teste {

}
$sergio = new Programador;
$marcos = new Humano;


var_dump($sergio instanceof Teste);



?>