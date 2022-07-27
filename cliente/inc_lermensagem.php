
<div class ="hero">

<h1>Mensagem</h1>

<h2></h2>

<form action="marca_lida.php" method="post">				
				
				<?php							

							$id=$_GET['id'];
							
							$sql = "SELECT * FROM mensagem where id = $id";
							$result = mysqli_query($conecta, $sql); 

							
							while($consulta = mysqli_fetch_array($result)) { 
							
								$vid = $consulta['id'];
								
							echo "<div class=''>";
							echo "<input hidden value='$vid' name='id_mensagem'/>";
							
							echo "</div>";	
							
                                                        echo "<div class='form-group'>";
							echo "<input type='nome' class='form-control' name='{$consulta['nome']}' id='nome' placeholder='{$consulta['nome']}' data-rule='nome' data-msg='Por favor digite o nome !' />";
							echo "<div class='validation'></div>";
							echo "</div>";
							
							echo "<div class='form-group'>";
							echo "<input type='nome' class='form-control' name='{$consulta['email']}' id='nome' placeholder='{$consulta['email']}' data-rule='nome' data-msg='Por favor digite o nome !' />";
							echo "<div class='validation'></div>";
							echo "</div>";
							
							
							echo "<div class='form-group'>";
							echo "<input type='nome' class='form-control' name='{$consulta['titulo']}' id='nome' placeholder='{$consulta['titulo']}' data-rule='nome' data-msg='Por favor digite o nome !' />";
							echo "<div class='validation'></div>";
							echo "</div>";
							
							echo "<div class='form-group'>";
							echo "<textarea class='form-control' name='{$consulta['mensagem']}' rows='5' id='nome' placeholder='{$consulta['mensagem']}' data-rule='nome' data-msg='Por favor digite o nome !' ></textarea>";
							echo "<div class='validation'></div>";
							echo "</div>";
								
								
							}

							mysqli_free_result($result);

				echo "<button type='submit' class='btn-get-started'><a>Mensagem Lida</a></button>	";	
				
				
				?>
 </form>
</div>