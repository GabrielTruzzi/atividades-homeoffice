<?php 

//atributo public permite acesso de qualquer lugar de forma direta.

class Contas 
{
	public $titular;
	public $saldo;
	
	public function depositar($valor)
	{
		$this->saldo += $valor;
	}
	
	public function sacar($valor)
	{
		$this->saldo -= $valor;
	}
		
}

class Poupanca extends Contas
{
	public function aplicar($valor)
	{
		$this->depositar($valor);
	}
	public function resgatar($valor)
	{
		$this->sacar($valor);
	}	
	public function verSaldo()	
	{
		return $this->saldo;
	}
}

$objPoupança = new Poupanca();
$objPoupança->depositar(5000);
$objPoupança->saldo = 3000;

echo 'Saldo Atual: ', $objPoupança->saldo;
echo '<hr>';

$objPoupança->aplicar(4000);
echo 'Saldo Atual: ', $objPoupança->verSaldo();