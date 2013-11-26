<?php
session_start();

require_once("inc/funciones.php");
require_once('bd/consultas.php');

$user = cleanQuery($_POST["login_usu"]);
$pass = cleanQuery($_POST["login_pass"]);

$anyo = 365 * 24 * 60 * 60;
$time = time();

$guardar_user = encriptador($user,"5");
 
//CAMBIAR PARA CONSULTAR A LA BBDD
 
	if( ( $id = Login($user,$pass) ) > 0 ){
		//Siempre, seteamos la sesion
		
		$_SESSION['id'] = encriptador($id,"5");
		$_SESSION['usuario'] = $user;
		$_SESSION['usuario_time'] = $time;
		$extra = "usu_cuenta.php";
		
		//Si el usuario así lo ha deseado, seteamos Cookies
		if($_POST["login_recordar"]){
			setcookie('id', $id, time() + $anyo);
			setcookie('usuario', $guardar_user, time() + $anyo);
			setcookie('usuario_time', $time, time() + $anyo);
		}
	}
	else{
		//Cogemos la ultima parte de la URI solamente
		/******CAMBIAR A INCORRECTO -1(user no existe), O INCORRECTO 0(clave) *****/
		
		$extra = eliminarParametroURL(getFinalURI($_POST['pagina']),'incorrecto') . 'incorrecto='.$id;
	}
	
	$uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
	
	/* Redirecciona a una página diferente que se encuentra en el directorio actual */
	$host = $_SERVER['HTTP_HOST'];
	header("Location: http://$host$uri/$extra");
	exit;

	
?>