<?php
namespace Alura\Banco\Modelo\Conta;

use Alura\Banco\Modelo\Pessoa;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;

class Titular extends Pessoa 
{
    private Endereco $endereco;

    public function __construct(CPF $cpf, string $nome, Endereco $endereco)
    {   
        // Chamando o construtor da classe base(Pessoa)
        parent::__construct($nome, $cpf);
        $this->endereco = $endereco;
    }

    public function recuperarEndereço() : Endereco
    {
        return $this->endereco;
    }

}