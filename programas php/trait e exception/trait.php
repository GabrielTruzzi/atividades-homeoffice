<?php

//traits assim como classes abstratas, não pode ser instanciados

//traits podem ser usados para reutilizar codigos de forma simples
//diminuindo o acoplamento e separando o código

trait Operacoes
{
	public function depositar($valor)
	{
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
}

class ContaPoupanca extends Contas
{}

class ContaCorrente extends Contas 
{}

$objpoupanca = new ContaPoupanca();
$objcorrente = new ContaCorrente();

$objcorrente->depositar(500);
$objpoupanca->depositar(900);

echo '<pre>';
var_dump($objcorrente);
echo '<nr>';
var_dump($objpoupanca);