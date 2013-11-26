<?php
session_start();
session_destroy();

setcookie(usuario,"",time()-7200);
setcookie(usuario_time,"",time()-7200);

/* Redirecciona a una página diferente que se encuentra en el directorio actual */
	$host = $_SERVER['HTTP_HOST'];
	$uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
	

	header("Location: http://$host$uri/index.php");
	exit;

?>