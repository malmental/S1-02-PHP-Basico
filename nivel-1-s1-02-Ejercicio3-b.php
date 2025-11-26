<?php

function calcular ($num1, $num2, $operador) {
    // Se deben validar los datos
    if(!is_numeric($num1) || !is_numeric($num2)) {
        return "El valor ingresado debe ser un numero";
    }

    // Haremos un cast para asegurar que los numeros se comporten del mismo modo
    // Usaremos float para numero decimales
    $num1 = (float)$num1;
    $num2 = (float)$num2;

    // Utilizamos un switch para realizar la operación;
    switch($operador) {
        case '+':
            return $num1 + $num2;
        case '-':
            return $num1 + $num2;
        case '*':
            return $num1 * $num2;
        case '/':
            // Hay que validar la division por 0:
            if($num2 == 0) {
                return "Error: no se puede dividir por cero";
            }
            return $num1 / $num2;
        default: "Operador no valido";
    }
}

// Verificación: solo se deben reemplazar los datos
echo calcular(8, 0, '/') . "\n";

?>
