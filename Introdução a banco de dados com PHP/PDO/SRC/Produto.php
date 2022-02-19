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

	public function list() : array 
	{
	$sql = 'select * fron produtos';

	$produtos = [];

	foreach ($this->conexao->query($sql) as $key => $value) {
	array_push($produtos, $value);
	}
	

	public function insert(string $descricao) : int 
	{
	$sql = 'insert into produtos(descricao) value(?)';

	$prepare = $this->conexao->prepare($sql);

	$prepare->bindParam(1, $descricao);
	$prepare->execute();

	return prepare->rowCount();
	}
	
	public function update(string $descricao, int $id) : int 
	{
	$sql = 'upadate produtos set descrição = ? where id = ?';

	$prepare = $this->conexao->prepare($sql);

	$prepare->blindParam(1, $descricao);
	$prepare->blindParam(2, $id);

	$prepare = execute();


	return prepare->rowCount();
	}

	public function delete(int $id) : int 
	{
	$sql = 'dalete from produtos where id = ?';

	$prepare = $this->conexao->prepare($sql);

	$prepare->blindParam(1, $id);
	$prepare = execute();

	return prepare->rowCount();
	}
}