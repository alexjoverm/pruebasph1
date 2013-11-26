<?php require_once('inc/header.php'); 
		require_once('control_privado.php'); 

		$id_Usu = $_SESSION['id'];

		//Variables para el paginador
		$limite_pagina = 10;
		$pagina = (isset($_GET['pagina']) ? cleanQuery($_GET['pagina']) : 1);
		$pos_inicio = ($pagina-1) * $limite_pagina;
		$total_paginas = 1;
		$num_albums = 0;

		//Creamos conexion
		$con = abrirBD();
		
		//NUMERO DE PAGINAS
		$sql = "SELECT COUNT(*) AS cont FROM Album a GROUP BY a.Usuario HAVING a.Usuario = $id_Usu";
		$res = @mysqli_query($con, $sql);
		$row = @mysqli_fetch_assoc($res);
		$num_albums = $row['cont'];

		$total_paginas = ceil($num_albums / $limite_pagina); //establecemos el numero de paginas (comenzando desde 1)

		//FOTOS, segun la pagina establecida
		$sql = "SELECT a.IdAlbum,a.Nombre,a.Descripcion, a.Fecha, p.Nombre as Pais FROM Album a INNER JOIN Pais p ON a.Pais=p.IdPais WHERE a.Usuario = $id_Usu LIMIT $pos_inicio,$limite_pagina";
		$res = @mysqli_query($con, $sql);

		
?>
	<h3 class="titulo_3">Mis Albumes</h3>


<?php 	//MOSTRAMOS RESULTADOS
		
		if($num_albums > 0)
		{
			//PAGINADOR
			crearPaginador($pagina,$total_paginas);

			$cont = 0;

			//FOTOS
			if(@mysqli_num_rows($res) > 0){
				echo '<div class="linea">';

				while($row = @mysqli_fetch_assoc($res)){

					if($cont > 0 && $cont % 5 == 0)
						echo '</div><div class="linea">';

					$numFotos = fotosEnAlbum($row['IdAlbum']);
					echo <<<heredoc

						<div class="wrap_img col3 fondo_album" style="background-image: url('img/foto2.jpe')">
							<div class="wrap_img_texto" style="opacity : 0.99;">
								<a href="ver_album.php?id_album={$row['IdAlbum']}"><p class="resaltado"><h2>{$row['Nombre']}</h2></p></a>
								<p><a href="ver_album.php?id_album={$row['IdAlbum']}">{$numFotos} fotos.</a></p>
								<p>{$row['Descripcion']}</p>
								<p>{$row['Pais']}<br/>
								{$row['Fecha']}</p>
							</div>
						</div>
heredoc;
					$cont++;
				}

				echo '</div>';
			}
		}
		else
			echo '<h3 class="incorrecto"> No tienes albums creados. </h3>';

	/*<div class="linea">
		<div class="wrap_img col5">
			<div class="wrap_img_int">
				<a href="detallefoto.php?id=1">
					<img src="img/foto1.jpe" alt="Imagen 1" class="preview">
				</a>
			</div>
			<div class="wrap_img_texto">
				<a href="detallefoto.php?id=1"><p class="resaltado">Imagen 1</p></a>
				<p>España<br/>
				26-03-2013</p>
			</div>
		</div>
	</div>*/
?>

<?php

//Liberamos memoria y cerramos
liberarMem($res);
cerrarBD($con);

require_once('inc/footer.php'); ?>