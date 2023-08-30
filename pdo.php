<?php
/* Variáveis PDO */
$base_dados = 'cataboi';
$usuario_bd = 'cataboi_add1';
$senha_bd   = '';
$host_db    = 'mysql.cataboi.com';
$conexao_pdo = null;

 
/* Concatenação das variáveis para detalhes da classe PDO */
$detalhes_pdo  = 'mysql:host=' . $host_db;
$detalhes_pdo .= ';dbname='. $base_dados;
 
// Tenta conectar
try {
    // Cria a conexão PDO com a base de dados
    $conexao_pdo = new PDO($detalhes_pdo, $usuario_bd, $senha_bd);
} catch (PDOException $e) {
    // Se der algo errado, mostra o erro PDO
    print "Erro: " . $e->getMessage() . "<br/>";
    
    // Mata o script
    die();
}
?>