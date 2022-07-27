<?php
	// inicia a sessão 
	session_start();
	
	
	// atribui valores às variáveis de conexão ao bd
	// $servidor = "mysql.cataboi.com";
	// $login = "cataboi_add1";
	// $senha = "nfe37232335";
	// $base = "cataboi";
	
	$servidor = "localhost";
	$login = "root";
	$senha = "";
	$base = "cataboi";
	

	// conecta ao bd
	$conecta = mysqli_connect($servidor, $login, $senha, $base) or die ("Erro: ".mysqli_connect_error());
	
		
?>