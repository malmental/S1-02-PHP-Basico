<?php

function calcularSuma ($punt1, $punt2, $punt3) {
    return $punt1 + $punt2 + $punt3;
}

function calcularMedia ($punt1, $punt2, $punt3) {
    $suma = calcularSuma($punt1, $punt2, $punt3);
    return $suma / 3;
}

function clasificar ($punt1, $punt2, $punt3) {
    if ($punt1 < 4000 && $punt2 < 4000 && $punt3 < 4000) {
        return "Eres un amateur";
    } elseif (($punt1 >= 4000 && $punt1 < 8000) || ($punt2 >= 4000 && $punt2 < 8000) || ($punt3 >= 4000 && $punt3 < 8000)) {
        return "Estas intermediamente segundon ...";
    } else {
        return "Pro level";
    }
}

function calcularTodo ($punt1, $punt2, $punt3) {
    echo "Puntuaciones: $punt1, $punt2 y $punt3" . PHP_EOL;
    echo "Suma de puntuacions: " . calcularSuma($punt1, $punt2, $punt3) . PHP_EOL;
    echo "Media de puntuaciones: " . calcularMedia ($punt1, $punt2, $punt3) . PHP_EOL;
    echo "Clasificación: " . clasificar($punt1, $punt2, $punt3) . PHP_EOL;
}

// LLamamos a la funcion para calcular con 3 puntajes
calcularTodo(1000, 5000, 9000);