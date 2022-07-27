<?php

// Informações para conexão
$host = 'mysql08-farm76.kinghost.net';
$usuario = 'sistemabuf_add1';
$senha = 'nfe992834864680';
$banco = 'sistemabuffalo';
$dsn = "mysql:host={$host};port=3306;dbname={$banco}";

try 
{
    // Conectando
    $pdo = new PDO($dsn, $usuario, $senha);
} 
catch (PDOException $e) 
{
    // Se ocorrer algum erro na conexão
    die($e->getMessage());
}