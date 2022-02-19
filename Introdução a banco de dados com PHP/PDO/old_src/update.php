<?php

/**
 *@author cibersky;
*/


declare(strict_types=1);

$pdo = require 'connect.php';
$sql = 'upadate produtos set descrição = ? where id = ?';

$prepare = $pdo->prepare($sql);

$prepare->blindParam(1, $_GET['discricao']);
$prepare->blindParam(2, $_GET['Id']);

$prepare = execute();

echo prepare->rowCount();