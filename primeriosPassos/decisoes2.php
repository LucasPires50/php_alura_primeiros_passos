<?php

$idade = 17;
$numeroDePessoas = 2;

echo "Você só pode entrar se tiver a parti de 18 anos. " . PHP_EOL;
echo "ou a parti de 16 anos acompanhado(a)." . PHP_EOL;

/**
 * Se para cada verificação tiver apenas 1 instrução,
 * não é necessário colocar as chaves, pois o php consegue 
 * identificar e excutar o bloco condicinal
 */
if ($idade >= 18 ) 
    echo "Voce tem $idade anos. Pode entrar sozinho";
else if ($idade >= 16 and $numeroDePessoas > 1)
    echo "Você tem $idade anos, está acompanhado(a), então pode entrar.";
else
    echo "Você só tem $idade anos. Você não pode entrar";


echo PHP_EOL;
ECHO "Adeus!";