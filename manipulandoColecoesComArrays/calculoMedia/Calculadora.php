<?php

namespace manipulandoColecoesComArrays\calculoMedia;

class Calculadora
{
    public function calularMedia(array $notas2): ?float //a ? indidica que vai ser retornado ou  null ou float
    {
        // Essa função retorna o númeor de elementos que tem o array
        $quantidadesNotas = sizeof($notas2);

        // se a quantidade de notas for maior do que zero executa o bloco de código
        if ($quantidadesNotas > 0) {
            // Iterar sobre o array
            $soma = 0;
            for ($i = 0; $i < $quantidadesNotas; $i++) {
                $soma = $soma + $notas2[$i];
            }

            $media = ($soma) / $quantidadesNotas;

            return $media;

        // Se a quantidade de notas não for maior do que zero
        }else{
            return null;
        }
    }
}
