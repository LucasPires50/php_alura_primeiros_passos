<?php

namespace Alura\Banco\Modelo;

// Sendo uma interface, então todos os métodos dela são abstratos
interface Autenticavel 
{
    public function podeAutenticar(string $senha): bool;
}

?>