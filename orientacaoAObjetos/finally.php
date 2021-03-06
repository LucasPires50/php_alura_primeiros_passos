<?php

try {
    echo "Executando". PHP_EOL;
    throw new Exception('Execução aqui');
}catch(Throwable $e){
    echo "caido no catch". PHP_EOL;
}finally{
    echo "Finally". PHP_EOL;
}

?>