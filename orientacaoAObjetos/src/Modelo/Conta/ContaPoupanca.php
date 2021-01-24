<?php

namespace Alura\Banco\Modelo\Conta;

class ContaPoupanca extends Conta
{

    public function sacar(float $valorASacar): void
    {
        $tarifaSaque = $valorASacar * 0.03;
        $valorSaque = $tarifaSaque + $valorASacar;
        if ($valorSaque > $this->saldo) {
            echo "Saldo Indisponível" . PHP_EOL;
            // aplicado o return dessa forma não é ncessário usar o else
            return;
        }
        $this->saldo -= $valorSaque;
    }

}


?>