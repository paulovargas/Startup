
<div class ="hero">

<h1>Cadastrar <br>Propriedade</h1>

<form action="envia_propriedade.php" method="post" role="form" class="contactForm">


<?php		
					
					
					
					//include('config.php');
					
					$id = $_SESSION['usuario']['cliente_id'];
														
														
							echo "<div class='form-group'>";
							echo "<input hidden value='$id' name = 'cliente_id'/>";							
							echo "</div>";						
							
							echo "<div class='form-group'>";
							echo "<input type='nome' class='form-control' name = 'nomePropriedade' id='nomePropriedade' placeholder='Nome da Propriedade :' data-rule='required' data-msg='Por favor digite o nome !' />";
							echo "<div class='validation'></div>";
							echo "</div>";
							
							echo "<div class='form-group'>";
							echo "<input type='nome' class='form-control' name = 'localidade' id='localidade' placeholder='Localidade :' data-rule='required' data-msg='Por favor digite uma descrição !' />";
							echo "<div class='validation'></div>";
							echo "</div>";
						
				
				
				?>	
  				
				<button class="btn-get-started" ><a>Salvar</a></button>
				
				

				
              </form>
			  
</div>