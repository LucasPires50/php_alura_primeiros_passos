<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Service\ControladorDeBonificacoes;
use Alura\Banco\Modelo\{CPF, Funcionario};

$umFuncinario = new Funcionario('Vinicius Dias', new CPF('123.456.789-96'), 'Desenvolvedor', 1000);

$funcinarioDois = new Funcionario('Lais Dias', new CPF('145.852.789-38'), 'Gerente', 3000);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncinario);
$controlador->adicionaBonificacaoDe($funcinarioDois);

echo $controlador->recuperarTotal();

?>

