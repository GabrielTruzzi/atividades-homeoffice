<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>MiniRede - Registrar</title>
<link href="css/estilo.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
</head>
<body>
<div class="registrar">
	<h1>Registrar</h1>
	<form action="enviocadastro.php" method="post" autocomplete="off">
		<label for="usuario">
			<i class="fas fa-user"></i>
		</label>
	<input type="text" name="usuario" placeholder="Usuario" id="usuario" required>
		<label for="senha">
			<i class="fas fa-lock"></i>
		</label>
	<input type="senha" name="senha" placeholder="Senha" id="senha" required>
		<label for="email">
			<i class="fas fa-envelope"></i>
		</label>
	<input type="email" name="email" placeholder="Email" id="email" required>
	<input type="submit" value="Registrar">
	</form>
</div>
</body>
</html>