<?php

$idade = 20;
$nome = "Vinicius";
$numeroDePessoas = 2;

echo "Você só pode entrar se tiver a parti de 18 anos. " . PHP_EOL;
echo "ou a parti de 16 anos acompanhado(a)." . PHP_EOL;

/** 
 * OU
 * if ($idade == 18 || $idade > 18)
 * if ($idade == 18 or $idade > 18)
 * 
 * E
 * if ($idade >= 18 && $nome == 'Vinicius')
 * if ($idade >= 18 and $nome == 'Vinicius')
*/
if ($idade >= 18 ) {
    echo "Voce tem $idade anos. Pode entrar sozinho";
// o 'else if' -> pode ser usado dessa forma também 'elseif'
} else if ($idade >= 16 and $numeroDePessoas > 1){
    echo "Você tem $idade anos, está acompanhado(a), então pode entrar.";
}else{
    echo "Você só tem $idade anos. Você não pode entrar";
}

echo PHP_EOL;
ECHO "Adeus!";