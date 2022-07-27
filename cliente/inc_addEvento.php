<div class ="hero">

<h1>Cadastrar <br>Evento</h1>


<form action="envia_Evento.php" method="post" role="form" class="contactForm">


<?php						
							echo "<div class='form-group'>";
							
							include("config_cliente.php");							
														
							
								$sql = "SELECT * FROM rebanho";
							
									$result = mysqli_query($conecta_cliente, $sql);							
							
										
										echo "<select class='form-control' name = 'rebanho_id' placeholder='$Cid' data-rule='' data-msg='' />";
							
										echo "<option value='$idGrupo' selected>Rebanho : $nomeGrupo</option>";
										
										while($consulta = mysqli_fetch_array($result )){							
								
										
											echo "<option value = {$consulta['id']} id = 'rebanho_id'>{$consulta['nomeRebanho']}</option>";								
								
							}mysqli_free_result($result );
							
							
							echo "</select>";
							echo "<div class='validation'></div>";
							echo "</div>";	
							
							echo "<div class='form-group'>";
							echo "<input type='text' class='form-control' name='nome' id='nome' placeholder='Evento' data-rule='required' data-msg='Por favor digite o nome !' />";
							echo "<div class='validation'></div>";
							echo "</div>";
							
							echo "<div class='form-group'>";
							echo "<input type='text' class='form-control' name='local' id='nome' placeholder='Local' data-rule='required' data-msg='Por favor digite o local !' />";
							echo "<div class='validation'></div>";
							echo "</div>";
							
							$data_hoje = date('Y/m/d', strtotime('today'));
							
							echo "<div class='form-group'>";
							echo "<input value='$data_hoje' type='date' class='form-control' name='data_evento' id='data_evento' />";
							echo "<div class='validation'></div>";
							echo "</div>";
							
							echo "<div class='form-group'>";
							echo "<input type='text' class='form-control' name='descri' id='descri' placeholder='Descrição' data-rule='required' data-msg='Por favor digite uma descrição !' />";
							echo "<div class='validation'></div>";
							echo "</div>";
							
							echo "<div class='form-group'>";
							echo "<input type='text' class='form-control' name='obser' id='obser' placeholder='Observações' data-rule='' data-msg='' />";
							echo "<div class='validation'></div>";
							echo "</div>";
							
									
				
				?>	
  				
				<button class="btn-get-started" ><a>Salvar</a></button>
				
				

				
              </form>
</div>