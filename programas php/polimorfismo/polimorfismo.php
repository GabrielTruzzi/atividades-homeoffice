<?php

interface ContasInterface
{
	public function sacar($valor);
	public function depositar($valor);
	public function verSaldo();	
}

class ContaCorrente implements ContasInterface
{
	public $saldo = 0;
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
}

class ContaPoupanca implements ContasInterface
{
	public $saldo = 0;
	public function sacar($valor)
	{
		echo '<hr> Saque Efetuado: ',$valor,' <hr>';
		$this->saldo -= $valor;
	}
	public function depositar($valor)
	{
		echo '<hr> Deposito Efetuado: ',$valor,' <hr>';		
		$this->saldo += $valor;
	}	
	public function verSaldo()
	{
		return $this->saldo;
	}	
}

class ContaSemInterface
{
	
}

class Aplicacao
{
	public function aplicar(ContasInterface $conta)
	{
		echo 'Ver saldo: ' . $conta->verSaldo();
	}
}

$ccorrente = new ContaCorrente();
$ccorrente->depositar(700);
$ccpoupanca = new ContaPoupanca();
$ccpoupanca->depositar(200);
$cseminterface = new ContaSemInterface();

$aplicacao = new Aplicacao();
$aplicacao->aplicar($ccpoupanca);

echo '<hr>';
echo 'É uma instancia de ContasSemInterface: <br>';
var_dump($ccpoupanca instanceof ContaSemInterface);
echo '<br>';
echo 'É uma instancia de ContaPoupanca: <br>';
var_dump($ccpoupanca instanceof ContaPoupanca);
echo '<br>';
echo 'É uma instancia de ContasInterface: <br>';
var_dump($ccpoupanca instanceof ContasInterface);
echo '<hr>';
echo 'É uma instancia de ContasSemInterface: <br>';
var_dump($ccorrente instanceof ContaSemInterface);
echo '<br>';
echo 'É uma instancia de ContaCorrente: <br>';
var_dump($ccorrente instanceof ContaCorrente);
echo '<br>';
echo 'É uma instancia de ContasInterface: <br>';
var_dump($ccorrente instanceof ContasInterface);









