<?php

class Carro {
    public function __construct(
        protected string $marca,
        protected string $cor,
    ){}

    public function andar(int $acelecacao, int $velocidadeMaxima,)
    {
        echo $acelecacao . ' ' . $velocidadeMaxima;
    }
}

$uno = new Carro(marca: 'Uno',cor: 'Preto',);

$uno->andar(velocidadeMaxima: 110, acelecacao: 5,);

echo "<br>";

var_dump($uno);