<?php

//namespaces permitem organizar o código de forma mais simples, sem a necessidade de nomes de
//classes, métodos ou arquivos como divisores/organizadores.

//o namespace representa essencialmente um diretório na estrutura do código

namespace Bradesco;

class Contas 
{
	protected $saldo = 500;
	protected $banco = 'Bradesco';
	
	public function verSaldo()
	{
		return $this->saldo;
	}
	
	public function getBanco()
	{
		return $this->banco;
	}	
}

namespace Itau;

class Contas
{
	protected $saldo = 800;
	protected $banco = 'Itau';
	
	public function verSaldo()
	{
		return $this->saldo;
	}
	
	public function getBanco()
	{
		return $this->banco;
	}	
}

$contBradesco = new \Bradesco\Contas();
echo 'Nome do banco: ', $contBradesco->getBanco();
$contItau = new Contas();
echo '<hr>';
echo 'Nome do banco: ', $contItau->getBanco();