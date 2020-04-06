<?php

class Contas 
{
	protected $saldo = 0;
	
	public function sacar ($valor)
	{
		if($this->saldo < $valor)
		{
			//return;
			throw new Exception('Saldo Insuficiente', 1);
		}
		
		$this->saldo -= $valor;
		echo '<hr>Saque Efetuado: ', $valor, '<hr>';
	}

	public function Depositar($valor)
	{
		$this->saldo += $valor;
	}	
	
	public function verSaldo()
	{
		return $this->saldo;
	}	
}

try{
$conta = new Contas();
$conta->Depositar(5000); //diminuir o valor do Depositar valor para <500 para emitir a exceção
$conta->sacar(500);
echo 'Saldo Atual: ', $conta->verSaldo();
}catch (Exception $erro){
	echo '<b>Erro N°', $erro->getCode(), ' - ' ,$erro->getMessage(), '</b><hr>';
}finally{
	echo '<hr>Saldo Atual: ', $conta->verSaldo();
}