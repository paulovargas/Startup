<?php
  
	include("config.php");	
	
	$Cid = $_POST['id_admin'];
	
	$nome = $_POST['nome'];
	$cpf = $_POST['cpf'];
	$cargo = $_POST['cargo'];
	$email = $_POST['email'];
	
	
	$senha = MD5($_POST['senha']);
		
		$sql = "update admin set nome = '$nome',
								 cpf = '$cpf',
								 cargo = '$cargo',
								 email = '$email',
								 senha = '$senha'
		
								 where id = $Cid";
      
		$exec = mysqli_query($conecta,$sql);
			
		header("location: index.php?pagina=vertodosadmin");

?>