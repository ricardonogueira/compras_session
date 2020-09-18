<?php
	session_start();
	
	if(!isset($_SESSION['nome'])) {
		header('Location: index.php');
	}

?>

<!Doctype html>
<html lang="pt-br">
	<head>
		<title>Portal de Compras</title>
	</head>
	
	<body>
		<b>Seja bem vindo <?php echo $_SESSION['nome']?></b>
		<br>
		<a href="adicionar_produto.php">Adicionar Produto</a><br>
		<a href="consultar_carrinho.php">Consultar Carrinho</a><br>
		<a href="logout.php">Logout</a>
	
	</body>
</html>