<?php

function divisao($numero1, $numero2){
	if ($numero1 == 0 || $numero2 == 0) {
	throw new Exception("não é possivel dividir por 0".PHP_EOL);
	}
	$calculo = $numero1/$numero2;
	echo $calculo;   
}

$numero1 = 2;
$numero2 = 3;
 
try {
divisao($numero1,$numero2);

} catch (Exception $e) {
	echo $e->getMessage();
	die();
}

echo divisao;

echo "\n... executando ...\n";