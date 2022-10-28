<?php



$url = "https://www.google.com/search?q=retornar+tamanho+string+php&oq=retornar+tamanho+string+php&aqs=chrome..69i57j0i546l2.8879j0j7&sourceid=chrome&ie=UTF-8";

$array_url = parse_url($url);

print_r($array_url);
echo "<br>";
echo "<br>";

echo $array_url['query'];
?>