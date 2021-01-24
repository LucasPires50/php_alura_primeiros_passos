<?php

namespace Alura\Banco\Modelo\Conta;

class ContaConrrente extends Conta
{

    protected function percentualTarifa(): float
    {
        return 0.05;
    }

    // Os métodos set são os que definem um valor no atributo privado
    public function transferir(float $valorATransferir, Conta $contaDestino): void
    {
        if ($valorATransferir > $this->saldo) {
            echo 'Saldo Indisponível';
            // aplicado o return dessa forma não é ncessário usar o else
            return;
        }
        $this->sacar($valorATransferir);
        $contaDestino->depositar($valorATransferir);
    }
}
