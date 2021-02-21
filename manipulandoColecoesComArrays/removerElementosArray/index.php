<?php
declare(strict_types=1);

namespace AluraArray;

require 'autoload.php';

$correntistaECompras = [

    "Giovanni",
    "João",
    12,
    "Maria",
    25,
    "Luis",
    "Luíza",
    "12",
];

echo "<pre>";

var_dump($correntistaECompras);

// Forma de chamar o método static 
ArrayUtils::remover(12, $correntistaECompras);

var_dump($correntistaECompras);

echo "</pre>";