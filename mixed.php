<?php

use Carro as GlobalCarro;

class Carro {
    public function __construct(
        protected string $marca,
        protected string $cor,
        protected int $velocidadeAtual,
        protected int $ano,
        protected $modelo
    ){}

    /**
     * array|bool|callable|int|float|null|object|ressource|string
     * 
     * @param string $nomePropriedade
     * @return mixed
     */
    public function info(string $nomePropriedade): mixed
    {
        return $this->$nomePropriedade;
        // return null;
    }
}

$uno = new Carro('Fiat', 'Preto', 110, 2018, 'Mile');

echo $uno->info('velocidadeAtual');