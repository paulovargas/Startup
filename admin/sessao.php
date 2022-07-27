<?
		session_start();
		
		$id = $_SESSION['admin']['id'];
	
		header("location: index.php");
?>