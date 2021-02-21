<?php

echo "<h1>Função array_diff</h1>";

$conrrentista = [
    "Giovanni",
    "João",
    "Maria",
    "Luis",
    "Luisa",
    "Rafael"
];

$conrrentistaNaoPagante = [
    "Luis",
    "Luisa",
    "Rafael"
];

// a função retira a difireça entre os arrays
$conrrentistaPagantes = array_diff($conrrentista, $conrrentistaNaoPagante);

echo "<pre>";
var_dump($conrrentistaPagantes);
echo "</pre>";


echo "<h1>Array Associativo</h1>";
?>
