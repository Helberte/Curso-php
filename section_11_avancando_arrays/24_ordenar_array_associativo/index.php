<?php


$teste = ["ahelberte" => 4, 
          "bnicareli" => 3,
          "cfulano" => 2,
          "dbeltrano" => 1];


asort($teste);

print_r($teste);
echo "<br>";

arsort($teste);
print_r($teste);

echo "<br>";

ksort($teste);
print_r($teste);
echo "<br>";

krsort($teste);
print_r($teste);

?>