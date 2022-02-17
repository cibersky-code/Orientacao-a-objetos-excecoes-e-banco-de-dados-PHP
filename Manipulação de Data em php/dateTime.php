<?php

/**
 *@author cibersky;
 *@return DateTime;
*/

$date = new DateTime();

var_dump($date);

echo $date->format("d-m-y").PHP_EOL; //data no formato 00/00/00

echo $date->format("H:i:s").PHP_EOL; //hora no formato 24:00:00
/*
-> P representa o periodo: vem antes de dia, mês, ano e semana;
Y anos
M meses
D dias
W semanas
->T representa o tempo: vem antes de hora, minuto e segundo;
H horas
M minutos
S segundos
*/

$data = new DateTime();

var_dump($data);

$intervalo = new DateInterval('PT5M'); // ADICIONA UM INTERVALO DE 5 MINUTOS


// add soma intervalo e sub subtrai.
$data->add($intervalo); 

var_dump($data);

$data->sub($intervalo); 

$intervalo = new DateInterval('PT5M'); // SUBTRAI UM INTERVALO DE 5 minutos

var_dump($data);

