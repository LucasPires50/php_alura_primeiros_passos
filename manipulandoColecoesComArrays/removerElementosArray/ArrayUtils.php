<?php

class ArrayUtils
{

    public static function remover(string $elemento, array &$array)
    {
        // pegado a posição do elemento no e array e guardando no variável posição.
        $posicao = array_search($elemento, $array);

        if (is_int($posicao)) {
            // Função para remover elementos do array
            unset($array[$posicao]);
        } else {
            echo "O elemento não foi encontrado no array.";
        }
    }
}
