<?php

$fruits = array('Maçã', 'Banana', 'Melão');

$fruits = ['Maçã', 'Banana', 'Melão', 'Tangerina'];


echo $fruits[1];

echo '<hr>';

$person = [
   'name' => 'Carlos',
   'age' => '18 anos',
   'job' => 'Developer'
];

echo 'Meu nome é ' . $person['name'] . ', Eu tenho ' . $person['age'];

echo '<hr>';

var_dump($person);

echo '<hr>';

$person['name'] = 'André';
$person['sex'] = 'Feminino';

var_dump($person);

echo 'Meu nome é ' . $person['name'] . ', Eu tenho ' . $person['age'];

$person['fruits'] = $fruits;

echo '<hr>';

// Função inset apaga um elemento do array
unset($person['fruits']);
var_dump($person);

echo '<hr>';

// Função count conta todas as posições do array
 echo count($person);

 echo '<hr>';

 foreach ($fruits as $fruit) {
     echo $fruit . '<br>';
 }

echo '<hr>';

 foreach ($person as $column => $value) {
 	echo $column . ': ' . $value . '<br>';
 }

 echo '<hr>';

echo end($fruits);

 echo '<hr>';

array_push($fruits, 'Laranja');
array_push($fruits, 'Caqui');
array_pop($fruits);
var_dump($fruits);

 echo '<hr>';

//echo array_shift($fruits);

 echo '<hr>';

 $values = [1, 2, 3, 4];

 function incrementa($value) {
 	return $value +1;
 }

 $newValues = array_map('incrementa', $values);

 var_dump($newValues);

  echo '<hr>';

  var_dump(array_key_exists('sex', $person));

  var_dump(array_keys($person));

  echo '<hr>';

var_dump(array_search('Feminino', $person));

  echo '<hr>';

var_dump(in_array('Maçã', $fruits));

echo '<hr>';

sort($fruits);

var_dump($fruits);

echo '<hr>';