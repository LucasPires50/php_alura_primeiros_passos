<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Service\ControladorDeBonificacoes;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\{Funcionario, Gerente, Diretor, Desenvolvedor};

$umFuncinario = new Desenvolvedor('Vinicius Dias', new CPF('123.456.789-96'), 'Desenvolvedor', 1000);

$umFuncinario->sobeDeNivel();

$funcinarioDois = new Gerente('Lais Dias', new CPF('145.852.789-38'), 'Gerente', 3000);

$funcinariotres = new Diretor('Roberto Dias', new CPF('753.896.789-25'), 'Diretor', 5000);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncinario);
$controlador->adicionaBonificacaoDe($funcinarioDois);
$controlador->adicionaBonificacaoDe($funcinariotres);

echo $controlador->recuperarTotal();

?>

