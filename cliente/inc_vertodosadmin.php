
<div class ="hero">

<h1>Ver  <br>Administradores</h1>
				
				
				<?php							

							$sql = "SELECT * FROM admin";
							$result = mysqli_query($conecta, $sql); 
							
							

							
							while($consulta = mysqli_fetch_array($result)) { 
							
								$vid = $consulta['id'];
								
															
								
								
								if($consulta['lida'] != 1)
								{
								echo "<a href='index.php?pagina=veradmin&id=$vid'  class='btn-get-started' >{$consulta['nome']}</a>";
                                echo "<br>";
								$retorno = +1;	
								}
								
								
							}
							if($retorno == 0)
								{
								echo "<h2>Você não tem novas mensagens!</h2>";
                                                                
								}
							

							mysqli_free_result($result);
							
							
						
				
				
				?>					
</div>	