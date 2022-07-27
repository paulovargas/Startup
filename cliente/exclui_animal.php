<?php

	include("config_cliente.php");
	
	$Aid = $_POST['id_animal'];
		
		$sql = "delete animais where idanimal = $Aid";
		
		
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