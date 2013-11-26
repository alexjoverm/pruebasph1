<?php 
	require_once('inc/header.php'); 
	require_once('control_privado.php'); 
?>
<h3 class="titulo_3">Nuevo Álbum</h3>

<form action="#" method="post">

	<p>
		<label for="ab_titulo">Titulo: </label><input class="input input_text" type="text" id="ab_titulo" name="ab_titulo" placeholder="Titulo..." autocomplete="on">
	</p>

	<p>
		<label for="ab_desc">Descripcion: </label><input class="input input_text" type="text" id="ab_desc" name="ab_desc" placeholder="Descripcion..." autocomplete="on">
	</p>

	<p>
		<label for="ab_fecha">Fecha: </label><input class="input input_text" type="text" id="ab_fecha" name="ab_fecha" placeholder="DD/MM/AAAA" autocomplete="on">
	</p>

	<p>
		<label for="ab_pais">Pais: </label>
		<select class="input " name="ab_pais" id="ab_pais">
			<?php echo selectPaises(); ?>
		</select>
	</p>
	

	<p><input class="boton boton_primario" type="submit" value="Crear"></p>
</form>


<?php require_once('inc/footer.php'); ?>