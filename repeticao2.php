<?php



//  estrutura de repetição
for ($contador=1; $contador <= 15 ; $contador++) { 

    if ($contador == 13){
        // continue; // pula o 13 continua o loop
        break; // para o loop no 12
    }
    
    echo "#$contador" . PHP_EOL;
}

?>