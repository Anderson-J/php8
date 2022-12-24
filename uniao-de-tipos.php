<?php

declare(strict_types = 1);

class Marca
{

}

class Carro {
    public int $velocidadeAtual = 0;
    public function __construct(
        protected string|Marca $marca,
        protected string $cor,
    ){}

    public function andar(
        int|string $acelecacao,
        int|string | null $velocidadeMaxima = null,
    ): string|float {
        return $acelecacao . ' ' . $velocidadeMaxima;
    }

    public function estaAndando(): int|false
    {
        if ($this->velocidadeAtual > 0) {
            return $this->velocidadeAtual;
        } else {
            return false;
        }
    }
}

$uno = new Carro(marca: 'Uno',cor: 'Preto',);

echo $uno->andar(velocidadeMaxima: '110', acelecacao: '5',);

echo "<br>";

var_dump($uno);