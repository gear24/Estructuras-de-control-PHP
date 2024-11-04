<?php




function EsPali($palabra){
    // normalizacion
    $normalizada = strtolower(str_replace(' ', '', $palabra));

    $lista = array_reverse(str_split($normalizada)); // Invertimos
    $reversa = implode('', $lista); // hacemos el arreglo a cadena nuevamente

    return ($normalizada == $reversa ? "pali \n" : "no pali \n"); // Comparamos
        
}

print(EsPali('rotor'));
?>