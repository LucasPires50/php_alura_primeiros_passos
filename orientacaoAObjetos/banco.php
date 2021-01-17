<?php

require_once 'src/Conta.php';

$primeriaConta = new Conta("123.456.789-99", "Lucas");
$primeriaConta->depositar(500);
$primeriaConta->sacar(300);

echo "Titular: {$primeriaConta->recuperarNomeTitular()}" .PHP_EOL;
echo "Cpf: {$primeriaConta->recuperarCpfTitular()}" .PHP_EOL;
echo "Saldo da conta: {$primeriaConta->recuperSaldo()}" .PHP_EOL;

$segundaConta = new Conta("789.456.123-33", "Patrica");

var_dump($segundaConta);

echo "Número de contas: " . Conta::recuperarNumeroDeContas();

?>
