<?php

// include './funcoes.php';
// Para gerar o erro quando o arquivo não for encontrado utilize o (require)
// require_once -> se o arquivo já não vai retonar erro
require './funcoes.php';

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

titularComLetrasMaiusculas($contasConrrentes['123.456.789-63']);

$contasConrrentes['123.456.789-63'] = sacar($contasConrrentes['123.456.789-63'], 500);
$contasConrrentes['123.456.789-65'] = sacar($contasConrrentes['123.456.789-65'], 500);

$contasConrrentes['123.456.789-64'] = depositar($contasConrrentes['123.456.789-64'], 900);

// remove a variavel ou índice de um array da memória 
unset($contasConrrentes['123.456.789-65']);

foreach ($contasConrrentes as $cpf => $conta) {
    // função list
    //list('titular' => $titular, 'saldo'  => $saldo) = $conta;
    ['titular' => $titular, 'saldo'  => $saldo] = $conta;
    // Dados simples- interpolação de strings
    // exibeMensagem("$cpf  $conta[titular]  $conta[saldo]");

    //Dados complexa -interpolação de strings
    exibeMensagem("$cpf  $titular $saldo");
}

?> 