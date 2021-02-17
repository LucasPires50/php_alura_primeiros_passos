<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\Funcionario\Funcionario;

class Desenvolvedor extends Funcionario
{

    public function sobeDeNivel(): float
    {
        return $this->receberAumento($this-> recuperarSalario() * 0.75);
    }
}

?>
