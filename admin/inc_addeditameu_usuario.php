<div class ="hero">

<h1>Editar <br>Meu Perfil <br> Administrador</h1>

<form action="edita_admin.php" method="post" role="form" class="contactForm">

<?php		
					
					
					
					//include('config.php');
					
					$id = $_SESSION['admin']['id'];

			

							$sql = "SELECT * FROM admin where id = $id";
							$result = mysqli_query($conecta, $sql); 

							
							while($consulta = mysqli_fetch_array($result)) { 
							
							
							
							echo "<div class=''>";
							echo "<input hidden value={$consulta['id']} name='id_admin' id='id_admin'/>";							
							echo "</div>";
							
							echo "<div class='form-group'>";
							echo "<input type='name' class='form-control' name='nome' id='nome' value='{$consulta['nome']}' placeholder='{$consulta['nome']}' data-rule='nome' data-msg='Por favor digite o nome !' />";
							echo "<div class='validation'></div>";
							echo "</div>";
							
							echo "<div class='form-group'>";
							echo "<input type='' class='form-control' name='cpf' id='cpf' value='{$consulta['cpf']}' placeholder='{$consulta['cpf']}' data-rule='nome' data-msg='Por favor digite o nome !' />";
							echo "<div class='validation'></div>";
							echo "</div>";
							
							
							echo "<div class='form-group'>";
							echo "<input type='' class='form-control' name='cargo' id='cargo' value='{$consulta['cargo']}' placeholder='{$consulta['cargo']}' data-rule='nome' data-msg='Por favor digite o nome !' />";
							echo "<div class='validation'></div>";
							echo "</div>";
							
							echo "<div class='form-group'>";
							echo "<input type='' class='form-control' name='email' id='email' value='{$consulta['email']}' placeholder='{$consulta['email']}' data-rule='email' data-msg='Por favor digite um email valido!' />";
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
							
								
								
								
								
								
															
								
							}

							mysqli_free_result($result);
						
				
				
				?>	
  				
				<button type="submit" class="btn-get-started" ><a>Salvar</a></button>
				
				

				
              </form>
</div>