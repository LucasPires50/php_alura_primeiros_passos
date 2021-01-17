<?php

class Conta 
{
    // Definir is dados da conta
    private string $cpfTitular;
    private string $nomeTitular;
    private float $saldo;
    // Atributo estático da classe
    private static $numeroDeContas = 0;
    
    // Método construtor, toda vez que um "new Conta()" for execuado o método construtor vai ser executado também.
    public function __construct(string $cpfTitular, string $nomeTitular)
    {
        $this->cpfTitular = $cpfTitular;
        $this->validarNomeTitular($nomeTitular);
        $this->nomeTitular = $nomeTitular;
        $this->saldo = 0;

        // Sempre que executar o "new Conta()", o numero de contas vai ser impelentado
        self::$numeroDeContas++;
    }

    public function __destruct()
    {
        if(self::$numeroDeContas > 1){
            echo "Há mais de uma conta ativas" . PHP_EOL;
        }
    }

    // Uma função que está dentro de uma classe é chamado de método
    public function sacar(float $valorASacar):void
    {
        if($valorASacar > $this->saldo){
            echo "Saldo Indisponível" .PHP_EOL;
            // aplicado o return dessa forma não é ncessário usar o else
            return;
        }
            $this->saldo -= $valorASacar;
    }

    public function depositar(float $valorADepositar): void
    {
        if($valorADepositar < 0 ){
            echo "O valor a ser depositado tem que ser positivo!";
            // aplicado o return dessa forma não é ncessário usar o else
            return;
        }
            $this->saldo += $valorADepositar;
    }

    // Os métodos set são os que definem um valor no atributo privado
    public function transferir(float $valorATransferir, Conta $contaDestino): void
    {
        if($valorATransferir > $this->saldo){
            echo 'Saldo Indisponível';
            // aplicado o return dessa forma não é ncessário usar o else
            return;
        }
            $this->sacar($valorATransferir);
            $contaDestino->depositar($valorATransferir);

    }

    // Métodos que devolvem um valor são chamados de métodos get
    public function recuperSaldo(): float
    {
        return $this->saldo;
    }

    public function recuperarCpfTitular(): string
    {
        return $this-> cpfTitular;
    }

    public function recuperarNomeTitular(): string
    {
        return $this-> nomeTitular;
    }

    private function validarNomeTitular(string $nomeTitular)
    {
        // strlen -> pega a quantidade de caracteres 
        if(strlen($nomeTitular) < 5){
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }

    // Método estático da classe, que não muda de instancia para instancia
    public static function recuperarNumeroDeContas(): int
    {
        return self::$numeroDeContas;
    }

}

