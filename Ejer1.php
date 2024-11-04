<?php

function generadorDeFibo($tope) {
    // ini de los primeros nums
    $fibo = [0, 1];

    // generar hasta que llegue a tope
    while (count($fibo) < $tope) {
        // calcular el sigueitne
        $siguiente = $fibo[count($fibo) - 1] + $fibo[count($fibo) - 2];
        $fibo[] = $siguiente; // Agregar
    }
    
    return $fibo; // Devolver la serie de Fibonacci generada
}


$tope = 15;
$serie = generadorDeFibo($tope); 
print_r($serie); 
?>
