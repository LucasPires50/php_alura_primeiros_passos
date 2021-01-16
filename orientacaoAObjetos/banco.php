<?php

require_once 'src/Conta.php';

$primeriaConta = new Conta();
$primeriaConta->definirNomeTitular("Lucas");
$primeriaConta->definirCpfTitular("123.456.789-99");
$primeriaConta->depositar(500);
$primeriaConta->sacar(300);

echo "Titular: {$primeriaConta->recuperarNomeTitular()}" .PHP_EOL;
echo "Cpf: {$primeriaConta->recuperarCpfTitular()}" .PHP_EOL;
echo "Saldo da conta: {$primeriaConta->recuperSaldo()}";

?>