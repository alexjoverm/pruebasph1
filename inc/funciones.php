<?php

	//encripta y desencripta una cadena
	function encriptador($cadena, $clave) 
	{ 
		for($i=0; $i<strlen($cadena); $i++) 
			$cadena[$i] = $cadena[$i] ^ $clave;
			
		return $cadena;
	}
	
	//devuelve la ultima parte de la URI (inclusive parametros GET) (sin la / )
	function getFinalURI($string){
		$pos = strrpos($string, "/");
		$dev = "";
		
		if($pos !== false)
			$dev = substr($string, $pos+1);
		else{
			$dev = $string;
		}
		return $dev;
	}
	
	function eliminarParametroURL($url, $parametro) { 
	
		list($urlpart, $qspart) = array_pad(explode('?', $url), 2, '');
		parse_str($qspart, $qsvars);
		unset($qsvars[$parametro]);
		
		$nuevoqs = http_build_query($qsvars);
		
		return $urlpart . '?' . $nuevoqs; 
	}
?>