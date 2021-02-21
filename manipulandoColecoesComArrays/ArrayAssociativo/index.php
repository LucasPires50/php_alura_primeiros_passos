<?php

namespace AluraArrayAssociativo;

require 'autoload.php';

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
echo "</pre>";

// função para verificar se a chave existe no array
if(array_key_exists("Joao", $relacionados)){
    echo "O saldo da Joao é {$relacionados["Joao"]}";
} else {
    echo "Não foi encontrado";
}

// O array associativo também pode ser declarado dessa formas
$conrrentistas2 = [
    "Giovanni" => 2500,
    "João" => 3000,
    "Maria" => 4400,
    "Luis" => 1000,
    "Luisa" => 8700,
    "Rafael" => 9000
];

echo "<h1>Iterando sobre arrays associativos</h1>";

$maiores =  ArrayUtils::encontrarPessoasComSaldoMaior(3000, $relacionados);

echo "<pre>";
var_dump($maiores);
echo "</pre>";
