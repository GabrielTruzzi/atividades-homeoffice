<?php

//interfaces são similares a classes abstratas, mas não podem possuir implementação
//de metodos definidos ou atributos
//uma classe não herda uma interface, ela implementa a interface

//inteface como garantia e classe abstrata como reaproveitamento

interface ContasInterface
{
	public function sacar($valor);
	public function depositar($valor);	
	public function versaldo();	
}

interface LogInterface
{
	public function gerarLog($dado);
}

//diferente das classes, podem ser implementadas multiplas interfaces

abstract class ContasAbstract implements ContasInterface, LogInterface
{
		public function sacar($valor)
	{
		$this->saldo -= $valor;
	}
	public function depositar($valor)
	{
		$this->saldo += $valor;
	}	
	public function verSaldo()
	{
		return $this->saldo;
	}	
	public function gerarLog($dado)
	{
	}	
}

class Corrente extends ContasAbstract
{

}

class Poupanca extends ContasAbstract
{

}