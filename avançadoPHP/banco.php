<?php

$contasConrrentes = [
    '123.456.789-63' =>  [
        'titular' => 'Vinicius',
        'saldo' => 1000
    ], 
    '123.456.789-64' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ], 
    '123.456.789-65' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ]
];

function sacar(array $conta, float $valorASacar): array{
    if ($valorASacar > $conta['saldo']) {
        exibeMensagem("Saldo insuficiente");
    }else{
        $conta['saldo'] -= 500;
    }    
    return $conta;
}

function depositar(array $conta, float $valorADepositar): array{

    if($valorADepositar > 0){
        $conta['saldo'] += $valorADepositar;
        exibeMensagem("Deposito efetuado!!!!!!!!!!");
    }else{
        exibeMensagem("Depositos precisam ser positivo.");
    }
    
    return $conta;
}

function exibeMensagem(string $mensagem){
    echo $mensagem . PHP_EOL;
}

$contasConrrentes['123.456.789-63'] = sacar($contasConrrentes['123.456.789-63'], 500);
$contasConrrentes['123.456.789-65'] = sacar($contasConrrentes['123.456.789-65'], 500);

$contasConrrentes['123.456.789-64'] = depositar($contasConrrentes['123.456.789-64'], 900);

foreach ($contasConrrentes as $cpf => $conta) {

    exibeMensagem($cpf . "  " . $conta['titular'] . "  " . $conta['saldo']);
}

?> 