<?php 
require 'strategyfretes.php';

class Pedidos
{
	public $total;
	public $frete;
	
	public function calcularPrzTotal(FretesInterface $frete)
	{
		$dadosFrete = [
		'total' => $frete->getValorFrete(), 
		'prazo' => $frete->getPrazo()];
		return $this->total + $frete->getValorFrete();
	}
	
	public function setTotal($total)
	{
		$this->total = $total;
	}
}

$tipoPAC = new FretePac();
$tipoPAC->buscar('dados teste');

$pedido = new Pedidos();

$pedido->setTotal(150);
$dadosFrete = $pedido->calcularPrzTotal($tipoPAC);
echo 'Total final: ',$dadosFrete['total']; 
echo '<br>Prazo: ',$dadosFrete['prazo']; 