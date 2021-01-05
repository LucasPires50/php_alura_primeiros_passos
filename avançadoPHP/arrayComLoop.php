<?php

$idadeList = [21, 23, 25, 26, 28, 29, 30, 32];

for ($i=0; $i < count($idadeList) ; $i++) { 
    echo $idadeList[$i] . PHP_EOL;

    
}

// count -  conta o tamanho do array
echo "Tamanho da Lista: " . count($idadeList);
?>