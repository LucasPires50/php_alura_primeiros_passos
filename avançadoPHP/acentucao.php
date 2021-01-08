<?php

$string = "Teste de integração com php";

// contas os bytes
echo mb_strlen($string) . PHP_EOL;
//Deixa em maiusculo
echo mb_strtoupper($string) . PHP_EOL;

$convertida = mb_convert_encoding($string, 'ISO-8859-1', 'UTF-8');

echo $convertida . PHP_EOL;

$primeirasLetrasMaiusculas = mb_convert_case($string, MB_CASE_TITLE);
echo $primeirasLetrasMaiusculas . PHP_EOL;

?>
