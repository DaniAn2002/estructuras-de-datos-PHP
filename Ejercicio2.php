<?php
//Problema de suma de numeros pares
function numeros_pares($array)
{

    $resultado = 0;

    foreach ($array as $numero) {
        if ($numero % 2 == 0) {
            $resultado += $numero;
        }
    }
    return $resultado;
}

$array = [1, 2, 4, 5];
print_r("La suma de los pares es igual a: " . numeros_pares($array));
