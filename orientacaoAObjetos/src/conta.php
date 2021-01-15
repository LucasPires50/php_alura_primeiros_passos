<?php

class Conta 
{
    // Definir is dados da conta
    public string $cpfTitular;
    public string $nomeTitular;
    public float $saldo = 0;
    

    // Uma função que está dentro de uma classe é chamado de método
    public function sacar(float $valorASacar):void
    {
        if($valorASacar > $this->saldo){
            echo "Saldo Indisponível";

            return;
        }
            $this->saldo -= $valorASacar;
    }

    public function depositar(float $valorADepositar): void
    {
        if($valorADepositar < 0 ){
            echo "O valor a ser depositado tem que ser positivo!";

            return;
        }
            $this->saldo += $valorADepositar;
    }

    public function transferir(float $valorATransferir, Conta $contaDestino): void
    {
        if($valorATransferir > $this->saldo){
            echo 'Saldo Indisponível';

            return;
        }
            $this->sacar($valorATransferir);
            $contaDestino->depositar($valorATransferir);

    }

}

