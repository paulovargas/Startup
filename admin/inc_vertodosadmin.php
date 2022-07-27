
<h1>Ver  <br>Administradores</h1>
				
<?php

$sql = "SELECT * FROM admin";

$result = mysqli_query($conecta, $sql);

while($consulta = mysqli_fetch_array($result))
{
	$vid = $consulta['id'];
	
	echo "<a href='index.php?pagina=veradmin&id=$vid'  class='btn-get-started' >{$consulta['nome']}</a>";
	
	echo "<br>";
		
		
		
		
}

mysqli_free_result($result);

?>					