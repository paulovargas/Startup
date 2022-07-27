<div class ="hero">

<h1>Adicionar Animal</h1>

<form action="" method="post" role="form" class="contactForm">

<div class="form-group">

	<input type="text" class="form-control" name="brinco" id="nome" placeholder="Brinco" data-rule="nome" data-msg="Por favor digite o nome !" />
	
</div>

<div class="form-group">
	
	<input type="text" class="form-control" name="UID" id="nome" placeholder="UID" data-rule="nome" data-msg="Por favor digite o nome !" />

</div>

<div class="form-group">

	<input type="text" class="form-control" name="brinco" id="nome" placeholder="Espécie" data-rule="nome" data-msg="Por favor digite o nome !" />

</div>

<div class="form-group">

<input type="date" class="form-control" name="data_nascimento" id="data_nascimento"  />

</div>

<div class="form-group">

	<input type="text" class="form-control" name="brinco" id="nome" placeholder="Status" data-rule="nome" data-msg="Por favor digite o nome !" />

</div>

<div class="validation"></div>

<div class="form-group">
	
	<input type="nome" class="form-control" name="nome" id="nome" placeholder="Raça" data-rule="nome" data-msg="Por favor digite o nome !" />

</div>

<div class="validation"></div>

<div class="form-group">

	<input type="nome" class="form-control" name="nome" id="nome" placeholder="Pelagem" data-rule="nome" data-msg="Por favor digite o nome !" />

</div>

<div class="validation"></div>

<div class="form-group">

	<input type="nome" class="form-control" name="nome" id="nome" placeholder="Peso" data-rule="nome" data-msg="Por favor digite o nome !" />

</div>

<div class="validation"></div>

<div class="form-group">

<?php

	echo "<div class='form-group'>";
							
							include("config_cliente.php");							
														
							
								$sql = "SELECT * FROM rebanho";
							
									$result = mysqli_query($conecta_cliente, $sql);							
							
										
										echo "<select class='form-control' name = 'rebanho_id' placeholder='$Cid' data-rule='' data-msg='' />";
							
										echo "<option value='$idGrupo' selected>Grupo : $nomeGrupo</option>";
										
										while($consulta = mysqli_fetch_array($result )){							
								
										
											echo "<option value = {$consulta['id']} id = 'rebanho_id'>{$consulta['nomeRebanho']}</option>";								
								
							}mysqli_free_result($result );
							
							
							echo "</select>";
							echo "<div class='validation'></div>";
							echo "</div>";	

?>

</div>

<div class="validation"></div>

<div class="form-group">

<?php

	echo "<div class='form-group'>";
							
							include("config_cliente.php");							
														
							
								$sql = "SELECT * FROM propriedade where cliente_id = 2";
							
									$result = mysqli_query($conecta_cliente, $sql);							
							
										
										echo "<select class='form-control' name = 'rebanho_id' placeholder='$Cid' data-rule='' data-msg='' />";
							
										echo "<option value='$idGrupo' selected>Propriedade : $nomeGrupo</option>";
										
										while($consulta = mysqli_fetch_array($result )){							
								
										
											echo "<option value = {$consulta['id']} id = 'rebanho_id'>{$consulta['nomePropriedade']}</option>";								
								
							}mysqli_free_result($result );
							
							
							echo "</select>";
							echo "<div class='validation'></div>";
							echo "</div>";	

?>

</div>

<div class="validation"></div>

<div class="form-group">

	<input type="text" class="form-control" name="nome" id="nome" placeholder="Descrição" data-rule="nome" data-msg="Por favor digite o nome !" />
	
</div>

<div class="validation"></div>

<div class="contactForm">

	<button type="submit"  class="btn-get-started" ><a>Salvar</a></button>

</div>

</form>

</div>