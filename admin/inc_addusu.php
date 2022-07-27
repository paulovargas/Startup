<div class ="hero">

<h1>Cadastrar <br>Usuário</h1>


<form action="envia_usu.php" method="post" role="form" class="contactForm">



<?php
							echo "<div class='form-group'>";
							
							//include("config_cliente.php");							
														
							
								$sql = "SELECT * FROM cliente";
							
									$result = mysqli_query($conecta, $sql);							
							
										
										echo "<select class='form-control' name ='cliente_id' placeholder='Cliente' data-rule='' data-msg='' />";
							
										echo "<option value='' selected>Cliente</option>";
										
										while($consulta = mysqli_fetch_array($result )){							
								
										
											echo "<option value = {$consulta['id']} id ='cliente_id'>{$consulta['nome_cliente']}</option>";								
								
							}mysqli_free_result($result );
							
							
							echo "</select>";
							echo "<div class='validation'></div>";
							echo "</div>";						
							echo "<div class='form-group'>";
							echo "<input type='nome' class='form-control' name='nome' id='nome' placeholder='Nome' data-rule='required' data-msg='Por favor digite o nome !' />";
							echo "<div class='validation'></div>";
							echo "</div>";				
							
							echo "<div class='form-group'>";
							echo "<input type='nome' class='form-control' name='email' id='email' placeholder='Email' data-rule='email' data-msg='Por favor digite um email valido!' />";
							echo "<div class='validation'></div>";
							echo "</div>";						
							
							echo "<div class='form-group'>";
							echo "<input type='password' class='form-control' name='senha' id='senha' placeholder='Senha' data-rule='required' data-msg='Digite sua Senha!' />";
							echo "<div class='validation'></div>";
							echo "</div>";
							
							echo "<div class='form-group'>";
							echo "<input type='password' class='form-control' name='' id='senhaconfirma' placeholder='Confirme a Senha' data-rule='senhaconfirma' data-msg='Senhas não conferem !' />";
							echo "<div class='validation'></div>";
							echo "</div>";			
				
				?>	
  				
				<button class="btn-get-started" ><a>Salvar</a></button>
				
				

				
              </form>
</div>