
<div class ="hero">

<h1>Rebanhos</h1>

<?php							

							include("config_cliente.php");
							
							//$C_id = 2;//$SESSION['usuarios']['cliente_id'];
							
							$sql = "SELECT * FROM rebanho";
							
							$result_cliente = mysqli_query($conecta_cliente, $sql);							
									
							while($consulta = mysqli_fetch_array($result_cliente)){
								
								$vid = $consulta['id'];
								
									echo "<a href='index.php?pagina=EditaRebanho&rebanho_id=$vid'  class='btn-get-started' >{$consulta['nomeRebanho']} - {$consulta['descriRebanho']}</a><br>";
									
									}
									
									mysqli_free_result($result_cliente);
						
				
				
				?>
				
</div>