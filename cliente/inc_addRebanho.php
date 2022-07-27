
<div class ="hero">

<h1>Cadastrar <br>Grupo</h1>

<form action="envia_rebanho.php" method="post" role="form" class="contactForm">


<?php		
					
					
					
					//include('config.php');
					
					$id = $_SESSION['usuario']['cliente_id'];

			

							$sql = "SELECT * FROM cliente where id = $id";
							$result = mysqli_query($conecta, $sql); 

							
							while($consulta = mysqli_fetch_array($result)) { 							
														
							echo "<div class=''>";
							echo "<input hidden value={$consulta['id']} name='id_cliente' id='id_admin'/>";							
							echo "</div>";						
														
							}

							mysqli_free_result($result);
							
							echo "<div class=''>";
							echo "<input hidden value='$id' name='cliente_id' id='cliente_id'/>";
							echo "</div>";
							
							echo "<div class='form-group'>";
							echo "<input type='nome' class='form-control' name = 'nomeRebanho' id='nomeRebanho' placeholder='Nome do grupo :' data-rule='required' data-msg='Por favor digite o nome !' />";
							echo "<div class='validation'></div>";
							echo "</div>";
							
							echo "<div class='form-group'>";
							echo "<input type='nome' class='form-control' name = 'descriRebanho' id='descriRebanho' placeholder='Descrição do grupo :' data-rule='required' data-msg='Por favor digite uma descrição !' />";
							echo "<div class='validation'></div>";
							echo "</div>";
						
				
				
				?>	
  				
				<button class="btn-get-started" ><a>Salvar</a></button>
				
				

				
              </form>
			  
</div>