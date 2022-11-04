<?php

// diff => serve para sabermos a diferença entre duas datas


$dateOntem = new DateTime("11/01/2022");
$dateAmanha = new DateTime("11/05/2022");

$intervalo = $dateOntem->diff($dateAmanha);

echo $intervalo->format("%R%a dias");





?>