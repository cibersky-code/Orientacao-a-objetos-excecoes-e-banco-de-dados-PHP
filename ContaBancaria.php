<?php

class ContaBancaria 
	
	{
		/**
		*@var string
		*/
		private $banco;
		/**
		*@var string
		*/
		private $nometitular;
		/**
		*@var string
		*/
		private $nomeAgencia;
		/**
		*@var int
		*/
		private $numeroConta;
		/**
		*@var float
		*/
		private $saldo;

		public function __construct(
			string $banco,
			string $nometitular,
			string $nomeAgencia,
			int $numeroConta, 
			float $saldo
		){
			$this->banco = $banco;
			$this->nometitular = $nometitular;
			$this->nomeAgencia = $nomeAgencia;
			$this->numeroConta = $numeroConta;
			$this->saldo = $saldo;
		}

		public function obterSaldo() : string
		{
			return 'seu saldo atual é: R$' .$this->saldo;
		}

		public function depositar(float $valor) : string
		{
			$this->saldo += $valor;
			return 'Déposito de R$ ' . $valor . ' realizado';
		}

		public function sacar(float $valor) : string
		{
			$this->saldo -= $valor;
			return 'Saque de R$ ' . $valor . ' realizado';
		}


	}


	$conta = new ContaBancaria(
	'Banco Zeta', //banco
	'Bruno Teles ', //nomeTitular
	'0002', //nomeAgencia
	'156489757', //numeroConta
	 0.00 //saldo
	);

	
	echo $conta->obterSaldo();

	echo PHP_EOL;

	echo$conta->depositar(1000.00);
	echo PHP_EOL;

	echo $conta->obterSaldo();

	echo PHP_EOL;

	echo $conta->sacar(500.00);

	echo PHP_EOL;

	echo $conta->obterSaldo();

	echo PHP_EOL;