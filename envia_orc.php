<?php
// Se não postar nada
if ( ! isset( $_POST ) || empty( $_POST ) ) {
	
	// Mensagem para o usuário
	echo 'Nada a publicar!';
	
	// Mata o script
	exit;
}

	$data = date("Y/m/d");

// Verifica campos em branco
foreach ( $_POST as $chave => $valor ) {
	// Cria as variáveis dinamicamente
	$$chave = $valor;
	
	// Verifica campos em branco
	if ( empty( $valor ) ) {
		// Mensagem para o usuário
		echo 'Existem campos em branco.';
		
		// Mata o script
		exit;
	}
}

// Verifica se todas as variáveis estão definidas
if (  
	   ! isset($nome	)
	|| ! isset($email   )
	|| ! isset($titulo)
	|| ! isset($mensagem)
	   
) {
	// Mensagem para o usuário
	echo "Existem variáveis não definidas.<br>";
	echo "<br>$nome<br>";
	echo "<br>$email<br>";
	echo "<br>$titulo<br>";
	echo "<br>$mensagem<br>";
	
	// Mata o script
	exit;
}

include('pdo.php');
	

// Prepara o envio
$prepara = $conexao_pdo->prepare("
	INSERT INTO `cataboi`.`mensagem` (
		`nome`,
		`email`,
		`titulo`,		
		`mensagem`
	) 
	VALUES
	( ?, ?, ?, ?)
");

// Envia
$verifica = $prepara->execute(
	array(
		$nome,
		$email,		
		$titulo,
		$mensagem,
		)
);

if ( $verifica ) {
	
	header("location: index.html");
	
	// Mata o script
	exit;
} else {
	echo 'Erro ao enviar dados.';
	
	// Mata o script
	exit;
}

?>