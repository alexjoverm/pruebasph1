<?php
	session_start();
	
	$user = $_SESSION['usuario'];
	
	if(!isset($user)){
		$uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
		
		/* Redirecciona a una p�gina diferente que se encuentra en el directorio actual */
		$host = $_SERVER['HTTP_HOST'];
		header("Location: http://$host$uri/error.php");
	}
?>