
<div class ="hero">



<?php							

							
							$idAnimal = $_GET['idAnimal'];
							
							
							include('config.php');
							
							$sql = "SELECT * FROM animais where idanimal = $idAnimal";
							
							$result_cliente = mysqli_query($conecta_cliente, $sql);							
									
							while($consulta = mysqli_fetch_array($result_cliente)) { 
							
								$vid = $consulta['idanimal'];
								
								
								echo "<h1>Evolução do Animal brinco : {$consulta['numero_brincos']}</h1>";
								
								//echo "<a href='index.php?pagina=editaAnimal&idAnimal=$vid'  class='btn-get-started' >{$consulta['numero_brincos']} - {$consulta['sexo']}</a>";
								
								
							}

							mysqli_free_result($result_cliente);
						
				
				
				?>
				
</div>