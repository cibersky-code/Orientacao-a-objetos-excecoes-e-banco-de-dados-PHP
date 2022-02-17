<?php

declare(strict_types=1);



class Venda{

	/**
	*@var string
	*/
	private $data;
	/**
	*@var string
	*/
	private $produto;
	/**
	*@var int
	*/
	private $quantidade;
	/**
	*@var int
	*/
	private $valorTotal;

	public function __construct($data,$produto,$quantidade, $valorTotal){

		$this->data = $data;
		$this->produto = $produto;
		$this->quantidade =$quantidade;
		$this->valorTotal =$valorTotal;

	}

	public function dadosDaVenda(){ 
		
		$this->valorTotal *= $this->quantidade;

		return 'A data da venda foi ' . $this->data . ' o produto é ' . $this->produto . ' a quantidade foi ' . $this->quantidade . ' o valor total é R$ ' . $this->valorTotal;

	}		
}

	$venda = new Venda('12/01/2022', 'Carro de controle remoto', 15, 150.99);

	echo PHP_EOL;
	echo $venda->dadosDaVenda();
	echo PHP_EOL;