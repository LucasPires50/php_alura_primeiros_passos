<?php

function funcao1()
{
    echo 'Entrei na função 1' . PHP_EOL;
    try {
        funcao2();
    // multiCatch - pegar varios problçemas de uma vez só
    } catch (RuntimeException | DivisionByZeroError $erroOuExcecao) {
        // Exibir a mensagen do erro.
        echo $erroOuExcecao->getMessage() . PHP_EOL;
        // Exibir a linha no erro
        echo $erroOuExcecao->getLine(). PHP_EOL;
        // Exibir a trilha a o momento onde o erro aconteceu 
        echo $erroOuExcecao->getTraceAsString(). PHP_EOL;
    }
    
    echo 'Saindo da função 1' . PHP_EOL;
}

function funcao2()
{
    echo 'Entrei na função 2' . PHP_EOL;
    $divisao = intdiv(5, 0);
    $arrayFixo = new SplFixedArray(2);
    $arrayFixo[3] = 'Valor';
    for ($i = 0; $i <= 5; $i++) {
        echo $i . PHP_EOL;
    }
    echo 'Saindo da função 2' . PHP_EOL;
}

echo 'Iniciando o programa principal' . PHP_EOL;
funcao1();
echo 'Finalizando o programa principal' . PHP_EOL;
