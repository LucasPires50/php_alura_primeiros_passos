<?php

class Pessoa
{
    public string $nome;
    public CPF $cpf;

    public function __construct(string $nome, CPF $cpf)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function recuperarNome(): string
    {
        return $this->nome;
    }

    public function recuperarCpf(): CPF
    {
        return $this->cpf->recuperarNumero();
    }

    
    public function validarNomeTitular(string $nomeTitular)
    {
        // strlen -> pega a quantidade de caracteres 
        if(strlen($nomeTitular) < 5){
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }
}


?>
