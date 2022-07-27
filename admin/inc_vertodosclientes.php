
<div class ="hero">

<h1>Ver Clientes</h1>

<h2></h2>			
				<?php							

							$sql = "SELECT * FROM cliente";
							$result = mysqli_query($conecta, $sql); 

							
							while($consulta = mysqli_fetch_array($result)) { 
							
								$vid = $consulta['id'];
								
								
								
								echo "<a href='index.php?pagina=addeditacliente&id=$vid'  class='btn-get-started' >{$consulta['nome_cliente']}</a>";
								
								
							}

							mysqli_free_result($result);
						
				
				
				?>
				
</div>