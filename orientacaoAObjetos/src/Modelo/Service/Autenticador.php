<?php

namespace Alura\Banco\Modelo\Service;

use Alura\Banco\Modelo\Autenticavel;

class Autenticador
{
    public function tentaLogin(Autenticavel $autenticaveldiretor, string $senha): void
    {
        if($autenticaveldiretor->podeAutenticar($senha)){
            echo 'OK. Usuário logado no sistema';
        }else{
            echo 'Senha incorreta.';
        }
    }
}


?>