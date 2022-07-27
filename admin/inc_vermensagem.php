
<h1>Últimas mensagens <br>recebidas do Site</h1>

<?php

$mensagens = 0;

$sql = "SELECT * FROM mensagem";

$result = mysqli_query($conecta, $sql);

while($consulta = mysqli_fetch_array($result))
{
	$vid = $consulta['id'];
	
	if($consulta['lida'] != 1)
	{
		echo "<a href='index.php?pagina=lermensagem&id=$vid'  class='btn-get-started' >{$consulta['nome']} - {$consulta['titulo']}</a>";
		$mensagens = +1;
		
		}
		
}

if($mensagens == 0)
{
	echo "<h2>Você não tem novas mensagens!</h2>";
	
	}

	mysqli_free_result($result);
	
?>	