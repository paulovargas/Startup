
<div class ="hero">

<h1>Editar <br>Administrador</h1>


<form action="edita_admin.php" method="post" role="form" class="contactForm">


<?php		
					
					
					
					//include('config.php');
					
					$id=$_GET['id'];

			

							$sql = "SELECT * FROM admin where id = $id";
							$result = mysqli_query($conecta, $sql); 

							
							while($consulta = mysqli_fetch_array($result)) { 
							
							
							echo "<div class=''>";
							echo "<input hidden value=$id name='id_admin' id='id_admin'/>";							
							echo "</div>";
							
							
							
							echo "<div class='form-group'>";
							echo "<input type='nome' class='form-control' name='{$consulta['nome']}' id='nome' placeholder='{$consulta['nome']}' data-rule='nome' data-msg='Por favor digite o nome !' />";
							echo "<div class='validation'></div>";
							echo "</div>";
							
							echo "<div class='form-group'>";
							echo "<input type='nome' class='form-control' name='{$consulta['cpf']}' id='nome' placeholder='{$consulta['cpf']}' data-rule='nome' data-msg='Por favor digite o cfp !' />";
							echo "<div class='validation'></div>";
							echo "</div>";
							
							
							echo "<div class='form-group'>";
							echo "<input type='nome' class='form-control' name='{$consulta['cargo']}' id='nome' placeholder='{$consulta['cargo']}' data-rule='nome' data-msg='Por favor digite o cargo !' />";
							echo "<div class='validation'></div>";
							echo "</div>";
							
							echo "<div class='form-group'>";
							echo "<input type='nome' class='form-control' name='email' id='nome' placeholder='{$consulta['email']}' data-rule='email' data-msg='Por favor digite um email valido!' />";
							echo "<div class='validation'></div>";
							echo "</div>";
							
							
							
							echo "<div class='form-group'>";
							echo "<input type='password' class='form-control' name='senha' id='nome' placeholder='Senha' data-rule='senha' data-msg='' />";
							echo "<div class='validation'></div>";
							echo "</div>";
							
							echo "<div class='form-group'>";
							echo "<input type='password' class='form-control' name='senha' id='nome' placeholder='Confirme a Senha' data-rule='senhaconfirma' data-msg='Senhas não conferem !' />";
							echo "<div class='validation'></div>";
							echo "</div>";
							
								
								
								
								
								
															
								
							}

							mysqli_free_result($result);
						
				
				
				?>	
  				
				<button class="btn-get-started" ><a>Salvar</a></button>
				
				

				
              </form>
</div>