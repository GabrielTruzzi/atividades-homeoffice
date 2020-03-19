<?php

class Contas{
	public $saldo = 0;
	public $titular;
	
	public function sacar($valor){
		$this->saldo -= $valor;
	}
	public function depositar($valor){
		$this->saldo += $valor;
	}	
	public function verSaldo(){
		return $this->saldo;
	}		
}

class Corrente extends Contas{
	public function sacar ($valor){
		echo "<hr> Saque Efeturado <b> valor: $valor </b> <hr>";
		parent::sacar($valor); 
		//parent = referencia a classe superior
	}
}

$conta = new Contas();
$conta->depositar(2500);
$conta->sacar(200);
echo '<hr>';
$acorrente = new Corrente ();
$acorrente -> depositar(2500);
$acorrente->sacar(850);
echo '<hr>';
echo 'Saldo em conta: ', $conta->verSaldo();
echo '<hr>';
echo 'Saldo em conta corrente: ', $acorrente->verSaldo();