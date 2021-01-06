<?php 

// php só consegue trabalhar com as chaves do array em numéros interios ou string
$array = [
    1 => 'a',
    '1' => 'b',
    1.5 => 'c', 
    true => 'd'
];

foreach ($array as $item){
    echo $item . PHP_EOL;
}

?>