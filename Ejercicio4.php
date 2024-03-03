<?php
function imprimir_piramide($length)
{
    $print = '';

    for ($i = 0; $i < $length; $i++) {

        for ($j = 0; $j < $length - $i - 1; $j++) {
            $print .= " ";
        }

        for ($k = 0; $k < 2 * $i + 1; $k++) {
            $print .= "*";
        }

        $print .= "\n";
    }

    return $print;
}

$length = 10;
$result = imprimir_piramide($length);

echo "<pre>";
echo $result;
echo "</pre>";
