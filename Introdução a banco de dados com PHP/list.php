<?php

/**
 *@author cibersky;
*/

declare(string_types=1);

$pdo = require 'connrct.php';
$sql = 'select * fron produtos';

echo '<h3>Produtos: </h3>';

foreach ($pdo->query($sql) as $key => $value) {
    echo 'Id: '  . $value
}