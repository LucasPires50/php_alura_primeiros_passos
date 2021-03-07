<?php

// para definir que todos os tipos de erro sejam mostrados
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo $varialvel;
// colocar o arroba antes serve como um supressor de erros, nunca usar isso.
echo @$array[12];

echo CONSTANT;

?>