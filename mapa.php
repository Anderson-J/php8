<?php

$objeto = new stdClass;

$mapa = new WeakMap;

$mapa[$objeto] = 'Está na chave do objeto';

var_dump($mapa);

unset($objeto);

echo '<br';
var_dump($mapa);

echo '<br';
echo '<br';
$a = 'a';
$lista = [$a] = 'Está na chave da variável a';
var_dump($lista);

unset($a);

echo '<br';
var_dump($lista);