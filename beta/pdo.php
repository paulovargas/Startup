<?php
/* Variáveis PDO */
$base_dados = 'sistemabuffalo';
$usuario_bd = 'sistemabuf_add1';
$senha_bd   = 'nfe992834864680';
$host_db    = 'mysql08-farm76.kinghost.net';
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