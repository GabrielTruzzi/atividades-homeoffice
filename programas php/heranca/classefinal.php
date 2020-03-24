<?php

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
	
	public abstract function gerarLog($dados);
}

//classe final é a ultima da sua hierarquia

//classe final garante que todas as heranças corram da classe correta

final class Poupanca extends Contas {
	public function gerarLog($dados){
		echo "<hr>Gerando Log.... Conta Poupança<hr>";
	}
}

final class Corrente extends Contas {
	public function gerarLog($dados){
		echo "<hr>Gerando Log.... Conta Corrente<hr>";
	}	
}

class Conjunta extends Contas {
		public function gerarLog($dados){
		echo "<hr>Gerando Log.... Conta Conjunta<hr>";
	}
}
class Nova extends Contas {
		public function gerarLog($dados){
		echo "<hr>Gerando Log.... Conta Nova<hr>";
	}
}

$cpoupanca = new Poupanca();
$ccorrente = new Corrente();

echo '<pre>';
var_dump($ccorrente);
echo '<hr>';
var_dump($cpoupanca);
echo '<hr>';