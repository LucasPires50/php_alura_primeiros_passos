<?php

class Conta 
{
    // Definir is dados da conta
    public string $cpfTitular;
    public string $nomeTitular;
    public float $saldo = 0;
    

    // Uma função que está dentro de uma classe é chamado de método
    public function sacar(float $valorASacar)
    {
        if($valorASacar > $this->saldo){
            echo "Saldo Indisponível";
        }else{
            $this->saldo -= $valorASacar;
        }

    }

    public function depositar(float $valorADepositar): void{
        if($valorADepositar < 0 ){
            echo "O valor a ser depositado tem que ser positivo!";
        }else{
            $this->saldo += $valorADepositar;
        }
    }

}

