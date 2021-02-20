<?php

$notaPortugues = 9;
$notaMatematica = 3;
$notaGeografia = 10;
$notaHistoria = 5;
$notaQuimica = 10;


echo "<p>A nota de português é: $notaPortugues</p>";
echo "<p>A nota de matemática é: $notaMatematica</p>";
echo "<p>A nota de geografia é: $notaGeografia</p>";
echo "<p>A nota de história é: $notaHistoria</p>";
echo "<p>A nota de quimica é: $notaQuimica</p>";

$media= ($notaPortugues + $notaMatematica + $notaGeografia + $notaHistoria + $notaQuimica) / 5;

echo "<p>A média é $media.</p>"

?>