<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Service\ControladorDeBonificacoes;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\{Gerente, Diretor, Desenvolvedor, EditorDeVideo};

$umFuncinario = new Desenvolvedor('Vinicius Dias', new CPF('123.456.789-96'), 1000);

$umFuncinario->sobeDeNivel();

$funcinarioDois = new Gerente('Lais Dias', new CPF('145.852.789-38'), 3000);

$funcinariotres = new Diretor('Roberto Dias', new CPF('753.896.789-25'), 5000);

$umEditor = new EditorDeVideo('Alberto Dias', new CPF('852.123.321-44'), 1500);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncinario);
$controlador->adicionaBonificacaoDe($funcinarioDois);
$controlador->adicionaBonificacaoDe($funcinariotres);
$controlador->adicionaBonificacaoDe($umEditor);

echo $controlador->recuperarTotal();

?>

