<?php
  
	include("config.php");	
	
	$nome_cliente = $_POST['nome_cliente'];
	$endereco = $_POST['endereco'];	
	$cidade = $_POST['cidade'];
	$estado =  $_POST['estado'];
	$telefone = $_POST['telefone'];
	$email = $_POST['email'];
	$cpf_cnpj = $_POST['cpf_cnpj'];
	$inscricao_est = $_POST['incricao_est'];
	$dta_inclu = $_POST['incricao_est'];
	$num_usuarios = $_POST['num_usuarios'];
	$servidor_db = $_POST['servidor'];
	$login_db = $_POST['login'];
	$senha_db = $_POST['senha'];
	$base_db = $_POST['base'];

	// conecta ao bd
		
	$sql = "insert into cliente values( null, '$nome_cliente', '$endereco', '$cidade', '$estado', '$telefone', '$email', '$cpf_cnpj', '$inscricao_est', '$dta_inclu', '$num_usuarios', '$servidor_db', '$login_db', '$senha_db', '$base_db')";      
	
	$exec = mysqli_query($conecta,$sql);
		
	//echo "$nome<br>	$cpf <br> $cargo <br> $email ";
		
	header("location: index.php?pagina=vertodosclientes");

?>