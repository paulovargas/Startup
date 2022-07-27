
<div class ="hero">

<h1>Editar <br>Cliente</h1>

<form action="edita_cliente.php" method="post" role="form" class="contactForm">


<?php		
					
					
					
					//include('config.php');
					
					$id=$_GET['id'];

			

							$sql = "SELECT * FROM cliente where id = $id";
							$result = mysqli_query($conecta, $sql); 

							
							while($consulta = mysqli_fetch_array($result)) { 
							
							echo "<table>";
							
							echo "<th>";
							
							echo "<div class=''>";
							echo "<input hidden value={$consulta['id']} name='id_cliente' id='id_admin'/>";							
							echo "</div>";
							
							echo "<div class='form-group'>";
							echo "<input type='nome' class='form-control' value ='{$consulta['nome_cliente']}' id='nome_cliente' placeholder='{$consulta['nome_cliente']}' data-rule='nome' data-msg='Por favor digite o nome !' />";
							echo "<div class='validation'></div>";
							echo "</div>";
							
							echo "<div class='form-group'>";
							echo "<input type='nome' class='form-control' value ='{$consulta['endereco']}' id='endereco' placeholder='{$consulta['endereco']}' data-rule='nome' data-msg='Por favor digite o nome !' />";
							echo "<div class='validation'></div>";
							echo "</div>";
							
							
							echo "<div class='form-group'>";
							echo "<input type='nome' class='form-control' value ='{$consulta['cidade']}' id='cidade' placeholder='{$consulta['cidade']}' data-rule='nome' data-msg='Por favor digite o nome !' />";
							echo "<div class='validation'></div>";
							echo "</div>";
							
							echo "<div class='form-group'>";
							echo "<input type='nome' class='form-control' value ='{$consulta['estado']}' id='estado' placeholder='{$consulta['estado']}' data-rule='nome' data-msg='Por favor digite o nome !' />";
							echo "<div class='validation'></div>";
							echo "</div>";
							
							echo "<div class='form-group'>";
							echo "<input type='nome' class='form-control' value ='{$consulta['telefone']}' id='telefone' placeholder='{$consulta['telefone']}' data-rule='nome' data-msg='Por favor digite o nome !' />";
							echo "<div class='validation'></div>";
							echo "</div>";
							
							echo "<div class='form-group'>";
							echo "<input type='nome' class='form-control' value ='{$consulta['email']}' id='email' placeholder='{$consulta['email']}' data-rule='nome' data-msg='Por favor digite o nome !' />";
							echo "<div class='validation'></div>";
							echo "</div>";
							
							
							
							echo "<div class='form-group'>";
							echo "<input type='nome' class='form-control' value ='{$consulta['cpf_cnpj']}' id='cpf_cnpj' placeholder='{$consulta['cpf_cnpj']}' data-rule='nome' data-msg='Por favor digite o nome !' />";
							echo "<div class='validation'></div>";
							echo "</div>";
							
							echo "</th>";
							
							echo "<th>";
							
							echo "<div class='form-group'>";
							echo "<input type='nome' class='form-control' value ='{$consulta['inscricao_est']}' id='incricao_est' placeholder='{$consulta['inscricao_est']}' data-rule='nome' data-msg='Por favor digite o nome !' />";
							echo "<div class='validation'></div>";
							echo "</div>";
							
							
							
							echo "<div class='form-group'>";
							echo "<input type='nome' class='form-control'  value ='{$consulta['dta_inclu']}' id='' placeholder='Inclusão : {$consulta['dta_inclu']}' data-rule='nome' data-msg='Por favor digite o nome !' />";
							echo "<div class='validation'></div>";
							echo "</div>";
							
							
							
							echo "<div class='form-group'>";
							echo "<input type='nome' class='form-control' value ='{$consulta['num_usuarios']}' id='num_usuarios' placeholder='Usuários : {$consulta['num_usuarios']}' data-rule='nome' data-msg='Por favor digite o nome !' />";
							echo "<div class='validation'></div>";
							echo "</div>";
							
							echo "<div class='form-group'>";
							echo "<input type='nome' class='form-control' value ='{$consulta['servidor']}' id='servidor' placeholder='Servidor : {$consulta['servidor']}' data-rule='nome' data-msg='Por favor digite o nome !' />";
							echo "<div class='validation'></div>";
							echo "</div>";
							
							echo "<div class='form-group'>";
							echo "<input type='nome' class='form-control' value ='{$consulta['login']}' id='login' placeholder='Login : {$consulta['login']}' data-rule='nome' data-msg='Por favor digite o nome !' />";
							echo "<div class='validation'></div>";
							echo "</div>";
							
							echo "<div class='form-group'>";
							echo "<input type='nome' class='form-control' value ='{$consulta['senha']}' id='senha' placeholder='Senha : {$consulta['senha']}' data-rule='nome' data-msg='Por favor digite o nome !' />";
							echo "<div class='validation'></div>";
							echo "</div>";
								
							echo "<div class='form-group'>";
							echo "<input type='nome' class='form-control' value ='{$consulta['base']}' id='base' placeholder='Banco : {$consulta['base']}' data-rule='nome' data-msg='Por favor digite o nome !' />";
							echo "<div class='validation'></div>";
							echo "</div>";
							
							echo "</th>";
								
							echo "</table>";
															
								
							}

							mysqli_free_result($result);
						
				
				
				?>	
  				
				<button class="btn-get-started" ><a>Salvar</a></button>
				
				

				
              </form>
			  
</div>