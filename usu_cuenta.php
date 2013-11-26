<?php 
	require_once('inc/header.php'); 
	require_once('control_privado.php'); 
?>

	<div class="linea">
		<h3 class="titulo_3">Mis datos</h3>
		<div class="col2">
			<p><span class="no_importante">Usuario:</span> <?php echo $user; ?>  <span></span> </p>
		</div>
		<div class="col2">
			<p><a href="crear_album.php">Crear álbum</a></p>
			<p><a href="#">Darme de baja</a></p>
		</div>
	</div>

	<hr>

	<div class="linea">
		<h3 class="titulo_3">Mis álbumes</h3>
	</div>
	

<?php require_once('inc/footer.php'); ?>