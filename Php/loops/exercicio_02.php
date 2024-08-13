<?php

// Escreva um programa que receba dois números inteiros positivos a e b, e exiba todos os números primos no intervalo entre a e b (inclusive).

function is_prime($num)
{
    if ($num < 2) {
        return false;
    }


    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}


$a = intval(readline("Digite um número inteiro a: "));
$b = intval(readline("Digite um número inteiro b: "));

if ($a <= 0 || $b <= 0) {
    die(json_encode("Por favor, insira números positivos onde a <= b. \n"));
}

echo "Números primos entre $a e $b: ";

$prime_found = false;
for ($i = $a; $i <= $b; $i++) {
    if (is_prime($i)) {
        echo $i . " ";
        $prime_found = true;
    }
}

if (!$prime_found) {
    echo "Nenhum número primo foi encontrado neste intervalo";
}

echo "\n";
