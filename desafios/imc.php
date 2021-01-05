<?php 

$altura = 1.70;
$peso = 70;

$imc = $peso / $altura ** 2; 

if($imc >= 16 && $imc <= 16.9){
    echo "Peso: $imc kg/m2" . PHP_EOL;
    echo "Muito abaixo do peso!" . PHP_EOL;
}elseif($imc >= 17 && $imc <= 18.4){
    echo "Peso: $imc kg/m2" . PHP_EOL;
    echo "Abaixo do peso!";
}elseif($imc >= 18.5 && $imc <= 24.9){
    echo "Seu Peso: $imc kg/m2" . PHP_EOL;
    echo "Peso normal!";
}elseif($imc >= 25 && $imc <= 29.9){
    echo "Peso: $imc kg/m2" . PHP_EOL;
    echo "Acima do peso!";
}elseif($imc >= 30 && $imc <= 34.9){
    echo "Peso: $imc kg/m2" . PHP_EOL;
    echo "Obesidade Grau I!";
}elseif($imc >= 35 && $imc <= 40){
    echo "Peso: $imc kg/m2" . PHP_EOL;
    echo "Obesidade Grau II!";
}else{
    echo "Peso: $imc kg/m2" . PHP_EOL;
    echo "Obesidade Grau III!";
}



?>