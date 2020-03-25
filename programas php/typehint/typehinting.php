<?php

class Agencia
{
	public $nome;
	public $telefone;
	
	public function getNome()
	{
		return $this->nome;
	}
	
	public function getTelefone()
	{
		return $this->telefone;
	}
}	

class Titular
{
	public $nome;
	public $celular;
	
	public function setDados(array $dados)
	{
		$this->nome = $dados['nome'];
		$this->celular = $dados['celular'];
	}
	
	public function getNome()
	{
		return $this->nome;
	}
	
	public function getCelular()
	{
		return $this->celular;
	}	
}

class Contas 
{
	public $agencia;
	public $titular;
	public $saldo;
	
	public function setAgencia(Agencia $agencia)
	{
		$this->agencia = $agencia;
	}
	
	public function getAgencia()
	{
		return $this->agencia;
	}
	
	public function setTitular(Titular $titular)
	{
		$this->titular = $titular;
	}	
	
	public function getTitular($titular)
	{
		$this->titular = $titular;
	}		
}

$objagencia = new Agencia();
$objagencia->nome = 'Vila Mariana - VLM';
$objagencia->telefone = '3223-6419';

$objtitular = new Titular();
$objtitular = setDados('nome' = 'Aline dos santos','celular' = '94443-2145');
$objtitular->nome = 'Paulo Barbalho';
$objtitular->celular = '92531-1143';

$objconta = new Contas();
$objconta->setAgencia($objagencia);
$objconta->setTitular($objtitular);
$objconta->saldo = 832;

echo '<pre>';
var_dump($objagencia);
echo '<br>';
var_dump($objtitular);
echo '<br>';
var_dump($objconta);

echo '<hr>';
var_dump($objconta->getAgencia());
echo '<hr>';

echo '<hr>';
echo 'Agencia: ' , $objconta->getAgencia()->getNome() , ' - ' $objconta->getAgencia()->getTelefone() , '<br>';
echo 'Titular: ' , $objconta->getTitular()->getNome() , ' - ' $objconta->getTitular()->getCelular() , '<br>';
echo 'Saldo: ' , $objconta->saldo;

