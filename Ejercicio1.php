<?php

//Problema de Lista Invertida

function lista_invertida($array)
{

    $array_invertido = array_reverse($array);

    return $array_invertido;
}

$array = [0, 1, 2, 3, 4];
$resultado = lista_invertida($array);
$total = count($array);

foreach ($resultado as $key => $value) {
    echo $value;
    if ($key < $total - 1) {
        echo ", ";
    } else {
        echo ".";
    }
}
