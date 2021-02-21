<?php

declare(strict_types=1);

namespace AluraArrayAssociativo;

class ArrayUtils
{

    public static function remover(int $elemento, array &$array)
    {
        // pegado a posição do elemento no e array e guardando no variável posição.
        $posicao = array_search($elemento, $array, true);

        if (is_int($posicao)) {
            // Função para remover elementos do array
            unset($array[$posicao]);
        } else {
            echo "O elemento não foi encontrado no array.";
        }
    }

    public static function encontrarPessoasComSaldoMaior(float $saldo, array $array): array
    {
        $conrrentistasComSaldoMaior = array();
        foreach ($array as $chave => $valor) {
            if ($valor >  $saldo) {
                $conrrentistasComSaldoMaior[] = $chave;
            }
        }
        return $conrrentistasComSaldoMaior;
    }
}
