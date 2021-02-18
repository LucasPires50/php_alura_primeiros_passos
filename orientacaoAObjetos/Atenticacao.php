<?php

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\Gerente;
use Alura\Banco\Modelo\Service\Autenticador;

require_once 'autoload.php';

$autenticador = new Autenticador();
$umDiretor = new Gerente("João da Silva", new CPF("123.466.889-77"), 10000);

$autenticador->tentaLogin($umDiretor, '4321');
?>