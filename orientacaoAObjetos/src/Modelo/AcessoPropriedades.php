<?php


namespace Alura\Banco\Modelo;

trait AcessoPropriedades
{
       //método magico
   public function __get(string $nomeAtributo)
   {
     
     $metodo = 'recuperar' . ucfirst($nomeAtributo);
     return $this->$metodo();
   }
}
