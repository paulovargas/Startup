<?php
	// inicia a sessão 
	session_start();
	
	$servidor = "localhost";
	$login = "root";
	$senha = "";
	$base = "cataboi";
	

	// conecta ao bd
	$conecta = mysqli_connect($servidor, $login, $senha, $base) or die ("Erro: ".mysqli_connect_error());
	
		
?>