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

function exibeMensagem($mensagem){
    echo $mensagem . PHP_EOL;
}

// saque
$contasConrrentes['123.456.789-63']['saldo'] -= 500;
if (500 > $contasConrrentes['123.456.789-65']['saldo']) {
    exibeMensagem(mensagem:"Saldo insuficiente");
}else{
    $contasConrrentes['123.456.789-65']['saldo'] -= 500;
}


foreach ($contasConrrentes as $cpf => $conta) {

    exibeMensagem($cpf . "  " . $conta['titular'] . "  " . $conta['saldo']);
}

?> 