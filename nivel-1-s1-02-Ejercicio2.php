<?php

/* Imprimir "¡Hola mundo!" usando una variable. Al final:
Transforma todos los caracteres de la cadena a letras mayúsculas e 
imprímelos en pantalla. Imprima en pantalla el tamaño (longitud) 
de la variable. Imprima la cadena por pantalla en orden 
inverso de caracteres. Crea una nueva variable con el contenido 
“Este es el curso PHP” e imprime la concatenación de ambas cadenas por pantalla.*/

$str = "hola mundo\n";

echo $str;

$str = strtoupper($str);
echo $str;

echo strlen($str);
echo strrev($str) . "\n";

$str2 = "\nEste es el curso de PHP";
$concentracion = $str . $str2;

echo($concentracion);

?>