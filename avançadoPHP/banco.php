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

function sacar($conta, $valorASacar){
    if ($valorASacar > $conta['saldo']) {
        exibeMensagem(mensagem:"Saldo insuficiente");
    }else{
        $conta['saldo'] -= 500;
    }    
    return $conta;
}

function exibeMensagem($mensagem){
    echo $mensagem . PHP_EOL;
}

$contasConrrentes['123.456.789-63'] = sacar($contasConrrentes['123.456.789-63'], 500);
$contasConrrentes['123.456.789-65'] = sacar($contasConrrentes['123.456.789-65'], 500);

foreach ($contasConrrentes as $cpf => $conta) {

    exibeMensagem($cpf . "  " . $conta['titular'] . "  " . $conta['saldo']);
}

?> 