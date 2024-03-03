<?php
function frecuencia_en_caracter($string)
{
    $frecuencia = array();
    
    // Recorremos la cadena de texto carácter por carácter
    for ($i = 0; $i < strlen($string); $i++) {
        $caracter = $string[$i];
        
        if (isset($frecuencia[$caracter])) {
            $frecuencia[$caracter]++;
        } else {
            $frecuencia[$caracter] = 1;
        }
    }
    
    return $frecuencia;
}

$string = "Buenos dias";
$resultado = frecuencia_en_caracter($string);
print_r($resultado);

