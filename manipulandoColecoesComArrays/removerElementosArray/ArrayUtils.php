<?php

class ArrayUtils
{

    public static function remover(string $elemento, array &$array)
    {
        // pegado a posição do elemento no e array e guardando no variável posição.
        $posicao = array_search($elemento, $array);

        // Função para remover elementos do array
        unset($array[$posicao]);
    }
}
