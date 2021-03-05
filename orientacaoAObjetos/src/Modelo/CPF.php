<?php
namespace Alura\Banco\Modelo;

// mclasse finalnão pode ser sobreescrito
final class CPF
{

    private $numero;

    public function __construct(string $numero)
    {
        $numero = filter_var($numero, FILTER_VALIDATE_REGEXP,[
            'options' => [
                'regexp' => '/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}$/'
            ]
        ]);

        if($numero === false){
            throw new \InvalidArgumentException();
        };

        $this->numero = $numero;
    }

    
    public function recuperarNumero(): string
    {
        return $this->numero;
    }

}

?>