<?php

	
	$host = "mysql08-farm76.kinghost.net";
	$user = "sistemabuf_add1";
	$pass = "nfe992834864680";
	$bank = "sistemabuffalo";
	
	$conn = mysqli_connect( $host, $user, $pass, $bank);
	
	if(mysqli_connect_errno($conn)){
		echo "Erro na conexão";
	}else{
		
		echo "Conexão Ativa!";
	
		$vid = $_GET['id'];
   
		$sql = "delete from animais where idanimal = $vid";
      
		$exec = mysqli_query($conn,$sql);
	
		header("location: index.php?pagina=verRebanhos");
		
		}

?>	