<?php

$ranking = [
  "Matheus" => 15,
  "Helberte" => 20,
  "Nicareli" => 20,
  "Fulano" => 12,
  "Beltrano" => 2,
  "Sicrano" => 4
];

arsort($ranking);

?>

<ol>
  <?php foreach($ranking as $key => $nota):  ?>    
    <li><?= "$key = $nota"; ?> </li>
  <?php endforeach; ?>
</ol>
  
