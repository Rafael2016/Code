<?php

// Array Associativo

$array = [
    'chave 1' => 'valor 1',
    'chave 2' => 'valor 2',
    'chave 3' => 'valor 3',
    
];

$vetor = [1,2,3,4,5,6,7,8,9,10,11,12,13];

var_dump($array);
echo '<br>Elementos no início do array - array_unshift';

//Elementos no início do array

array_unshift($array, 'chave 0 => Valor 0');

var_dump($array);

echo "<br>Array dividido em pedaços - array_chunk";

var_dump(array_chunk($vetor, 2));

 echo "<br>Filtar valores de um array -  array_filter";

$array_filter = array_filter($vetor, function($item){
    return $item % 2 == 0; //retorna apenas os valores pares para o array $new
});

$cargo = array_filter($cargos, function($e) use($codFuncao) {
			
			return $e->codFuncao == $codFuncao;
});


var_dump($array_filter);

echo '<br>Alterar item por item de um array - array_map()';

$array_map = array_map(function($item){
    return $item + 1; //retorna apenas os valores pares para o array $new
},$vetor);

var_dump($array_map);

echo "<br> Soma todos valores do Array elemento do array - array_sum <br>";
$b = [2,20,56];
echo array_sum($b);

echo "<br> Remover elementos duplicados em array - array_unique <br>";

$c = ['rafael','rafael','gomes','texto'];
var_dump(array_unique($c));
