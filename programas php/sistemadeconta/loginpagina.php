<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link href="estilo.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
</head>
<body>
<div class="login">
	<h1>Login</h1>
	<form action="autenticacao.php" method="post">
		<label for="usuario">
			<i class="fas fa-user"></i>
		</label>
		<input type="text" name="usuario" placeholder="usuario" id="usuario" requerido>
		<label for="senha">
			<i class="fas fa-lock"></i>
		</label>
		<input type="senha" name="senha" placeholder="senha" id="senha" requerido>
		<input type="submit" value="Entrar">
		<a href="registrar.php">Criar nova conta</a>				
	</form>
</div>
</body>
</html>