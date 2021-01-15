<?php

class Conta 
{
    // Definir is dados da conta
    public string $cpfTitular;
    public string $nomeTitular;
    public float $saldo;
    

    // Uma função que está dentro de uma classe é chamado de método
    public function sacar(float $valorASacar)
    {
        if($valorASacar > $this->saldo){
            echo "Saldo Indisponível";
        }else{
            $this->saldo -= $valorASacar;
        }

    }
}

