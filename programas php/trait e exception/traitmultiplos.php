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
	
}

class Vendas
{
	use Validacao, Banco;
	
	public function finalizar($dados)
	{
		$this->validarCartao(4323556774123);
		$this->validarCpfCnpj(657345226700);
		$this->gravar('dados');
	}
}

$vendas = new Vendas();
$vendas->finalizar('dados');