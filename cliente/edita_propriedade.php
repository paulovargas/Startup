<?php

	include("config_cliente.php");	
	
	$Pid = $_POST['Pid'];
	$C_id = $_POST['cliente_id'];
	
	$nomePropriedade = $_POST['nomePropriedade'];
	$localidade= $_POST['localidade'];
		
		$sql = "update propriedade set nomePropriedade = '$nomePropriedade',
					       localidade = '$localidade'								   
					       where id = $Pid";
		
		
		$exec = mysqli_query($conecta_cliente,$sql);
			
			
	//echo "$servidor_cliente <br>";
	//echo "$login_cliente <br>";
	//echo "$senha_cliente <br>";
	//echo "$base_cliente <br>";
	
	
	//echo "<br>$C_id <br>";
	//echo "<br>$Pid <br>";
	//echo "<br>Propriedade :$nomePropriedade <br>";
	//echo "Localidade:$localidade<br>";
			
	header("location: index.php?pagina=verRebanhos");

?>