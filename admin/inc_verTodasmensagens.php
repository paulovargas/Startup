
<div class ="hero">

<h1>Todas mensagens <br>recebidas do Site</h1>
				
				
				<?php							

							$sql = "SELECT * FROM mensagem order by id asc";
							$result = mysqli_query($conecta, $sql); 
							
							

							
							while($consulta = mysqli_fetch_array($result)) { 
							
								$vid = $consulta['id'];
								
															
								
								
								
								echo "<a href='index.php?pagina=lermensagem&id=$vid'  class='btn-get-started' >{$consulta['nome']} - {$consulta['titulo']}</a>";
                                echo "<br>";	
								
								
								
							}
							
							

							mysqli_free_result($result);
							
							
						
				
				
				?>					
</div>	