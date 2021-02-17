<?php

namespace Alura\Banco\Modelo;

class Funcionario extends Pessoa
{

    private string $cargo;
    private float $salario;

    public function __construct(string $nome, CPF $cpf ,string $cargo, float $salario)
    {
        // Chamando o construtor da classe base(Pessoa)
        parent::__construct($nome, $cpf);
        $this->cargo = $cargo;
        $this->salario = $salario;
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

    public function recuperarSalario(): float
    {
        return $this->salarial;
    }

    public function calcularBonificacao(): float
    {
        return $this->salario * 0.1;
    }
}


?>