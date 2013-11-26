<?php require_once('inc/header.php'); 

if(isset($user){

?>

	<div class="linea">
		<div class="wrap_img">
			<div class="wrap_img_int_n">
				<img src="img/foto_detalle.jpg" alt="Imagen 1" class="img_responsiva">
			</div>
			<div class="wrap_img_texto">
				<p class="resaltado">Imagen 1</p>
				<p>España<br/>
				26-03-2013<br />
				
				<?php
					echo 'Id: '.$_GET["id"].' </p>'
				?>

			</div>
		</div>
	</div>

<?php 
}else{

echo 'Zona exclusiva para usuarios registrados.<br /> Para acceder, introduzca sus datos en la esquina superior derecha.';


}





require_once('inc/footer.php'); ?>