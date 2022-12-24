<?php

function a()
{
    return 'Dez';
}

function b()
{
    return 'Nove';
}

$valor = 10;

$numero = match($valor) {
    10 => a(),
    9 => b(),
    default => 'Outro valor'
};

echo $numero;