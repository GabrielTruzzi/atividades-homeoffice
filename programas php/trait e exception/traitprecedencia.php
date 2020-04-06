<?php

trait Operacoes
{
	public function depositar($valor)
	{
		echo '<hr>Metodo da Classe: Trait<hr>';
		$this->saldo += $valor;
	}
	public function sacar($valor)
	{
		$this->saldo -= $valor;
	}
	public function verSaldo()
	{
		return $this->saldo;
	}	
}

Abstract class Contas
{
	use Operacoes;
	protected $saldo;
	PUBLIC FUNCTION depositar ($valor)
	{
		echo '<hr>Metodo da Classe: Contas<hr>';
	}
}

//O echo mostra que o metodo que foi usado não foi o da classe pai, mas o criado 
//dentro do trait, pois é executado primeiro e o sobrescreve

class ContaPoupanca extends Contas
{
		use Operacoes;
		
	PUBLIC FUNCTION depositar ($valor)
	{
		echo '<hr>Metodo da Classe: Conta Poupanca<hr>';
	}
	
}

class ContaCorrente extends Contas 
{
		use Operacoes;
		
	PUBLIC FUNCTION depositar ($valor)
	{
		echo '<hr>Metodo da Classe: Conta Corrente<hr>';
	}		
}

$objpoupanca = new ContaPoupanca();
$objcorrente = new ContaCorrente();

$objcorrente->depositar(500);
$objpoupanca->depositar(900);

echo '<pre>';
var_dump($objcorrente);
echo '<nr>';
var_dump($objpoupanca);