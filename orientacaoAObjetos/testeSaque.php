<?php

require_once 'autoload.php';
// Quando as classes tem o mesmo namespace, da para colocar tudo em uma única linha entre chaves. 
use Alura\Banco\Modelo\{Endereco, CPF};
use Alura\Banco\Modelo\Conta\{Conta, ContaConrrente, ContaPoupanca, SaldoInsuficienteException, Titular};


$conta = new ContaConrrente(
    new Titular(
        new CPF('123.456.789-99'),
        'Lucas Pires',
        new Endereco('Petrópolis', 'Bairro Teste', 'Rua Teste', '96')
    )
);


$conta->depositar(500);
try {
    $conta->sacar(600);
} catch (SaldoInsuficienteException $exception){
    echo "Você não tem saldo para realizar este saque.". PHP_EOL;
    echo $exception->getMessage();
}


echo $conta->recuperSaldo();

?>