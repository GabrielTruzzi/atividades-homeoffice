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
}

trait Banco
{
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

//um trair aglomerando outros pode ser usado para resolver o conflito

trait TodosOsTraits
{
	use Validacao,Banco {
		Banco::validarDados insteadof Validacao;
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
}

$vendas = new Vendas();
$vendas->finalizar('dados');