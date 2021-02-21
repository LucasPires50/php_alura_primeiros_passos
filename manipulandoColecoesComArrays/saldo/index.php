<?php

$saldos = [
    2500,
    3000,
    4400,
    1000,
    8700,
    9000

];

foreach ($saldos as $saldo){
    echo "<p>O saldo é $saldo;</p>";
}



// função sort() para ordenar o array do menor para o maior
sort($saldos);

echo "<p>O menor saldo é $saldos[0].</p>";



?>