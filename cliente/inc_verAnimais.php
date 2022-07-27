<div class ="hero">

<h1>Ver Animais</h1>

<?php							

							include("config_cliente.php");

                                                        //echo "<a class='btn-get-started' >$servidor_cliente - $base_cliente</a>";
								
                                                       
							$sql = "SELECT * FROM animais order by idanimal desc limit 20";
							
							$result = mysqli_query($conecta_cliente, $sql);							
									
							while($consulta = mysqli_fetch_array($result)) { 
							
								$vid = $consulta['idanimal'];
								
								
								
								echo "<a href='index.php?pagina=editaAnimal&idAnimal=$vid'  class='btn-get-started' >{$consulta['numero_brincos']} - {$consulta['sexo']}</a>";
								
								
							}

							mysqli_free_result($result);
						
				
				
				?>
				
</div>