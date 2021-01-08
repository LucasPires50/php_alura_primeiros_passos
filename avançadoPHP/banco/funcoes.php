<?php

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
    echo $mensagem . '<br>';
}
// Se não usar o '&' é passado a copia do valor da conta
// Mas se usar o '&' é passado exatamente o valor da conta como referencia(endereço onde esta variável está armazenada na memória), onde se torna possivel midificação se aplicada.
function titularComLetrasMaiusculas(array &$conta){
    // biblioteca mbString
    // para mudar a string para letras maiusculas
    // A função strtoupper não colocaria letras com acento em maiúsculo, enquanto a mb_strtoupper consegue fazer isso sem problemas.
    $conta['titular'] = mb_strtoupper($conta['titular']);
    
}

function exibeConta(array $conta) {
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    echo "<li>Titular: $titular - Saldo: $saldo</li>";
}
?>