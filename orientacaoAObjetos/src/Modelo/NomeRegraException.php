<?php

namespace Alura\Banco\Modelo;

class NomeRegraException extends \DomainException
{
    public function __construct(string $nomeTitular)
    {
        $mensagem = "O nome $nomeTitular está inválido ,pois, tem menos de 5 caracteres.";
        parent::__construct($mensagem);
    }
}

?>