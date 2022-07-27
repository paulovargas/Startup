<?php

	//include("config.php");
	
	session_start();
	
	$servidor = 'localhost';
	$login = 'root';
	$senha = '';
	$base = 'cataboi';
	
	$conn = mysqli_connect( $servidor, $login, $senha, $base);	
	
	$vid = $_POST['id_admin'];

	//echo "ID = $vid ";
	
	$senha = MD5($_POST['senha']);
	
	$nome = $_POST['nome'];
	$cpf = $_POST['cpf'];
	$cargo = $_POST['cargo'];
	$email = $_POST['email'];	
		
	$sql = "UPDATE admin SET nome = $nome, cpf = $cpf, cargo = $cargo, email = $email, senha = $senha WHERE id = $vid";
       
	$exec = mysqli_query($conn,$sql);
					
		//header("location: index.php");
		
	echo "$nome <br>";
	echo "$cpf <br>";
	echo "$cargo <br>";
	echo "$email <br>";
	echo "$senha <br>";
	echo "$vid <br>";

?>