<?php


	
	include('config.php');
	
	echo $_POST['email'] . ' e ' .$_POST['senha'];

	$senha = MD5($_POST['senha']);
	
	$sql = "SELECT * FROM admin where email = '{$_POST['email']}' and senha = '{$senha}' ";
	$result = mysqli_query($conecta, $sql); 

	if($consulta = mysqli_fetch_array($result)) { 
		$_SESSION['logado'] = 1;
		$_SESSION['admin']['id'] = $consulta['id'];
		$_SESSION['admin']['nome'] = $consulta['nome'];
		$_SESSION['admin']['email'] = $consulta['email'];
		
		header("location: admin/index.php?pagina=home");
		
		}
		
	else
	{
		$sql = "SELECT * FROM usuario where email = '{$_POST['email']}' and senha = '{$senha}' ";
		$result = mysqli_query($conecta, $sql); 

			if($consulta = mysqli_fetch_array($result))
			{ 
				$_SESSION['logado'] = 1;
				$_SESSION['usuario']['id'] = $consulta['id'];
				$_SESSION['usuario']['cliente_id'] = $consulta['cliente_id'];
				$_SESSION['usuario']['nome'] = $consulta['nome'];
				$_SESSION['usuario']['email'] = $consulta['email'];		
				
				header("location: cliente/index.php?pagina=home");
				
				}
				
				else
					header("location: ./");
		
		
		
		
	}
	
	
	
		
		
		
?>		