<?php

/**
 *@author cibersky;
*/

declare(strict_types=1);

class Produto
{
	private $conexao;
	
	public function __construct()
	{
		try {
		$this->$conexao = new PDO('mysql:host=mysql;dbname=exemplo', 'root', '12345');
			
		} catch (Exception $e) {
			echo $e->getMessage();
			die();
		}

	}

	public function list()
	{
		return true;
	}

}