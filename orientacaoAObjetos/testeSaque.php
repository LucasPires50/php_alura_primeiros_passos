<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Conta\Conta;
use Alura\Banco\Modelo\Conta\ContaConrrente;
use Alura\Banco\Modelo\Conta\ContaPoupanca;


$conta = new ContaConrrente(
    new Titular(
        new CPF('123.456.789-99'),
        'Lucas Pires',
        new Endereco('Petrópolis', 'Bairro Teste', 'Rua Teste', '96')
    )
);


$conta->depositar(500);
$conta->sacar(100);

echo $conta->recuperSaldo();

?>