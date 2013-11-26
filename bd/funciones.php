<?php
	function abrirBD()
	{
		$db_host="mysql.hostinger.es"; 
		$db_usuario="u766873817_ph1"; 
		$db_password="pruebasph1"; 
		$db_nombre="u766873817_ph1";
		
		//abrimos conexion con base de datos
		$con = @mysqli_connect($db_host, $db_usuario, $db_password, $db_nombre) or die(mysqli_error());  
		
		//cambiamos la codificacion de la base de datos a utf8
		@mysqli_set_charset($con,"utf8");

		return $con;
	}
	
	function cerrarBD($con)
	{
		//cerramos la conexion a la base de datos
		@mysqli_close($con);
	}
	
	function liberarMem($res){
		@mysqli_free_result($res);
	}
	
	//PARA PROTEGER SQL INJECT
	function cleanQuery($string)
	{
		if(get_magic_quotes_gpc())  
			$string = @mysqli_real_escape_string($string);
        
		return $string;
	}
	
?>