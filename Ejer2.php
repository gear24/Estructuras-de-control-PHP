<?php


function esPrimo($numero) {    
    if ($numero <= 1) {
        return false;
    }
    
    // hacemos la lista desde 2 hasta la raiz de n
    for ($i = 2; $i <= 11; $i++) { 
        if ($numero % $i == 0) {
            return false;
        }
    }
    
    // Si ningun num lo divide, entonces es primo
    return true;
}


$numero = 3705; //sta cosa solo es divisible entre 13 y por 5 asi que esta dentro del rango y no es primo
if (esPrimo($numero)) {
    echo "$numero es un número primo.";
} else {
    echo "$numero no es un número primo.";
}

?>
