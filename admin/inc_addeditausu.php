
<div class ="hero">

<h1>Editar <br>Usuário</h1>


<form action="edita_usu.php" method="post" role="form" class="contactForm">


<?php		
					
					
					
					//include('config.php');
					
					$id = $_GET['id'];

					
					
					
					$sql = "SELECT * FROM usuario where id = $id";
					$result = mysqli_query($conecta, $sql); 
					
					
					while($consulta = mysqli_fetch_array($result)){

															
							echo "<div class='form-group'>";
							echo "<input type='nome' class='form-control' name='nome_usu' id='nome' value ='{$consulta['nome']}' placeholder='{$consulta['nome']}' data-rule='nome' data-msg='Por favor digite o nome !' />";
							echo "<div class='validation'></div>";
							echo "</div>";	
							
							echo "<div class=''>";
							echo "<input hidden value = '{$consulta['id']}' name='id_usu' id='id_usu'/>";							
							echo "</div>";																					
							
							echo "<div class='form-group'>";
							echo "<input type='nome' class='form-control' name='email' id='email' value ='{$consulta['email']}' placeholder='{$consulta['email']}' data-rule='email' data-msg='Por favor digite um email valido!' />";
							echo "<div class='validation'></div>";
							echo "</div>";							
							
							echo "<div class='form-group'>";
							echo "<input type='password' class='form-control' name='senha' id='senha' placeholder='Senha' data-rule='senha' data-msg='' />";
							echo "<div class='validation'></div>";
							echo "</div>";
							
							echo "<div class='form-group'>";
							echo "<input type='password' class='form-control' name='senha' id='senha' placeholder='Confirme a Senha' data-rule='senhaconfirma' data-msg='Senhas não conferem !' />";
							echo "<div class='validation'></div>";
							echo "</div>";															
								
							}

							mysqli_free_result($result);
						
				
				
				?>	
  				
				<button class="btn-get-started" ><a>Salvar</a></button>
				
				

				
              </form>
</div>