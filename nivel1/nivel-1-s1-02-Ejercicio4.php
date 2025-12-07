<?php

/* Crea un programa que implemente una función donde se cuente hasta un número determinado. 
Si no se incluye un número determinado, el número debe tener un valor predeterminado igual a 10. 
Además, esta función debe tener un segundo parámetro que indique cuánto se cuenta 
(D'1 en 1, 2 en 2...). La cuenta debe mostrarse mediante una pantalla paso a paso. */

function contarHasta(int $hasta = 10, int $incremento = 1) {
    if ($incremento <= 0) {
        echo "El numero debe ser positivo";
        return;
    }

    for ($i = 0; $i <= $hasta; $i += $incremento ) {
        echo "Numero: " . $i . "\n";
    }
}

// Ejemplo
contarHasta (30, 1);

?>