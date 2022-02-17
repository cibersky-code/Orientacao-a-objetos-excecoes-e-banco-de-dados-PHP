<?php

/**
 *@author cibersky;
 *@return DateTime;
*/


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

$date = new DateTime();


$intervalo = new DateInterval('P5DT10H50M');

$date->sub($intervalo); 

echo $date->format("d/m/Y, H:i:s").PHP_EOL;

echo "Essa data é 5 dias, 10 horas e 50 minutos menor que a atual ";