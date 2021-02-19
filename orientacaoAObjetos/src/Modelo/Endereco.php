<?php

namespace Alura\Banco\Modelo;

// mclasse finalnão pode ser sobreescrito
final class Endereco
{    
     use AcessoPropriedades;

     private string $cidade;
     private string $bairro;
     private string $rua;
     private string $numero;

     public function __construct(string $cidade, string $bairro, string $rua, string $numero)
     {
          $this->cidade = $cidade;;
          $this->bairro = $bairro;;
          $this->rua = $rua;;
          $this->numero = $numero;;
     }

     public function recuperaCidade(): string
     {
          return $this->cidade;
     }
     public function recuperaBairro(): string
     {
          return $this->bairro;
     }
     public function recuperaRua(): string
     {
          return $this->rua;
     }
     public function recuperaNumero(): string
     {
          return $this->numero;
     }

     // Com esse método mágico(__toString) conseguimos representar qualquer objeto como uma string;
     public function __toString(): string
     {
          return "{$this->rua}, {$this->numero}, {$this->bairro}, {$this->cidade}";
     }

     //método magico
     public function __get(string $nomeAtributo)
     {

          $metodo = 'recuperar' . ucfirst($nomeAtributo);
          return $this->$metodo();
     }
}
