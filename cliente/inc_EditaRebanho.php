<div class ="hero">

<h1>Editar <br>Grupo</h1>

<form action="edita_rebanho.php" method="post" role="form" class="contactForm">


<?php		
					
					
					
					include("config_cliente.php");
					
					$id = $_GET['rebanho_id'];					
						
						
							$sql = "SELECT * FROM rebanho where id = $id";
								
								$result_cliente = mysqli_query($conecta_cliente, $sql);
							
								while($consulta = mysqli_fetch_array($result_cliente)) { 							
														
								echo "<div class=''>";
								echo "<input hidden value={$consulta['id']} name='Rid' />";							
								echo "</div>";
								
								echo "<div class=''>";
								echo "<input hidden value={$consulta['cliente_id']} name='cliente_id' />";							
								echo "</div>";
								
								echo "<div class='form-group'>";
								echo "<input type='text' class='form-control' name = 'nomeRebanho' value = '{$consulta['nomeRebanho']}' id='nomeRebanho' placeholder='Nome do grupo : {$consulta['nomeRebanho']}' data-rule='required' data-msg='Por favor digite o nome !' />";
								echo "<div class='validation'></div>";
								echo "</div>";
								
								echo "<div class='form-group'>";
								echo "<input type='text' class='form-control' name = 'descriRebanho' value = '{$consulta['descriRebanho']}' id='descriRebanho' placeholder='Descrição do grupo : {$consulta['descriRebanho']}' data-rule='required' data-msg='Por favor digite uma descrição !' />";
								echo "<div class='validation'></div>";
								echo "</div>";								
								

								
							}						
						
						mysqli_free_result($result_cliente);
				
				
				?>	
  				
				<button class="btn-get-delete" ><a>Excluir</a></button><button class="btn-get-started" ><a>Salvar</a></button>
				
				

				
              </form>
			  
</div>