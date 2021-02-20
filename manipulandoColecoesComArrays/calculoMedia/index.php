<?php

echo "<h1>Calculoda de média</h1>";

$notaPortugues = 9;
$notaMatematica = 3;
$notaGeografia = 10;
$notaHistoria = 5;
$notaQuimica = 10;

//Fazendo a soma iterando sobre o array
$notas1 =array(9, 3, 10, 5, 10);
// Outra forma de declarar o array
$notas2 =[9, 3, 10, 5, 10, 8];

echo "<p>A nota de português é: $notas2[0]</p>";
echo "<p>A nota de matemática é: $notas2[1]</p>";
echo "<p>A nota de geografia é: $notas2[2]</p>";
echo "<p>A nota de história é: $notas2[3]</p>";
echo "<p>A nota de quimica é: $notas2[4]</p>";
echo "<p>A nota de artes é: $notas2[5]</p>";

// Essa função retorna o númeor de elementos que tem o array
$quantidadesNotas = sizeof($notas2);

// Iterar sobre o array
$soma = 0;
for ($i=0; $i < $quantidadesNotas ; $i++) { 
    $soma = $soma + $notas2[$i];
}

$media= ($soma) / $quantidadesNotas;

echo "<p>A média é $media.</p>";
