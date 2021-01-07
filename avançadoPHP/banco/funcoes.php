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
    echo $mensagem . PHP_EOL;
}


?>