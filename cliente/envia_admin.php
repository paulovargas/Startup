<?php
  
	include("config.php");	
	
	$nome = $_POST['nome'];
	$cpf = $_POST['cpf'];
	$cargo = $_POST['cargo'];
	$email = $_POST['email'];
	
	
	$senha = MD5($_POST['senha']);
		
		$sql = "insert into admin values( null, '$nome','$cpf', '$cargo', '$email', '$senha')";
      
		$exec = mysqli_query($conecta,$sql);
		

		//echo "$nome<br>	$cpf <br> $cargo <br> $email ";
			
		header("location: index.php?pagina=vertodosadmin");

?>