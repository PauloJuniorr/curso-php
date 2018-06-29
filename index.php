<?php
include 'inc/mixin.php';

echo 'Hello World';

$NomeDaVariavel = 'teste';
echo '<hr>';

echo $NomeDaVariavel;
echo '<hr>';

$ValorDaVariavel = 17;
echo 'O nome da variavel é: ' . $NomeDaVariavel . ' e o valor dela é ' . $ValorDaVariavel;
echo '<hr>';

if (isset($NomeDaVariavel)) {
   echo 'Variavel existe!';
}

echo '<hr>';

$ValorVazio = false;

if (isset($ValorVazio)) {
   echo 'Existe!';
}

echo '<hr>';

define('MINHA_COSTANTE', 'teste');

echo MINHA_COSTANTE;
echo '<hr>';

$valor = 10;
$valor++;

echo $valor;
echo '<hr>';

$texto = 'Paulo ';
$texto .= 'Andrade';
echo $texto;

echo '<hr>';

$soma = 15;
$soma += 5;
echo $soma;

echo '<hr>';

$valor1 = 1;
$valor2 = '1';

if ($valor1 == $valor2) {
   echo 'Igual';	

}

//comentário
#comentário
/*
bloco de comentários
*/

//if ($valor1 || $valor2) {

//}

$valor = 5;
if ($valor > 6) {

} else if ($valor == 8) {

} else {
	// teste
}

$brasil = 5;
switch ($brasil) {
	case 1:
		echo 'valor é 1';
		break;

		case 5:
		echo 'valor é 5';
        break;

	default:
		echo 'Valor default';
		break;
}

//For

for ($i = 0; $i < 10; $i++) { 
	echo $i . '<br>';
}

echo '<hr>';

$valor = 10;
$valor2 = 150.5;

echo 'R$' . number_format($valor, 2, ',', '.') . '<br>';
echo 'R$' . number_format($valor2, 2, ',', '.');

echo '<hr>';

echo date('d/m/Y H:i:s');

echo '<hr>';

echo date('Y-n-d');

echo '<hr>';



echo soma(10, 20);

?>