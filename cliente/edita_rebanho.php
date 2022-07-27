<?php

	include("config_cliente.php");		
	
	$Rid = $_POST['Rid'];
	$C_id = $_POST['cliente_id'];
	
	$nomeRebanho = $_POST['nomeRebanho'];
	$descriRebanho = $_POST['descriRebanho'];
		
		$sql = "update rebanho set nomeRebanho = '$nomeRebanho',
								   descriRebanho = '$descriRebanho'								   
								   where id = $Rid";
		
		
		$exec = mysqli_query($conecta_cliente,$sql);
			
			
	echo "$servidor_cliente <br>";
	echo "$login_cliente <br>";
	echo "$senha_cliente <br>";
	echo "$base_cliente <br>";
	
	
	echo "<br>$C_id <br>";
	echo "<br>$Rid <br>";
	echo "<br>Rebanho :$nomeRebanho <br>";
	echo "Propriedade :$descriRebanho <br>";
			
	header("location: index.php?pagina=verRebanhos");

?>