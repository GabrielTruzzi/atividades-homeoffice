<?php 

//atributo protected permite acesso dentro da classe onde foi criado, por seus 
//descendentes, mas nunca pode ser acessado de forma direta.

//não só alterar, tentar acessar um protected também resulta em erro.

abstract class Contas 
{
	protected $titular;
	protected  $saldo;
	
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
$objPoupança->sacar(3000);

echo 'Saldo Atual: ', $objPoupança->verSaldo();
echo '<hr>';

$objPoupança->aplicar(4000);
echo 'Saldo Atual: ', $objPoupança->verSaldo();
echo '<hr>';
$objPoupança->metodoProtegido();