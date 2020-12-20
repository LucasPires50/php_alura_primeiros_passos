<?php

$idade = 21;
$nome = "Vinicius";

echo "Você só pode entrar se tiver a parti de 18 anos." . PHP_EOL;

/** 
 * OU
 * if ($idade == 18 || $idade > 18)
 * if ($idade == 18 or $idade > 18)
 * 
 * E
 * if ($idade >= 18 && $nome == 'Vinicius')
 * 
*/
if ($idade >= 18 and $nome == 'Vinicius') {
    echo "Voce tem $idade anos. Pode entrar" . PHP_EOL;

    echo "E seu nome é $nome";
}
    