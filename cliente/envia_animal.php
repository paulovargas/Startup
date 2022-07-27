<?php


	//echo "Implementar!";
  
	include("config.php");	
	
	$rebanho_id = $_POST['rebanho_id'];
	$propriedade_id = $_POST['propriedade_id'];
	$especie = $_POST['especie'];
	$numero_brincos = $_POST['numero_brincos'];
	$data_nascimento = $_POST['data_nascimento'];
	$status = $_POST['status'];
	$raca = $_POST['raca'];
	$pelagem = $_POST['pelagem'];
	$sexo = $_POST['sexo'];
	$prenhez = $_POST['prenhez'];
	$peso_inicial = $_POST['peso'];
	$foto = $_POST['foto'];
	$descricao = $_POST['descricao'];
		
		$sql = "insert into animais values( null, '$rebanho_id','$propriedade_id', '$especie', '$numero_brincos', '$data_nascimento', '$status', '$raca', '$pelagem', '$sexo', '$prenhez', '$peso_inicial', '$foto', '$descricao')";
      
			$exec = mysqli_query($conecta_cliente,$sql);
			
			
	echo "$servidor_cliente <br>";
	echo "$login_cliente <br>";
	echo "$senha_cliente <br>";
	echo "$base_cliente <br>";
	
	echo "<br>$rebanho_id <br>";
	echo "$propriedade_id <br>";
	echo "$especie<br>";
	echo "$numero_brincos<br> ";
	echo "$data_nascimento<br> ";
	echo "$status <br>";
	echo "$raca <br>";
	echo "$pelagem <br>";
	echo "$sexo <br>";
	echo "$prenhez <br>";
	echo "$peso_inicial<br>";
	echo "$foto <br>";
	echo "$descricao<br>"; 
			
		header("location: index.php?pagina=verAnimais");

?>