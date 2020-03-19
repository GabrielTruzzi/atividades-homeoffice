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


class Poupanca extends Contas{
	public $aniversario = 6;
	
	public function aplicar($valor){
		echo "<hr> Aplicação efetuada <b> $valor </b> <hr>";
		$this->depositar($valor);		
	}
}

class Conjunta extends Poupanca{
	
}

$conta = new Contas();
$conta->depositar(1200);

$apoupanca = new Poupanca();
$apoupanca->depositar(2000);

$aconjunta = new Conjunta();

echo '<pre>';
var_dump($conta);
var_dump($apoupanca);
echo '<hr>';
var_dump($aconjunta);