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

// saque
$contasConrrentes['123.456.789-63']['saldo'] -= 500;
if (500 > $contasConrrentes['123.456.789-65']['saldo']) {
    echo "Saldo insuficiente" . PHP_EOL;
}else{
    $contasConrrentes['123.456.789-65']['saldo'] -= 500;
}


foreach ($contasConrrentes as $cpf => $conta) {
    echo $cpf . "  " . $conta['titular'] . "  " . $conta['saldo'] . PHP_EOL;
}

?> 