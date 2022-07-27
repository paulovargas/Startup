<nav class="clear">&nbsp;</nav>
<nav class="clear">&nbsp;</nav>
<nav class="clear">&nbsp;</nav>
<nav class="clear">&nbsp;</nav>
<nav class="clear">&nbsp;</nav>
<nav class="clear">&nbsp;</nav>
<nav class="clear">&nbsp;</nav>
<nav class="clear">&nbsp;</nav>
<nav class="clear">&nbsp;</nav>
<nav class="clear">&nbsp;</nav>
<nav class="clear">&nbsp;</nav>
<nav class="clear">&nbsp;</nav>
<nav class="clear">&nbsp;</nav>
<nav class="clear">&nbsp;</nav>

<div class ="hero">

<h1>Editar <br>Animal</h1>


<form action="edita_animal.php" method="post" role="form" class="contactForm">


<?php						
							
							$idAnimal = $_GET['idAnimal'];
                                                        
							echo "<div class='form-group'>";
							
							include("config_cliente.php");

							$sql = "SELECT * FROM animais JOIN rebanho ON animais.rebanho_id = rebanho.id JOIN propriedade ON animais.propriedade_id = propriedade.id where idanimal = 674";
							
                                                        $result = mysqli_query($conecta_cliente, $sql);	

							
								while($consulta = mysqli_fetch_array($result)){ 
							
							
											$especie = $consulta['especie'];
											$brincos = $consulta['numero_brincos'];
											$data_nascimento = $consulta['data_nascimento'];
											$status = $consulta['status'];
											$raca = $consulta['raca'];							
											$pelagem = $consulta['pelagem'];
											$sexo = $consulta['sexo'];							
											$peso = $consulta['peso'];
											$nomeGrupo = $consulta['nomeRebanho'];
											$idGrupo = $consulta['rebanho_id'];
											$nomePropriedade = $consulta['nomePropriedade'];
											$idPropriedade = $consulta['propriedade_id'];
											$descricao = $consulta['descricao'];
																		
							
									

											echo "<div class=''>";
											echo "<input hidden value={$consulta['idanimal']} name='id_animal' id='id_animal'/>";							
											echo "</div>";
								
											echo "<div class='form-group'>";
											echo "<input type='' readonly='true' class='form-control' value = '{$consulta['numero_brincos']}' name='numero_brincos' id='numero_brincos' placeholder='{$consulta['numero_brincos']}' data-rule='select' data-msg='Você não pode editar o brinco!'  />";
											echo "<div class='validation'></div>";
											echo "</div>";
											
											echo "<div class='form-group'>";
											echo "<input type='' class='form-control' value = '{$consulta['especie']}' name='especie' id='especie' placeholder='{$consulta['especie']}' data-rule='required' data-msg='Digite a espécie!' />";
											echo "<div class='validation'></div>";
											echo "</div>";															
											
											
											$data_nascimento = $consulta['data_nascimento'];
											
											$data = date('d/m/Y', strtotime($consulta['data_nascimento']));
														
											echo "<div class='form-group'>";
											echo "<input value='$data_nascimento' type='date' class='form-control' name='data_nascimento' id='data_nascimento' />";
											echo "<div class='validation'></div>";
											echo "</div>";
											
											echo "<div class='form-group'>";
											echo "<select class='form-control' name = 'sexo' />";
											echo "<option value='{$consulta['sexo']}' selected>Sexo : {$consulta['sexo']}</option>";
											echo "<option value='M'>Macho</option>";
											echo "<option value='F'>Fêmea</option>";
											echo "</select>";
											echo "<div class='validation'></div>";
											echo "</div>";
											echo "<div class='form-group'>";
											echo "</div>";
											
											echo "<div class='form-group'>";							
											echo "<select class='form-control' name = 'prenhez' />";							
											echo "<option value='{$consulta['prenhez']}' selected>Se fêmea - prenha ? {$consulta['prenhez']}</option>";
											echo "<option value='Sim'>Está prenha!</option>";			
											echo "<option value='Não'>Não está prenha</option>";							
											echo "</select>";
											echo "<div class='validation'></div>";
											echo "</div>";						
											echo "<div class='form-group'>";
											echo "</div>";
											
											echo "<select class='form-control' name = 'status' />";
											echo "<option value='{$consulta['status']}' selected>Status do animal : {$consulta['status']}</option>";							
											echo "<option value='Em campo'>Em campo</option>";
											echo "<option value='Vendido'>Vendido</option>";
											echo "<option value='Desaparecido'>Desaparecido</option>";
											echo "<option value='Morto'>Morto</option>";							
											echo "</select>";
											echo "<div class='validation'></div>";
											echo "</div>";						
											echo "<div class='form-group'>";
											echo "</div>";
											
											echo "<div class='form-group'>";
											echo "<input type='text' class='form-control' value = '{$consulta['raca']}' name='raca' id='pelagem' placeholder='{$consulta['raca']}' data-rule='required' data-msg='Digite a raça!' />";
											echo "<div class='validation'></div>";
											echo "</div>";
											
											echo "<div class='form-group'>";
											echo "<input type='text' class='form-control' value = '{$consulta['pelagem']}' name='pelagem' id='pelagem' placeholder='{$consulta['pelagem']}' data-rule='required' data-msg='Digite a pelagem!' />";
											echo "<div class='validation'></div>";
											echo "</div>";
											
											$peso_atual = "354"; // fazer consulta do ultimo peso registrado na tabela peso
											
											echo "<div class='form-group'>";
											echo "<input type='text' class='form-control' name='ultimo_peso' id='pelagem' placeholder=' Peso :  $peso_atual Kg'/> <a href='index.php?pagina=verEvolucaoAnimal&idAnimal=$idAnimal'>Ver engorde</a></li> ";
											echo "<div class='validation'></div>";
											echo "</div>";
											
											
											
											
											echo "<div class='form-group'>";
											echo "<input type='text' class='form-control' value='{$consulta['descricao']}' name='descricao' id='descricao' placeholder='{$consulta['descricao']}' data-rule='' data-msg=''/>";
											echo "<div class='validation'></div>";
											echo "</div>";
																	
																		
								
							}mysqli_free_result($result);
							
							echo "<div class='form-group'>";
							
							include("config_cliente.php");							
														
							
								$sql = "SELECT * FROM rebanho where cliente_id = $Cid";
							
									$result = mysqli_query($conecta_cliente, $sql);							
							
										
										echo "<select class='form-control' name = 'rebanho_id' placeholder='$Cid' data-rule='' data-msg='' />";
							
										echo "<option value='$idGrupo' selected>Grupo : $nomeGrupo</option>";
										
										while($consulta = mysqli_fetch_array($result )){							
								
										
											echo "<option value = {$consulta['id']} id = 'rebanho_id'>{$consulta['nomeRebanho']}</option>";								
								
							}mysqli_free_result($result );
							
							
							echo "</select>";
							echo "<div class='validation'></div>";
							echo "</div>";					
							
							echo "<div class='form-group'>";
							
							include("config_cliente.php");							
														
							
								$sql = "SELECT * FROM propriedade";
							
									$result_cliente = mysqli_query($conecta_cliente, $sql);							
							
										echo "<select class='form-control' name = 'propriedade_id' placeholder='$Cid' data-rule='' data-msg='' />";
										echo "<option value='$idPropriedade' selected>Propriedade : $nomePropriedade</option>";
							
										while($consulta = mysqli_fetch_array($result_cliente)){							
								
										
											echo "<option value = {$consulta['id']} id = 'id'>{$consulta['nomePropriedade']}</option>";								
								
							}mysqli_free_result($result_cliente);
							
							
							echo "</select>";
							echo "<div class='validation'></div>";
							echo "</div>";
							
							
							echo "</select>";
							echo "<div class='validation'></div>";
							echo "</div>";
							
							
							
									
								
								
									echo "</select>";
									echo "</td>";
							
							
							
													
							
										
				
				?>
				<button href="exclui_animal.php" class="btn-get-delete" ><a>Excluir</a></button><button class="btn-get-started" ><a>Salvar</a></button>
  							
              </form>
</div>	