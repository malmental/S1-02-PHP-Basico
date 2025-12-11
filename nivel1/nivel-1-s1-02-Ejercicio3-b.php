<?php

function calcular ($num1, $num2, $operador) {
    if(!is_numeric($num1) || !is_numeric($num2)) {
        return "El valor ingresado debe ser un numero";
    }

    $num1 = (float)$num1;
    $num2 = (float)$num2;

    switch($operador) {
        case '+':
            return $num1 + $num2;
        case '-':
            return $num1 + $num2;
        case '*':
            return $num1 * $num2;
        case '/':
            if($num2 == 0) {
                return "Error: no se puede dividir por cero";
            }
            return $num1 / $num2;
        default: "Operador no valido";
    }
}

// Verificación: solo se deben reemplazar los datos
echo calcular(8, 0, '/') . PHP_EOL;

?>
