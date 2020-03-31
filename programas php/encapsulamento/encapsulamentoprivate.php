<?php 

//private só pode ser acessado dentro da classe onde foi definido, não pode seu usado em nenhum outro lugar
//atributo usado quando o acesso não é util fora da classe.

abstract class Contas 
{
	protected $titular;
	protected $saldo;
	
	private $atributoPrivate;
	
	
	public function depositar($valor)
	{
		$this->saldo += $valor;
	}
	
	public function sacar($valor)
	{
		$this->saldo -= $valor;
	}	
		
	public function setTitular($titular)
	{
		$this->titular = $titular;
	}	
	
	public function getTitular()
	{
		return $titular;
	}		
	
	protected function metodoProtegido()
	{
		echo '<hr>Acessando metodo protegido....<hr>';
	}
}

class Poupanca extends Contas
{
	private $aniversario = 6;
	private $nomeClasse = __CLASS__;	
//CLASS é uma variavel que retorna o nome da classe
	
	public function rendimento()
	{
		if($this->aniversario=6)
			{
			echo '<hr>Aniversario da Conta<hr>';
			echo '<hr>Nome da Classe: ', $this->nomeClasse,'<hr>';
			}
	//	$this->atributoPrivate;
	}
	
	public function aplicar($valor)
	{
		$this->rendimento().
		$this->metodoProtegido();
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
$objPoupança->sacar(3000);

echo 'Saldo Atual: ', $objPoupança->verSaldo();
echo '<hr>';

$objPoupança->aplicar(4000);
echo 'Saldo Atual: ', $objPoupança->verSaldo();
echo '<hr>';