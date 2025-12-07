<?php

function verificacionGrado (float $nota): string
{
    if ($nota < 0 || $nota > 100) {
        return "La nota debe estar comprendida entre 0 y 100";
    }

    // Logica condicional, iremos de mas grande a mas pequeño para que no se solapen
    if ($nota >= 60) {
        return "Primera División";
    } elseif ($nota >= 45 && $nota < 60) {
        return "Segunda division";
    } elseif ($nota >= 33 && $nota < 45) {
        return "Tercera División";
    } else {
        return "El estudiante se renovará";
    }
}

// Verificacion, solo habrá que cambiar el dato con la nota recibida
$titulo = verificacionGrado(30);
echo "El titulo obtenido: " . $titulo;

?>