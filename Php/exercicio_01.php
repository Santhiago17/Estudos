<?php

$n = intval(readline("Digite um número inteiro: "));

$soma = 0;

for($i = 1; $i <= $n; $i++){
    $soma += $i;
}


echo "A soma de 1 a $n é $soma. \n";
