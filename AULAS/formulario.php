<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>formulario</title>
</head>
<body>

	<h1>Formulários</h1>
	<br>
	<br>
	<form action="cadastrar.php" method="post">
		<label for="nome">Nome:</label>
		<input type="text" name="nome" id="nome">
		<br><br>

		<label for="email">Email:</label>
		<input type="email" name="email" id="email">
		<br><br>

		<input type="submit" name="enviar">
		<button type="submit">cadastrar</button>


	</form>
	<br><br>

	<a href="<?php  ?>">Executando</a>

</body>
</html>