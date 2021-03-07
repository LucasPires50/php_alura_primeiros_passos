<?php

// trabalhar com intervalos de periodo regulares com o php
$inicio = new DateTime('2022-11-21');
$intervalo = new DateInterval('P4Y'); // 4 anos de iontervalo
// $fim = new DateTime('2042-11-22')
$periodo = new DatePeriod($inicio, $intervalo, 5); 

foreach ($periodo as $data){
    echo $data->format('d-m-Y') . PHP_EOL;
}

?>