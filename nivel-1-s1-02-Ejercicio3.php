<?php   

$x = 2;
$y = 8;

echo $x + $y . "\n";
echo $x - $y . "\n";
echo $x * $y . "\n";
echo $x % $y . "\n";

$n = 1.25;
$m = 3.75;

echo $n + $m . "\n";
echo $n - $m . "\n";
echo $n * $m . "\n";

// Para utilizar el operador modulo con float, utilizamos fmod()
$modulo = fmod($x, $y);
echo $modulo;

// El doble de cada variable.
echo $x * 2 . "\n";
echo $y * 2 . "\n";
echo $n * 2 . "\n";
echo $m * 2 . "\n";

// Suma de todas las variables
echo $x + $y + $n + $m . "\n";

// El producto de todas las variables
echo $x * $y * $n * $m . "\n";

?>