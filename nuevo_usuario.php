<?php require_once('inc/header.php'); ?>
				
	<div class="linea" style="text-align:center">
		<div class="col3"></div>
		<div class="col3"><h3 class="titulo_3">Inserción realizada, tus datos son: </h3></div>
		<div class="col3"></div>
	</div>

	<div class="linea">
	<div class="col5"></div>
	<div class="col5"></div>
	<?php
		echo '<div class="col5">
					<div class="linea">
						<div class="col2" style="text-align:left">
							<b><u>Nombre</u></b><br />';
							foreach($_POST as $nombre_campo => $valor){ 
						   		echo  '<br />'.$nombre_campo;  
							}
						echo '</div>
						<div class="col2">
							<b><u>Valor</u></b><br />';
							foreach($_POST as $nombre_campo => $valor){ 
						   		echo  '<br />'.$valor;  
							}
						echo "</div>
					</div>
			</div>";

	?>
	<div class="col5"></div>
	<div class="col5"></div>
	</div>

<?php require_once('inc/footer.php'); ?>