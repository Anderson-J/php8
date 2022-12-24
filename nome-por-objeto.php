<?php

namespace App\Models;

class Carro
{

}

echo Carro::class; // retorna o nome composto da classe

$uno = new Carro;

echo "<br>";
echo $uno::class;

$nomeClasse = $uno::class;