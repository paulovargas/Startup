 <?php

	


$dsn = 'mysql:host=mysql08-farm76.kinghost.net;dbname=sistemabuffalo;charset=utf8';
$username = 'sistemabuf_add1';
$password = 'nfe992834864680';
 
$db = new PDO($dsn, $username, $password);

if(!$db){
	echo "erro";
}


/*
$busca = 'SELECT * FROM categorias ';

$result = $db->query($busca, PDO::FETCH_ASSOC) or die("erro");

foreach ($result as $row) {
    echo "{$row['titulo']}n";
}*/

?> 