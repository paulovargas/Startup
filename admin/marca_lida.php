<?php

	include('config.php');
	
	$conn = mysqli_connect( $host, $user, $pass, $bank);
	
	$vid = $_POST['id_mensagem'];

	echo "ID = '$vid'";
   
	
	$conn = mysqli_connect( $servidor, $login, $senha, $base);
	
		
		$sql = "update mensagem set lida = '1' where id = $vid";
       
		$exec = mysqli_query($conn,$sql);
					
		header("location: index.php");

?>