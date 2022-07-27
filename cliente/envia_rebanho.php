<?php


	//echo "Implementar!";
  
	include("config.php");	
	
	$nomeRebanho = $_POST['nomeRebanho'];
	$descriRebanho = $_POST['descriRebanho'];
	$cliente_id = $_POST['cliente_id'];
		
		$sql = "insert into rebanho values( null, '$cliente_id', '$nomeRebanho','$descriRebanho')";
      
			$exec = mysqli_query($conecta_cliente,$sql);
			
			
	echo "$servidor_cliente <br>";
	echo "$login_cliente <br>";
	echo "$senha_cliente <br>";
	echo "$base_cliente <br>";
	
	echo "<br>$nomeRebanho <br>";
	echo "$descriRebanho <br>";
	echo "$cliente_id <br>";
 
			
		header("location: index.php?pagina=verRebanhos");

?>