<?php
  
	include("config.php");	
	
	$Uid = $_POST['id_usu'];
	
	$nome = $_POST['nome_usu'];
	$email = $_POST['email'];

	$senha = MD5($_POST['senha']);	
		
		$sql = "update usuario set nome = '{$_POST['nome_usu']}',
                                           email = '{$_POST['email']}',
					   senha = '$senha'
					   where id = $Uid";
      
		$exec = mysqli_query($conecta,$sql);
			
		header("location: index.php?pagina=vertodosclientes");

?>	