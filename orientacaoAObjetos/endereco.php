<?php

use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';



$umEndereco = new Endereco("Petrópolis", "um Bairro", "Minha Rua", "71B");

$outroEndereco = new Endereco("Outra Petrópolis", "Outro Bairro", "Outra Rua", "85B");

echo $umEndereco . PHP_EOL;

echo $outroEndereco;


?>