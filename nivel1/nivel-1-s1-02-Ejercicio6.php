<?php

function isBitten() : bool
{
    $numeroAleatorio = rand (0, 1);
    // Se utiliza el operador identico ya que 1 imprime 'True'
    return $numeroAleatorio === 1;
}

// Ejemplo
if(isBitten()) {
    echo "Salió verdadero y te muerde";
} else {
    echo "Salió falso y te salvas";
}

?>