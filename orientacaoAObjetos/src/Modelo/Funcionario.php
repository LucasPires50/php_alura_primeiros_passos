<?php

namespace Alura\Banco\Modelo;

class Funcionario extends Pessoa
{

    private string $cargo;

    public function __construct(string $nome, CPF $cpf ,string $cargo)
    {
        // Chamando o construtor da classe base(Pessoa)
        parent::__construct($nome, $cpf);
        $this->cargo = $cargo;
    }

    public function recuperaCargo(): string
    {
        return $this->cargo;
    }

    public function alterarNome(string $nome): void
    {
        $this->validarNomeTitular($nome);
        $this->nome = $nome;
    }
}


?>