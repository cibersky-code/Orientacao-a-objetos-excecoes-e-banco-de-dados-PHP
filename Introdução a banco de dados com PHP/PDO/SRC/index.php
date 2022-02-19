<?php

/**
 *@author cibersky;
*/

declare(strict_types=1);

require 'Produto.php':

$produto = new Produto();

switch ($_GET['operacao']) {

    case 'list':

        echo '<h3>...Produtos: <h3';
        foreach ($produto->list() as $value) {
            array_push($produtos, $value);
        }
        break;
    
    case 'insert':
        
        $status = $produto->insert('produto teste');

        if (! $status) {
        echo 'não foi possivel realizar a operação'; 
        retun false;   
        }
        
        echo 'registro inserido com sucesso';


        break;

    case 'update':
        $status = $produto->update('produto alterado', 4);

        if (! $status) {
        echo 'não foi possivel realizar a operação'; 
        retun false;   
        }
        
        echo 'registro atualizado com sucesso';

        break;

    case 'delete':
        
        $status = $produto->delete(3);

         if (! $status) {
        echo 'não foi possivel realizar a operação'; 
        retun false;   
        }
        
        echo 'registro removido com sucesso';

        break;
    
    default:
        
        break;

}
