<?php

namespace Alura\Banco\Modelo;

abstract class Pessoa
{
    use AcessoPropriedades;
    protected string $nome;
    private CPF $cpf;

    public function __construct(string $nome, CPF $cpf)
    {
        $this->validarNome($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function recuperarNome(): string
    {
        return $this->nome;
    }

    public function recuperarCpf(): string
    {
        return $this->cpf->recuperarNumero();
    }

    // método finalnão pode ser sobreescrito
    final protected function validarNome(string $nomeTitular)
    {
        // strlen -> pega a quantidade de caracteres 
        if(strlen($nomeTitular) < 5){
            throw new  NomeRegraException($nomeTitular);
        }
    }
}


?>
