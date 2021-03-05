<?php

require_once 'autoload.php';
// Quando as classes tem o mesmo namespace, da para colocar tudo em uma única linha entre chaves. 
use Alura\Banco\Modelo\{Endereco, CPF};
use Alura\Banco\Modelo\Conta\{Conta, ContaConrrente, ContaPoupanca, SaldoInsuficienteException, Titular};


$contaConrrente = new ContaConrrente(
    new Titular(
        new CPF('123.456.789-99'),
        'Lucas Pires',
        new Endereco('Petrópolis', 'Bairro Teste', 'Rua Teste', '96')
    )
);

try {
    $contaConrrente->depositar(-100);
}catch(InvalidArgumentException $exception){
    echo "Valor a depositar precisa ser positivo, seu ráquer perigoso.";
}

?>