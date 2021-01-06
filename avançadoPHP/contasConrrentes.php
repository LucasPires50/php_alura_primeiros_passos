<?php

// arrays associativos
$conta1 = [
    'titular' => 'Vinicius',
    'Saldo' => 1000
];
$conta2 = [
    'titular' => 'Maria',
    'Saldo' => 10000
];
$conta3 = [
    'titular' => 'Alberto',
    'Saldo' => 300
];
// echo $conta1['titular'];
$contasConrrentes = [$conta1, $conta2, $conta3];

for ($i=0; $i < count($contasConrrentes); $i++) { 
    echo $contasConrrentes[$i]['titular'] . PHP_EOL;
}

?>