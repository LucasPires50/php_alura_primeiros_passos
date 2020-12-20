<?php

$idade = 17;
$nome = "Vinicius";
$numeroDePessoas = 1;

echo "Você só pode entrar se tiver a parti de 18 anos. " . PHP_EOL;
echo "ou a parti de 16 anos acompanhado";

/** 
 * OU
 * if ($idade == 18 || $idade > 18)
 * if ($idade == 18 or $idade > 18)
 * 
 * E
 * if ($idade >= 18 && $nome == 'Vinicius')
 * if ($idade >= 18 and $nome == 'Vinicius')
*/
if ($idade >= 18) {
    echo "Voce tem $idade anos. Pode entrar" . PHP_EOL;
} else {
    echo "Você só tem $idade anos. Você não pode entrar";
}

echo PHP_EOL;
ECHO "Adesu!";