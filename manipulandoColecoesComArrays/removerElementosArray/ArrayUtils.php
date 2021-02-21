<?php
declare(strict_types=1);

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
}
