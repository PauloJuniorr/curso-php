<?php

$name = 'Paulo C. Junior';
$nameSize = strlen($name);

var_dump(strpos($name, 'J'));

var_dump(strchr($name, 'Paulo'));

var_dump(substr($name, 0, 7));

echo '<hr>';

$gosto = 'Eu, André, gosto de mulher';
$gosto = str_replace('mulher', 'homens suados', $gosto);
echo $gosto;

var_dump(strtolower('TESTE'));

echo '<hr>';

var_dump(ucfirst('paulo'));

echo '<hr>';

var_dump(md5('banana'));

echo '<hr>';

$data = '10/04/2018';
$parts = explode('/', $data);
echo $parts[2] . '-' . $parts[1] . '-' . $parts[0];
var_dump($parts);
// var_dump(implode('-', $parts));

var_dump(trim($gosto));

$valor = '190.10';
var_dump((int) $valor);

