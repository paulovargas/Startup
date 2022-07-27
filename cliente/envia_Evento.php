<?php


	//echo "Implementar!";
  
	include("config.php");	
	
	$rebanho_id = $_POST['rebanho_id'];
	$animal_id = $_POST['animal_id'];
	$evento_grupo = $_POST['evento_grupo'];
	$nome = $_POST['nome'];
	$local = $_POST['local'];
	$data_evento = $_POST['data_evento'];
	$descri = $_POST['descri'];
	$obser = $_POST['obser'];
		
		$sql = "insert into rebanho values( null, '$rebanho_id', '$animal_id','$evento_grupo', '$nome','$local', '$data_evento','$descri','$obser')";
      
			$exec = mysqli_query($conecta_cliente,$sql);
			
			

 
			
		header("location: index.php?pagina=verRebanhos");

?>