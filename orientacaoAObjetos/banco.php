<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/CPF.php';
require_once 'src/Endereco.php';

$endereco = new Endereco("Petrópolis", "um Bairro", "Minha Rua", "71B");
$lucas = new Titular (new CPF("123.456.789-99"), "Lucas", $endereco);
$primeriaConta = new Conta($lucas);
$primeriaConta->depositar(500);
$primeriaConta->sacar(300);

echo "Titular: {$primeriaConta->recuperarNomeTitular()}" .PHP_EOL;
echo "Cpf: {$primeriaConta->recuperarCpfTitular()}" .PHP_EOL;
echo "Saldo da conta: {$primeriaConta->recuperSaldo()}" .PHP_EOL;

$patricia = new Titular(new CPF("789.456.123-33"), "Patrica", $endereco);
$segundaConta = new Conta($patricia);

var_dump($segundaConta);

$outroEndereco = new Endereco("Florianopolis", "Outro Bairro", "Outra Rua", "71G");
$jorge = new Titular(new CPF("456.123.789-85"), "Patrica", $outroEndereco);
$segundaConta = new Conta($jorge);

echo "Número de contas: " . Conta::recuperarNumeroDeContas() . PHP_EOL;

?>
