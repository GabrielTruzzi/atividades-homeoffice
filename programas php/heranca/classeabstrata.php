<?php

//classes abstratas não podem ser instanciadas, permitem reaproveitar códigos
//mas sem interferir na execução da aplicação

abstract class Contas{
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
	
	//o metodo abstrato deve ser obrigatoriamente implementado na classe filha
	public abstract function gerarLog($dados);
}

class Poupanca extends Contas {
	public function gerarLog($dados){
		echo "<hr>Gerando Log.... Conta Poupança<hr>";
	}
}

class Corrente extends Contas {
	public function gerarLog($dados){
		echo "<hr>Gerando Log.... Conta Corrente<hr>";
	}	
}

$cpoupanca = new Poupanca();
$ccorrente = new Corrente();

echo '<pre>';
var_dump($ccorrente);
echo '<hr>';
var_dump($cpoupanca);
echo '<hr>';