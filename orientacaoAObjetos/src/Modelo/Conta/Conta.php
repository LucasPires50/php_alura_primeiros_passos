<?php

namespace Alura\Banco\Modelo\Conta;

abstract class Conta
{
    // Definir is dados da conta
    private $titular;
    protected float $saldo;
    // Atributo estático da classe
    private static $numeroDeContas = 0;

    // Método construtor, toda vez que um "new Conta()" for execuado o método construtor vai ser executado também.
    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;

        // Sempre que executar o "new Conta()", o numero de contas vai ser impelentado
        self::$numeroDeContas++;
    }

    public function __destruct()
    {
        self::$numeroDeContas--;
    }

    // Uma função que está dentro de uma classe é chamado de método
    public function sacar(float $valorASacar): void
    {
        $tarifaSaque = $valorASacar * $this->percentualTarifa();
        $valorSaque = $tarifaSaque + $valorASacar;
        if ($valorSaque > $this->saldo) {
            echo "Saldo Indisponível" . PHP_EOL;
            // aplicado o return dessa forma não é ncessário usar o else
            return;
        }
        $this->saldo -= $valorSaque;
    }

    public function depositar(float $valorADepositar): void
    {
        if ($valorADepositar < 0) {
            echo "O valor a ser depositado tem que ser positivo!";
            // aplicado o return dessa forma não é ncessário usar o else
            return;
        }
        $this->saldo += $valorADepositar;
    }

    // Métodos que devolvem um valor são chamados de métodos get
    public function recuperSaldo(): float
    {
        return $this->saldo;
    }

    public function recuperarCpfTitular(): string
    {
        return $this->titular->recuperarCpf();
    }

    public function recuperarNomeTitular(): string
    {
        return $this->titular->recuperarNome();
    }

    // Método estático da classe, que não muda de instancia para instancia
    public static function recuperarNumeroDeContas(): int
    {
        return self::$numeroDeContas;
    }

    /**
     * Método abstrato.
     * 
     * Todas as classes que estenderem a classe conta são abirgado a implementar o método percentual tarifa.
     */
    abstract protected function percentualTarifa(): float;

}
