<?php

	session_start();
	
	$arranjo = $_SESSION;

	foreach($arranjo as $produtos) {
		echo $produtos . "<br>";
	}
?>
<br>
<a href="home.php">Voltar</a>