<?php



$nome = "Mateus";
$sobrenome = "Costa";

?>

<form action="#">
  <input type="text" value="<?= $nome; ?>">
  <div>
    <input type="text" value="<?= $sobrenome; ?>">
  </div>  
  <div>
    <input type="submit" value="Enviar">
  </div>
</form>