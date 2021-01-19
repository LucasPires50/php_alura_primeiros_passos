<?php
class Titular
{
    private CPF $cpf;
    private string $nome;
    private Endereco $endereco;

    public function __construct(CPF $cpf, string $nome, Endereco $endereco)
    {
        $this->cpf = $cpf;
        $this->validarNomeTitular($nome);
        $this->nome = $nome;
        $this->endereco = $endereco;
    }

    public function recuperarCpf(): string
    {
        return $this->cpf->recuperarNumero();
    }

    public function recuperarNome(): string
    {
        return $this->nome;
    }

    private function validarNomeTitular(string $nomeTitular)
    {
        // strlen -> pega a quantidade de caracteres 
        if(strlen($nomeTitular) < 5){
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }

    public function recuperarEndereço() : Endereco
    {
        return $this->endereco;
    }

}
