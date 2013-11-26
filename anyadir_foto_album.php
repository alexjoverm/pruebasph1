<?php 
	require_once('inc/header.php'); 
	require_once('control_privado.php'); 
?>
<h3 class="titulo_3">Añadir Foto</h3>

<form action="#" method="post">

	<p>
		<label for="af_titulo">Titulo: </label><input class="input input_text" type="text" id="af_titulo" name="af_titulo" placeholder="Titulo..." autocomplete="on">
	</p>

	<p>
		<label for="af_desc">Fecha: </label><input class="input input_text" type="text" id="af_fecha" name="af_fecha" placeholder="DD/MM/AAAA" autocomplete="on">
	</p>

	<p>
		<label for="af_pais">Pais: </label>
		<select id="af_pais" name="af_pais">
			<?php echo selectPaises(); ?>
		</select>
	</p>
	
	<p>
		<label for="af_foto">Foto: </label><input class="input" type="file" id="af_foto" name="af_foto">
	</p>
	
	<p>
		<label for="af_album">Álbumes: </label>
		<select id="af_album" name="af_album">
			<?php echo selectAlbumes($user); ?>
		</select>
	</p>
	
	<p><input class="boton boton_primario" type="submit" value="Añadir"></p>
</form>


<?php require_once('inc/footer.php'); ?>