<?php

//a ideia do metodo final éd e que ele não pode ser reescrito, deve ser mantido
//daquele jeito para cumprir o propósito do método

class Log
{
	public final function escrever($dados)
	{
		echo "<hr>Gerando Log......<br><br>$dados<br><br><hr>";
	}
}

class LogAlterado extends Log
{
	//o seguinte código é ilegal para um método final:
	//public function escrever($dados)
	//{
	//	echo "<hr>Gerando Log......<hr>";
	//}
}