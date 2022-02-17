<?php

class ContaBancaria 
	
	{
		private $banco;
		private $nometitular;
		private $nomeAgencia;
		private $numeroConta;
		private $saldo;

		public function __construct($banco, $nometitular, $nomeAgencia, $numeroConta, $saldo)
		{
			$this->banco = $banco;
			$this->nometitular = $nometitular;
			$this->nomeAgencia = $nomeAgencia;
			$this->numeroConta = $numeroConta;
			$this->saldo = $saldo;
		}

		public function obterSaldo()
		{
			return 'seu saldo atual é: R$' .$this->saldo;
		}

		public function depositar($valor)
		{
			$this->saldo += $valor;
			return 'Déposito de R$ ' . $valor . ' realizado';
		}

		public function sacar($valor)
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