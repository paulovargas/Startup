<?php
  
	include("config.php");	
	
	$cliente_id = $_POST['cliente_id'];
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	
	
	$senha = MD5($_POST['senha']);
		
		$sql = "insert into usuario values( null, '$cliente_id', '$nome', '$email', '$senha')";
      
		$exec = mysqli_query($conecta,$sql);
		

		//echo "$nome<br>	$cpf <br> $cargo <br> $email ";
			
		header("location: index.php?pagina=vertodosusu");

?>