<?php
	session_start();

	$login = $_POST['login'];
	$senha = $_POST['senha'];

	if($senha == '9999') {

		$_SESSION['nome'] = $login;
		header('Location: home.php');
		
	} else {

		header('Location:index.php');
	}
?>