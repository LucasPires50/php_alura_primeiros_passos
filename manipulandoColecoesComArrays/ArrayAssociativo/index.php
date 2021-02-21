<?php

echo "<h1>Função array_diff</h1>";

$conrrentistas = [
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

// a função retira a difireça entre os arrays, e retornar um novo array
$conrrentistaPagantes = array_diff($conrrentistas, $conrrentistaNaoPagante);

echo "<pre>";
var_dump($conrrentistaPagantes);
echo "</pre>";


echo "<h1>Array Associativo</h1>";

$saldos = [
    2500,
    3000,
    4400,
    1000,
    8700,
    9000
];
// a função juntas os arrays, e retornar um novo array
$juntaArray = array_merge($conrrentistas, $saldos);

// a função juntas os arrays, e retornar um novo array
$relacionados = array_combine($conrrentistas, $saldos);

$relacionados["Mateus"] = 4500;

echo "<pre>";
var_dump($relacionados);
echo "O saldo da Maria é {$relacionados["Maria"]}";
echo "</pre>";
?>
