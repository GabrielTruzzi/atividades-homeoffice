<?php

trait Validacao
{
	public function validarCpfCnpj($CpforCnpj)
	{
		echo '<hr>Validando CPF/CNPJ...<hr>';
	}
	
	public function validarCartao($numeroCartao)
	{
		echo '<hr>Validando Cartão...<hr>';		
	}
	
	public function validarDados($dados)
	{
		echo '<hr>Validando os dados...Metodo do trait Validação<hr>';
	}
	
//	public abstract function metodoAbstrato($parametro)
//	{}
}

trait Banco
{
	public $nomeBanco = 'contas';
	public function gravar($dados)
	{
		echo '<hr>Gravando dados no banco<hr>';
	}
	
	public function consultar($dados)
	{
		echo '<hr>Buscando o Registro....<hr>';
	}
	
	public function validarDados($dados)
	{
		echo '<hr>Validando os dados...Metodo do trait Banco<hr>';
	}	
	
}

trait TodosOsTraits
{
	use Validacao,Banco {
		Banco::validarDados insteadof Validacao;
	}
	
	public function metodoAbstrato($parametro)
	{
		echo '<hr>Metodo Implementado<hr>';
	}	
}

class Vendas
{
	
	use TodosOsTraits;
	
	public function finalizar($dados)
	{
		$this->validarCartao(4323556774123);
		$this->validarCpfCnpj(657345226700);
		$this->validarDados('Dados');
		$this->gravar('dados');
	}
	
	public function getNomeBanco()
	{
		return $this->nomeBanco;
	}
}

$vendas = new Vendas();
$vendas->finalizar('dados');
echo '<hr>';
echo 'Nome do Banco: ', $vendas->getNomeBanco();