<?php require_once('inc/header.php'); 
		require_once('control_privado.php'); 

		$id_album = cleanQuery($_GET['id_album']);
		$nombre_album = '';
		$descrip_album = '';
		$existe_album = true;

		//Variables para el paginador
		$limite_pagina = 10;
		$pagina = (isset($_GET['pagina']) ? cleanQuery($_GET['pagina']) : 1);
		$pos_inicio = ($pagina-1) * $limite_pagina;
		$total_paginas = 1;
		$num_fotos = 0;

		//Creamos conexion
		$con = abrirBD();
		
		//Pedimos TITULO del album
		$sql = "SELECT Nombre,Descripcion FROM Album a WHERE a.IdAlbum = $id_album";
		$res = @mysqli_query($con, $sql);
		
		if(@mysqli_num_rows($res) > 0){
			$row = @mysqli_fetch_assoc($res);
			$nombre_album = $row['Nombre'];
			$descrip_album = $row['Descripcion'];

			//NUMERO DE PAGINAS
			$sql = "SELECT COUNT(*) AS cont FROM Foto f GROUP BY f.Album HAVING f.Album = $id_album";
			$res = @mysqli_query($con, $sql);
			$row = @mysqli_fetch_assoc($res);
			$num_fotos = $row['cont'];

			$total_paginas = ceil($num_fotos / $limite_pagina); //establecemos el numero de paginas (comenzando desde 1)

			//FOTOS, segun la pagina establecida
			$sql = "SELECT IdFoto, Titulo, Fecha, Fichero, p.Nombre as Pais FROM Foto f INNER JOIN Pais p ON f.Pais=p.IdPais WHERE f.Album = $id_album LIMIT $pos_inicio,$limite_pagina";
			$res = @mysqli_query($con, $sql);
		}
		else{
			$nombre_album = 'Este album no existe';
			$existe_album = false;
		}
			
		

		
?>
	<h3 class="titulo_3"><?php echo $nombre_album; ?></h3>
	<h4><?php echo $descrip_album; ?></h4>


<?php 	//MOSTRAMOS RESULTADOS
	if($existe_album){
		if($num_fotos > 0)
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

					echo <<<heredoc

						<div class="wrap_img col5">
							<div class="wrap_img_int">
								<a href="detallefoto.php?id={$row['IdFoto']}">
									<img src="{$row['Fichero']}" alt="{$row['Titulo']}" class="preview">
								</a>
							</div>
							<div class="wrap_img_texto">
								<a href="detallefoto.php?id={$row['IdFoto']}"><p class="resaltado">{$row['Titulo']}</p></a>
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
			echo '<h3 class="incorrecto"> No hay imagenes para este album </h3>';
	}

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