<?php

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

//o use permite atribuir um apelido ao namespace

use Bradesco\Contas as ContaBradesco;

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

$contBradesco = new ContaBradesco();
echo 'Nome do banco: ', $contBradesco->getBanco();
$contItau = new Contas();
echo '<hr>';
echo 'Nome do banco: ', $contItau->getBanco();