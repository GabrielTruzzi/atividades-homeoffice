<html>
<head>
<title>calculadora</title>
</head>
<body>

<form action="calculo.php" method="POST">
	Primeira Variavel: <input type="text" name="num1"><br>
	Segunda Variavel: <input type="text" name="num2"><br>
	Operação: <select name="cal">
		<option value="adc">Adcionar</option>
		<option value="sub">Subtrair</option>
		<option value="mul">Multiplicar</option>
		<option value="div">Dividir</option>		
	</select>
	<br><button type="submit">Calcular</button>
</form>

</body>

</html>