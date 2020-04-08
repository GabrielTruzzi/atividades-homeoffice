<?php

class Usuarios
{
	public $nome;
	public $email;
	public static $listausuarios = [];
	public static $totalUsuarios = 0;
	
	public function setNome($nome)
	{
		$this->nome = $nome;
	}
	
	public function getNome()
	{
		return $this->nome;
	}
	
	public function salvarUsuario(Usuarios $usuario)
	{
		self::$listausuarios[] = $usuario;
	}
	
	public function setEmail($email)
	{
		$this->email = $email;
	}
	
	public function getEmail()
	{
		return $this->email;
	}	
	
//metodos estáticos só podem manipular atributos estáticos, logo o 'this' não funciona	
	
	public static function listarUsuarios()
	{
		//return $this->listaUsuarios;
		return self::$listausuarios;
	}
}

$usuario1 = new Usuarios();
Usuarios::$totalUsuarios++;
//$usuario1->salvarUsuario($usuario1);
Usuarios::salvarUsuario($usuario1);

$usuario1->setNome('Jorge');
$usuario1->setEmail('Jorginho3@bol.com');

$usuario2 = new Usuarios();
Usuarios::$totalUsuarios++;
//$usuario2->salvarUsuario($usuario2);
Usuarios::salvarUsuario($usuario2);

$usuario2->setNome('Paula');
$usuario2->setEmail('Paula1989@gmail.com');

$usuario3 = new Usuarios();
Usuarios::$totalUsuarios++;
//$usuario3->salvarUsuario($usuario3);
Usuarios::salvarUsuario($usuario3);

$usuario3->setNome('André');
$usuario3->setEmail('AndreAcosta@usp.br');

echo 'Total de Usuarios: '. count(Usuarios::$listausuarios);
echo '<br>';
echo 'Total de Usuarios Objeto 1: '. count(Usuarios::$listausuarios);
echo '<br>';
echo 'Total de Usuarios Objeto 2: '. count(Usuarios::$listausuarios);
echo '<hr>';
foreach (Usuarios::listarUsuarios() as $usuario){
	echo 'Nome: ',$usuario->getNome(),'<br>';
	echo 'Email: ',$usuario->getEmail(),'<hr>';
}

