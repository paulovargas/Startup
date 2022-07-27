<?php
  
	include("config.php");	
	
	$Cid = $_POST['id_cliente'];
	
	$nome_cliente = $_POST['nome_cliente'];
	$endereco = $_POST['endereco'];	
	$cidade = $_POST['cidade'];
	$estado =  $_POST['estado'];
	$telefone = $_POST['telefone'];
	$email = $_POST['email'];
	$cpf_cnpj = $_POST['cpf_cnpj'];
	$inscricao_est = $_POST['rebanho_id'];
	$num_usuarios = $_POST['num_usuarios'];
	$servidor = $_POST['servidor'];
	$login = $_POST['login'];
	$senha = $_POST['senha'];
	$base = $_POST['base'];
	
	
		
		$sql = "update cliente set nome_cliente = '{$_POST['nome_cliente']}',
								   endereco = '{$_POST['endereco']}',
								   cidade = '{$_POST['cidade']}',
								   estado = '{$_POST['estado']}',
								   telefone = '{$_POST['telefone']}',
								   email = '{$_POST['email']}',
								   cpf_cnpj = '{$_POST['cpf_cnpj']}',
								   inscricao_est = '{$_POST['inscricao_est']}',
								   num_usuarios = '{$_POST['num_usuarios']}',
								   servidor = '{$_POST['servidor']}',
								   login = '{$_POST['login']}',
								   senha = '{$_POST['senha']}',
								   base = '{$_POST['base']}'
								   where id = $Cid";
      
		$exec = mysqli_query($conecta,$sql);
			
		header("location: index.php?pagina=vertodosclientes");

?>