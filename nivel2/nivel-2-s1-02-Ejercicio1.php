<?php

function calcularCostoLlamada($duracion) {
    $costo = 0;

    // Si la duración es menor a 3 minutos, el costo es de 10 centimos
    if ($duracion < 3) {
        $costo += 10;
    } else {
        // Si la duracion es mayor o igual a 3 minutos, se suman 30 centimos (3x10)
        $costo += 30;

        // Y se suman 5 centimos adicionales por cada minuto
        $costo += ($duracion - 3) * 5;
    }
    return $costo / 100; // Devolvemos en euros
}

// Ejemplos de uso
$llamada = 4;
echo "El costo de la llamada es: " . calcularCostoLlamada($llamada) . "€";

?>