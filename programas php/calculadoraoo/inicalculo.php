<?php

class Calculos {

	public $num1;
	public $num2;
	public $cal;
	
	public function __construct($num1,$num2,$cal){
		$this->num1 = $num1;
		$this->num2 = $num2;
		$this->cal = $cal;
	}
	
	public function calcMetodo(){
		
		switch($this->cal) {
			case 'adc':
			$resultado = $this->num1+$this->num2;			
			break;
			
			case 'sub':
			$resultado = $this->num1-$this->num2;				
			break;
			
			case 'mul':
			$resultado = $this->num1*$this->num2;					
			break;
			
			case 'div':
			$resultado = $this->num1/$this->num2;					
			break;			
			
			default:
			$resultado = "erro";
			break;
		}
		
		return $resultado;
	}	
}

?>