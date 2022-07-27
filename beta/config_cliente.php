<?php
	// inicia a sessão 
	session_start();
	
	include("config.php");

        $Cid = $_SESSION['usuario']['cliente_id'];

        $sql = "SELECT * FROM cliente where id = $Cid";
	
				$result = mysqli_query($conecta, $sql);

                       
                                 while($consulta_cliente = mysqli_fetch_array($result)){ 							
								
								$servidor_cliente = $consulta_cliente['servidor'];
								$login_cliente =  $consulta_cliente['login'];
								$senha_cliente =  $consulta_cliente['senha'];
								$base_cliente =  $consulta_cliente['base'];
								
								$conecta_cliente = mysqli_connect($servidor_cliente, $login_cliente, $senha_cliente, $base_cliente);								
								
							}				

							mysqli_free_result($result);
							
							$C_id = $_SESSION['cliente']['id'];
	
		
?>	