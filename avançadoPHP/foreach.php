<?php

// Alterando o indice
$contasConrrentes = [
    123456789663 =>  [
        'titular' => 'Vinicius',
        'Saldo' => 1000
    ], 
    123456789664 => [
        'titular' => 'Maria',
        'Saldo' => 10000
    ], 
    123456789665 => [
        'titular' => 'Alberto',
        'Saldo' => 300
    ]
];

// foreach ($contasConrrentes as $conta) {
//     echo $conta['titular'] . PHP_EOL;
// }

foreach ($contasConrrentes as $cpf => $conta) {
    echo $cpf . PHP_EOL;
}

?>