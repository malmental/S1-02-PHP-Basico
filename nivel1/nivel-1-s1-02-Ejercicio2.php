<?php

$str = "hola mundo". PHP_EOL;
echo $str;

$str = strtoupper($str);
echo $str;

echo strlen($str);
echo strrev($str) . PHP_EOL;

$str2 = "Este es el curso de PHP";
$concentracion = $str . $str2;

echo($concentracion);

?>