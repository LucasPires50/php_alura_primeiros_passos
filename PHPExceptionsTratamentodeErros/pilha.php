<?php

function funcao1()
{
    echo 'Entrei na função 1' . PHP_EOL;

    
    try {
        // Função para deixar um array com o tamanho fixo
        $arrayFixo = new SplFixedArray(2);
        $arrayFixo[3] = 'Valor';
    } catch (RuntimeException $problema) {
        echo "Aconteceu um erro na função 1" . PHP_EOL;
    }

    // Esse função sempre trata os numeros com inteiros
    // $divisao = intdiv(5, 0 );
    funcao2();
    echo 'Saindo da função 1' . PHP_EOL;
}

function funcao2()
{
    echo 'Entrei na função 2' . PHP_EOL;

    for ($i = 0; $i <= 5; $i++) {
        echo $i . PHP_EOL;
    }
    // Formas mais simples de fazer o debuggind
    // var_dump(debug_backtrace());
    // print_r(debug_backtrace());
    echo 'Saindo da função 2' . PHP_EOL;
}

echo 'Iniciando o programa principal' . PHP_EOL;
funcao1();
echo 'Finalizando o programa principal' . PHP_EOL;
