<?php


$pessoa = [
  "Alexia" => 25,
  "Matheus" => 29,
  "Nicareli" => 21,
  "Helberte" => 24
]
?>

<table border="1 ">
  <tr>
    <th>Nome</th>
    <th>Idade</th>
  </tr>
  <?php foreach($pessoa as $chave => $valor): ?>
    <tr>
      <td><?= $chave; ?></td>
      <td><?= $valor; ?></td>
    </tr>
  <?php endforeach; ?>
</table>