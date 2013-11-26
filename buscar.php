<?php require_once('inc/header.php'); ?>

	<h3 class="titulo_3">Buscar fotos</h3>
	
	<form action="resultados.php" method="post" class="centrar_texto">
		<div class="linea">
			<div class="col4">
				<label for="titulo">Título</label>
				<input class="input  input_text" id="titulo" type="text" name="titulo" autocomplete="on">
			</div>

			<div class="col2">
				<label for="fecha1">Fecha entre </label>
				<input class="input input_text fecha" type="text" id="fecha1" name="fecha1" placeholder="dd/mm/yyyy" pattern="(0?[1-9]|[12][0-9]|3[01])/(0?[1-9]|1[012])/(19|20)\d\d">
				
				<label for="fecha2" class="en_linea"> y </label>
				<input class="input input_text fecha" type="text" id="fecha2" name="fecha2" placeholder="dd/mm/yyyy" pattern="(0?[1-9]|[12][0-9]|3[01])/(0?[1-9]|1[012])/(19|20)\d\d">
			</div>

			<div class="col4">
				<label for="pais">Pais</label>
				<select class="input " name="pais" id="pais">
					<?php echo selectPaises(); ?>
				</select>
			</div>
		</div>
		<div class="linea ">
			<div class="col4"></div>
			<div class="col2"><input class="boton boton_primario boton_buscar" type="submit" value="Buscar"></div>
			<div class="col4"></div>
		</div>
	</form>

<?php require_once('inc/footer.php'); ?>