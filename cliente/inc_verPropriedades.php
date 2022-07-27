<div class ="hero">

<h1> Propriedades</h1>

<?php							

							include("config_cliente.php");
							
							//$C_id = $SESSION['usuario']['cliente_id'];
							
							$sql = "SELECT * FROM propriedade";
							
							$result_cliente = mysqli_query($conecta_cliente, $sql);							
									
							while($consulta = mysqli_fetch_array($result_cliente)){
								
								$vid = $consulta['id'];

								if($vid != 1)								
									echo "<a href='index.php?pagina=EditaPropriedade&propriedade_id=$vid'  class='btn-get-started' >{$consulta['nomePropriedade']} - {$consulta['localidade']}</a><br>";
									
									}
									
									mysqli_free_result($result_cliente);
						
				
				
				?>
				
</div>