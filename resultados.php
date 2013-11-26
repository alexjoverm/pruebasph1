<?php require_once('inc/header.php'); ?>

	<div class="linea">
		<div class="col2">
			<?php
			$tit = $_POST["titulo"];
			if(!empty($tit)){
				$tit= ' para " <span style="color:white">'.$tit.'</span> "';
			}
			$fecha1 = $_POST["fecha1"];
			if(!empty($fecha1)){
				$fecha1= ' desde " <span style="color:white">'.$fecha1.'</span> "';
			}
			$fecha2 = $_POST["fecha2"];
			if(!empty($fecha2)){
				$fecha2= ' hasta " <span style="color:white">'.$fecha2.'</span> "';
			}
			$pais = $_POST["pais"];
			if(!empty($pais)){
				$pais= ' de " <span style="color:white">'.$pais.'</span> "';
			}

			$final = "".$tit."".$fecha1."".$fecha2."".$pais;

				echo '<h3 class="titulo_3"><span style="color:white">(<span id="num_resultados">5</span>)</span> Resultados de búsqueda'.$final.'</h3>';
			?>
		</div>
		<div class="col7">
			
		</div>
		<div class="col3">
			<div class="linea">
				<div class="col2">
					<label for="ordenar_por">Ordenar por</label>
						<select class="input " name="ordenar_por" id="ordenar_por" onchange="ordenar()">
						<option value="0" selected>Titulo</option>
							<option value="1">Pais</option>
							<option value="2">Fecha</option>
						</select>
				</div>
				<div class="col2">
					<label for="orden">En orden</label>
					<select class="input " name="orden" id="orden" onchange="ordenar()">
						<option value="0" selected>Ascendente</option>
						<option value="1">Descendente</option>
					</select>
				</div>
			</div>
		</div>
		
	</div>

	<div id="bloque_resultados" class="linea">
		<div>
			<div class="wrap_img col5 animacion_ordenar">
				<div class="wrap_img_int">
					<a href="detallefoto.php?id=1"><img src="img/foto1.jpe" alt="Imagen 1" class="preview"></a>
				</div>
				<div class="wrap_img_texto">
					<a href="detallefoto.php?id=1"><p class="resaltado"><span id="res1_titulo">Imagen 1</span></p></a>
					<p><span id="res1_pais">España</span><br/>
					<span id="res1_fecha">26-03-2013</span></p>
				</div>
			</div>
		</div>
		<div>
			<div class="wrap_img col5 animacion_ordenar">
				<div class="wrap_img_int">
					<a href="detallefoto.php?id=2"><img src="img/foto2.jpe" alt="Imagen2" class="preview"></a>
				</div>
				<div class="wrap_img_texto">
					<a href="detallefoto.php?id=2"><p class="resaltado"><span id="res2_titulo">Imagen 2</span></p></a>
					<p><span id="res2_pais">Nueva Zelanda</span><br/>
					<span id="res2_fecha">23-01-2013</span></p>
				</div>
			</div>
		</div>
		<div>
			<div class="wrap_img col5 animacion_ordenar">
				<div class="wrap_img_int">
					<a href="detallefoto.php?id=3"><img src="img/foto3.jpe" alt="Imagen3" class="preview"></a>
				</div>
				<div class="wrap_img_texto">
					<a href="detallefoto.php?id=3"><p class="resaltado"><span id="res3_titulo">Imagen 3</span></p></a>
					<p><span id="res3_pais">España</span><br/>
					<span id="res3_fecha">13-01-2013</span></p>
				</div>
			</div>
		</div>
		<div>
			<div class="wrap_img col5 animacion_ordenar">
				<div class="wrap_img_int">
					<a href="detallefoto.php?id=4"><img src="img/foto4.jpe" alt="Imagen4" class="preview"></a>
				</div>
				<div class="wrap_img_texto">
					<a href="detallefoto.php?id=4"><p class="resaltado"><span id="res4_titulo">Imagen 4</span></p></a>
					<p><span id="res4_pais">España</span><br/>
					<span id="res4_fecha">22-05-2013</span></p>
				</div>
			</div>
		</div>
		<div>
			<div class="wrap_img col5 animacion_ordenar">
				<div class="wrap_img_int">
					<a href="detallefoto.php?id=5"><img src="img/foto5.jpe" alt="Imagen5" class="preview"></a>
				</div>
				<div class="wrap_img_texto">
					<a href="detallefoto.php?id=5"><p class="resaltado"><span id="res5_titulo">Imagen 5</span></p></a>
					<p><span id="res5_pais">Irlanda</span><br/>
					<span id="res5_fecha">26-11-2012</span></p>
				</div>
			</div>
		</div>
	</div>

<?php require_once('inc/footer.php'); ?>