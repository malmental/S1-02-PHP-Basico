<?php   

$x = 2;
$y = 8;

echo $x + $y . PHP_EOL;
echo $x - $y . PHP_EOL;
echo $x * $y . PHP_EOL;
echo $x % $y . PHP_EOL;

$n = 1.25;
$m = 3.75;

echo $n + $m . PHP_EOL;
echo $n - $m . PHP_EOL;
echo $n * $m . PHP_EOL;

// Para utilizar el operador modulo con float, utilizamos fmod()
$modulo = fmod($x, $y);
echo $modulo;

echo $x * 2 . PHP_EOL;
echo $y * 2 . PHP_EOL;
echo $n * 2 . PHP_EOL;
echo $m * 2 . PHP_EOL;

echo $x + $y + $n + $m . PHP_EOL;

echo $x * $y * $n * $m . PHP_EOL;

?>