<div class ="hero">

<h1>Editar <br>Propriedade</h1>

<form action="edita_propriedade.php" method="post" role="form" class="contactForm">


<?php		
					
					
					
					include("config_cliente.php");
					
					$id = $_GET['propriedade_id'];
					
						//include("config_cliente.php");
						
							$sql = "SELECT * FROM propriedade where id = $id";
								
								$result_cliente = mysqli_query($conecta_cliente, $sql);
							
								while($consulta = mysqli_fetch_array($result_cliente)) { 							
														
								echo "<div class=''>";
								echo "<input hidden value={$consulta['id']} name='Pid' />";							
								echo "</div>";
								
								/* echo "<div class=''>";
								echo "<input hidden value={$consulta['cliente_id']} name='cliente_id' />";							
								echo "</div>";
								 */
								echo "<div class='form-group'>";
								echo "<input type='text' class='form-control' name = 'nomePropriedade' value = '{$consulta['nomePropriedade']}' id='nomePropriedade' placeholder='Nome da Propriedade : {$consulta['nomePropriedade']}' data-rule='required' data-msg='Por favor digite o nome !' />";
								echo "<div class='validation'></div>";
								echo "</div>";

								echo "<div class='form-group'>";
								echo "<input type='text' class='form-control' name = 'localidade' value = '{$consulta['localidade']}' id='localidade' placeholder='Localidade : {$consulta['localidade']}' data-rule='required' data-msg='Por favor digite a localidade !' />";
								echo "<div class='validation'></div>";
								echo "</div>";

								
							}						
						
						mysqli_free_result($result_cliente);
				
				
				?>	
  				
				<button class="btn-get-delete" ><a>Excluir</a></button><button class="btn-get-started" ><a>Salvar</a></button>
				
				

				
              </form>
			  
</div>