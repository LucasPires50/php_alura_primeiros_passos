<?php

use manipulandoColecoesComArrays\calculoMedia\Calculadora;

require_once 'Calculadora.php';

echo "<h1>Calculo da média</h1>";

$notas2 =[9, 3, 10, 5, 10, 8];
$notas3 = [9, 3, 10, 5, 10, 8];

$calculadora = new Calculadora();
$media = $calculadora->calularMedia($notas3);

if($media){
    echo "A média é $media";
}else{
    echo "Não foi possivel calcular a média.";
}

?>


