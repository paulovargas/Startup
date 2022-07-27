
<div class ="hero">

<h1>Adicionar <br>Cliente</h1>

<form action="envia_cliente.php" method="post" role="form" class="contactForm">


<?php		
							
								echo "<table>";
							
								echo "<th>";
								
								echo "<div class=''>";
								echo "<input hidden value='id' name='id_cliente' id='id_admin'/>";							
								echo "</div>";
								
								echo "<div class='form-group'>";
								echo "<input type='nome' class='form-control' value ='' name ='nome_cliente' placeholder='Nome' data-rule='nome' data-msg='Por favor digite o nome !' />";
								echo "<div class='validation'></div>";
								echo "</div>";
								
								echo "<div class='form-group'>";
								echo "<input type='nome' class='form-control' value ='' name ='endereco' placeholder='Endereco' data-rule='nome' data-msg='Por favor digite o nome !' />";
								echo "<div class='validation'></div>";
								echo "</div>";
								
								
								echo "<div class='form-group'>";
								echo "<input type='nome' class='form-control' value ='' name ='cidade' placeholder='Cidade' data-rule='nome' data-msg='Por favor digite o nome !' />";
								echo "<div class='validation'></div>";
								echo "</div>";
								
								echo "<div class='form-group'>";
								echo "<input type='nome' class='form-control' value ='' name ='estado' placeholder='Estado' data-rule='nome' data-msg='Por favor digite o nome !' />";
								echo "<div class='validation'></div>";
								echo "</div>";
								
								echo "<div class='form-group'>";
								echo "<input type='nome' class='form-control' value ='' name ='telefone' placeholder='Telefone' data-rule='nome' data-msg='Por favor digite o nome !' />";
								echo "<div class='validation'></div>";
								echo "</div>";
								
								echo "<div class='form-group'>";
								echo "<input type='nome' class='form-control' value ='' name ='email' placeholder='Email' data-rule='nome' data-msg='Por favor digite o nome !' />";
								echo "<div class='validation'></div>";
								echo "</div>";
								
								
								
								echo "<div class='form-group'>";
								echo "<input type='nome' class='form-control' value ='' name ='cpf_cnpj' placeholder='Cpf ou Cnpj' data-rule='nome' data-msg='Por favor digite o nome !' />";
								echo "<div class='validation'></div>";
								echo "</div>";
								
								echo "</th>";
								
								echo "<th>";
								
								echo "<div class='form-group'>";
								echo "<input type='nome' class='form-control' value ='' name ='incricao_est' placeholder='Inscrição Estadual' data-rule='nome' data-msg='Por favor digite o nome !' />";
								echo "<div class='validation'></div>";
								echo "</div>";
								
								$agora = date('d/m/Y');						
								
								echo "<div class='form-group'>";
								echo "<input type='nome' class='form-control'  value ='$agora' id='' placeholder='Inclusão : ' data-rule='nome' data-msg='Por favor digite o nome !' />";
								echo "<div class='validation'></div>";
								echo "</div>";
								
								
								
								echo "<div class='form-group'>";
								echo "<input type='nome' class='form-control' value ='' name ='num_usuarios' placeholder='Usuários : ' data-rule='nome' data-msg='Por favor digite o nome !' />";
								echo "<div class='validation'></div>";
								echo "</div>";
								
								echo "<div class='form-group'>";
								echo "<input type='nome' class='form-control' value ='' name ='servidor' placeholder='Servidor : ' data-rule='nome' data-msg='Por favor digite o nome !' />";
								echo "<div class='validation'></div>";
								echo "</div>";
								
								echo "<div class='form-group'>";
								echo "<input type='nome' class='form-control' value ='' name ='login' placeholder='Login : ' data-rule='nome' data-msg='Por favor digite o nome !' />";
								echo "<div class='validation'></div>";
								echo "</div>";
								
								echo "<div class='form-group'>";
								echo "<input type='nome' class='form-control' value ='' name ='senha' placeholder='Senha : ' data-rule='nome' data-msg='Por favor digite o nome !' />";
								echo "<div class='validation'></div>";
								echo "</div>";
									
								echo "<div class='form-group'>";
								echo "<input type='nome' class='form-control' value ='' name ='base' placeholder='Banco : ' data-rule='nome' data-msg='Por favor digite o nome !' />";
								echo "<div class='validation'></div>";
								echo "</div>";
								
								echo "</th>";
									
								echo "</table>";
															
								
							//}

							//mysqli_free_result($result);
						
				
				
				?>	
  				
				<button class="btn-get-started" ><a>Salvar</a></button>
				
				

				
              </form>
			  
</div>