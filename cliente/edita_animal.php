<?php

	include("config_cliente.php");
	
	$Aid = $_POST['id_animal'];
	
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
	$descricao = $_POST['descricao'];
		
		$sql = "update animais set rebanho_id = '$rebanho_id',
								   propriedade_id = '$propriedade_id',
								   especie = '$especie', 
								   numero_brincos = '$numero_brincos', 
								   data_nascimento = '$data_nascimento', 
								   status = '$status', 
								   raca = '$raca', 
								   pelagem = '$pelagem', 
								   sexo = '$sexo', 
								   prenhez = '$prenhez', 
								   peso = '$peso_inicial', 
								   descricao = '$descricao'
								   
								   where idanimal = $Aid";
		
		
		$exec = mysqli_query($conecta_cliente,$sql);
			
			
	// echo "$servidor_cliente <br>";
	// echo "$login_cliente <br>";
	// echo "$senha_cliente <br>";
	// echo "$base_cliente <br>";
	
	
	// echo "<br>$Aid <br>";
	// echo "<br>Rebanho :$rebanho_id <br>";
	// echo "Propriedade :$propriedade_id <br>";
	// echo "$especie<br>";
	// echo "$numero_brincos<br> ";
	// echo "$data_nascimento<br> ";
	// echo "$status <br>";
	// echo "$raca <br>";
	// echo "$pelagem <br>";
	// echo "$sexo <br>";
	// echo "$prenhez <br>";
	// echo "$peso_inicial<br>";
	// echo "$foto <br>";
	// echo "$descricao<br>"; 
			
	header("location: index.php?pagina=verAnimais");

?>