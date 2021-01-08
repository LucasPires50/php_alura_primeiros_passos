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
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco</title>
</head>
<body>
    <h1>Contas Conrrentes</h1>

    <dl>
    <?php foreach ($contasConrrentes as $cpf => $conta) { ?>
        <dt>
            <h3>
                <?= $conta['titular']; ?> - <?= $cpf; ?>
            </h3>
        </dt>
        <dd> 
            Saldo:<?= $conta['saldo'] ?>
        </dd>
    </dl>
    <?php } ?>
</body>
</html>