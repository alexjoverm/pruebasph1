<?php

	require_once('funciones.php');

	

	function selectPaises()

	{	

		//String a devolver

		$string='';

		

		//Nos conectamos y preparamos el sql

		$con = abrirBD();

		$sql = 'SELECT IdPais, Nombre FROM Pais p';

		$res = @mysqli_query($con, $sql);

		

		//Creamos la cadena a devolver

		if(@mysqli_num_rows($res) > 0)

			while($row = @mysqli_fetch_assoc($res))

				$string .= '<option value='.$row['IdPais'].'>'. $row['Nombre'] .'</option>';

		else

			$string .= 'No hay paises';



		//Liberamos memoria y cerramos

		liberarMem($res);

		cerrarBD($con);

		

		return $string;

	}

	

	function selectFoto($idFoto){

		

		$con = abrirBD();

		

		//Consultamos albumes de ese usuario

		$sql = "SELECT * FROM Foto f WHERE f.IdFoto = $idFoto";

		$res = @mysqli_query($con, $sql);

		$row = @mysqli_fetch_assoc($res);

		

		//Liberamos memoria y cerramos

		liberarMem($res);

		cerrarBD($con);

		

		return $row;

	

	}

	

	function Login($usu,$pass)

	{	

		//Devolvemos -1 si el usuario no existe, 0 si la pass es incorrecta, o 1 si todo es correcto

		$devolver=-2;

		

		$con = abrirBD();

		

		//Limpiamos parametros

		

		//Recogemos usuario

		$sql = "SELECT IdUsuario FROM Usuario u WHERE u.NomUsuario = \"$usu\""; 

		$res = @mysqli_query($con, $sql);

		

		//Si el usuario existe

		if(@mysqli_num_rows($res) > 0){

			//Recogemos su id

			$row = @mysqli_fetch_assoc($res);

			$idUsu = $row['IdUsuario'];

			

			//Consultamos contraseña

			$sql = "SELECT 1 FROM Usuario u WHERE u.IdUsuario = $idUsu and u.Clave = SHA1('$pass');"; 

			$res = @mysqli_query($con, $sql);

			

			//Si es correcta la contraseña

			if(@mysqli_num_rows($res) > 0)

				$devolver= 1;

			else

				$devolver= 0;

		}

		else

			$devolver= -1;



		//Liberamos memoria y cerramos

		liberarMem($res);

		cerrarBD($con);

		

		return $devolver;

	}
	

	function crearPaginador($pagina,$total_paginas)

	{

		if($pagina < 1 || $pagina > $total_paginas){

			echo '<h3 class="incorrecto"> La pagina introducida esta fuera del rango </h3>';

			return 0;

		}



		$uri = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

		$patron = '/pagina=[0-9]+/i';



		$clase = ''; $pagina_aux='';

		

		$cont = 0;

		$max_paginas = 5; //IMPORTANTE, debe ser IMPAR para que funcione bien

		$semilla_izq = $semilla_der = $pagina;

		$paginas_lado = floor($max_paginas/2);

		$esta_en_uri = false; //para saber si reemplazar o añadir la variable pagina a la url



		if(strpos($uri,"pagina=") !== false)

			$esta_en_uri = true;



	  //Haremos un contador con <<Anterior, 5 paginas, Siguiente>>



		//Limite izquierdo

		while($cont < $paginas_lado && $semilla_izq > 1){

			$semilla_izq--;

			$cont++;

		}



		$cont = 0;



		//Limite derecho

		while($cont < $paginas_lado && $semilla_der < $total_paginas){

			$semilla_der++;

			$cont++;

		}

		

		echo '<div id="paginador"><ul>'; //Comenzamos lista



			//Boton ANTERIOR

			if($pagina == 1)

				echo '<li class="elem_desactivado">&lt;&lt; Anterior</li>';

			else{

				if($esta_en_uri)

					$pagina_aux = preg_replace($patron,'pagina='.($pagina-1), $uri);

				else

					$pagina_aux = $uri."&pagina=".($pagina-1);



				echo '<li><a href="'.$pagina_aux.'">&lt;&lt; Anterior</a></li>';

			}



			



			//Si hay paginas antes, mostramos puntos suspensivos

			if($semilla_izq > 1)

				echo '<li class="puntos_susp">...</li>';





			//PAGINAS

			for($i = $semilla_izq; $i <= $semilla_der; $i++){

				if($esta_en_uri)

					$pagina_aux = preg_replace($patron,'pagina='.$i, $uri);

				else

					$pagina_aux = $uri."&pagina=".$i;



				if($i == $pagina)

					echo '<li class="pag_actual">'.$i.'</li>';

				else

					echo '<li><a href="'.$pagina_aux.'">'.$i.'</a></li>';

			}





			$clase=''; $pagina_aux='';//limpiamos variables



			//Si hay paginas despues, puntos suspensivos

			if($semilla_der < $total_paginas)

				echo '<li class="puntos_susp">...</li>';



			//Boton SIGUIENTE

			if($pagina == $total_paginas)

				echo '<li class="elem_desactivado">Siguiente &gt;&gt;</li>';

			else{

				if($esta_en_uri)

					$pagina_aux = preg_replace($patron,'pagina='.($pagina+1), $uri);

				else

					$pagina_aux = $uri.'&pagina='.($pagina+1);



				echo '<li><a href="'.$pagina_aux.'">Siguiente &gt;&gt;</a></li>';

			}



		echo '</ul></div>'; //Acabamos lista

	}

	

	function fotosEnAlbum($idAlbum){

	

	//String a devolver

		$string= '';

		

		$con = abrirBD();

		

		//Consultamos albumes de ese usuario

		$sql = "SELECT COUNT(*) AS cont FROM Foto f GROUP BY f.Album HAVING f.Album = $idAlbum";

		$res = @mysqli_query($con, $sql);

		$row = @mysqli_fetch_assoc($res);

		$string = $row['cont'];

		

		//Liberamos memoria y cerramos

		liberarMem($res);

		cerrarBD($con);

		

		return $string;

	}

	

	function RutaPrimeraFotoAlbum($idAlbum){

	

	//String a devolver

		$string= '';

		

		$con = abrirBD();

		

		//Consultamos albumes de ese usuario

		$sql = "SELECT Fichero FROM Foto f WHERE f.Album = $idAlbum LIMIT 0 , 1";

		$res = @mysqli_query($con, $sql);

		$row = @mysqli_fetch_assoc($res);

		$string = $row['Fihero'];

		

		//Liberamos memoria y cerramos

		liberarMem($res);

		cerrarBD($con);

		

		return $string;

	}

	

?>

