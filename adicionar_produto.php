<?php
	session_start();
	
	if(isset($_POST['produto'])) {	
		switch($_POST['produto']) {
			case '1': $_SESSION['produto1'] = 'Bicicleta'; break;
			case '2': $_SESSION['produto2'] = 'Panelas'; break;
			case '3': $_SESSION['produto3'] = 'Mesas'; break;
			case '4': $_SESSION['produto4'] = 'Video Games'; break;
			case '5': $_SESSION['produto5'] = 'Televisoes'; break;
		}
	}
	
?>
<!Doctype html>
<html>
	<head>
		<title>Portal de Compras</title>
	</head>
	
	<body>
		<form method="POST">
			<label>Login</label>
			<select name='produto'>
				<option value="1">Bicicleta</option>
				<option value="2">Panelas</option>
				<option value="3">Mesas</option>
				<option value="4">Video Games</option>
				<option value="5">Televisões</option>
			</select>
			
			<input type="submit" value="Entrar" />
		</form>
		<a href="home.php">Voltar</a>
	</body>
</html>