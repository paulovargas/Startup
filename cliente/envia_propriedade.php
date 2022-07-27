<?php


	//echo "Implementar!";
  
	include("config.php");	
	
	$nomePropriedade = $_POST['nomePropriedade'];
	$localidade = $_POST['localidade'];
	$cliente_id = $_POST['cliente_id'];
		
		$sql = "insert into propriedade values( null, '$cliente_id', '$nomePropriedade','$localidade')";
      
			$exec = mysqli_query($conecta_cliente,$sql);
			
			
	echo "$servidor_cliente <br>";
	echo "$login_cliente <br>";
	echo "$senha_cliente <br>";
	echo "$base_cliente <br>";
	
	echo "<br>$nomePropriedade <br>";
	echo "$localidade <br>";
	echo "$cliente_id <br>";
 
			
		header("location: index.php?pagina=verPropriedades");

?>