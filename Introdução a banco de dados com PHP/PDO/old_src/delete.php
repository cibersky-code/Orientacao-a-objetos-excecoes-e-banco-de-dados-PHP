<?php

/**
 *@author cibersky;
*/


declare(strict_types=1);

$pdo = require 'connect.php';
$sql = 'dalete from produtos where id = ?';

$prepare = $pdo->prepare($sql);

$prepare->blindParam(1, $_GET['Id']);
$prepare = execute();

echo prepare->rowCount();
