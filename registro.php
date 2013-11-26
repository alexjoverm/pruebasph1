<?php require_once('inc/header.php'); ?>

	<h3 class="titulo_3">Rellena el formulario y únete a nosotros</h3>
	<p class="cursiva">Los campos marcados con el símbolo <span class="resaltado">(*)</span> son obligatorios</p>

	<form action="nuevo_usuario.php" method="post" onsubmit="return comprobar_formulario(this)">
		

		<fieldset>
			<legend>Perfil</legend>
				<p>
					<label for="reg_usu">Usuario: </label><input class="input  input_text" type="text" id="reg_usu" name="reg_usu" placeholder="Nombre usuario..." autocomplete="on" onfocus='limpiar_input(this,"text")' onblur="comprobar_nombre(this)"><span class="resaltado"> *</span>
				</p>
				
				<p><label for="reg_cont">Contraseña: </label><input class="input  input_text" type="password" id="reg_cont" name="reg_cont" placeholder="XXXXXX"  onfocus='limpiar_input(this,"password")' onblur="comprobar_contrasena(this)"><span class="cursiva"><span class="resaltado"> *</span> La contraseña debe tener entre 6 y 15 caracteres(letras,numeros,barra baja _)</span></p>
				
				<p>
					<label for="reg_cont2">Repetir contraseña: </label><input class="input  input_text" type="password" id="reg_cont2" name="reg_cont2" onfocus='limpiar_input(this,"password")' onblur="comprobar_contrasenas_iguales(document.getElementById('reg_cont'),this)"><span class="resaltado"> *</span>
				</p>
				
				<p>
					<label for="reg_email">Email: </label><input class="input  input_text" type="text" id="reg_email" name="reg_email" placeholder="xxxxx@xxx.xx" autocomplete="on" onfocus='limpiar_input(this,"text")' onblur="comprobar_email(this)"><span class="resaltado"> *</span>
				</p>
				
				<p><label for="reg_foto">Foto de perfil: </label><input id="reg_foto" name="reg_foto" type="file"></p>
			
		</fieldset>
		
		<fieldset>
			<legend>Datos personales</legend>
				<p>
					<label for="reg_nombre">Nombre: </label><input class="input  input_text" type="text" id="reg_nombre" name="reg_nombre" placeholder="Nombre..." autocomplete="on">
				</p>
				
				<p>
					<label for="reg_apellidos">Apellidos: </label><input class="input  input_text" type="text" id="reg_apellidos" name="reg_apellidos" placeholder="Apellidos..." autocomplete="on">
				</p>
				
				<p><label for="hombre">Sexo: </label>
					<input id="hombre" type="radio" name="sexo" value="hombre" checked>Hombre
					<input type="radio" name="sexo" value="mujer">Mujer</p>
				
				<p>
					<label for="reg_fecha">Fecha de nacimiento: </label>
					<input class="input  input_text" type="text" id="reg_fecha" name="reg_fecha" placeholder="dd/mm/yyyy" onfocus='limpiar_input(this,"text")' onblur="comprobar_fecha_nac(this)"><span class="resaltado"> *</span>
				</p>
				
				
				<p><label for="ciudad">Ciudad: </label>
					<select class="input " name="ciudad" id="ciudad">
						<option value="Barcelona" selected>Barcelona</option>
						<option value="Alicante">Alicante</option>
						<option value="Murcia">Murcia</option>
						<option value="Albacete">Albacete</option>
					</select>
				</p>
				
				<p><label for="pais">Pais: </label>
					<select class="input " name="pais" id="pais">
						<?php echo selectPaises(); ?>
					</select>
				</p>
			
		</fieldset>


		
		
		<p><input class="boton boton_primario" type="submit" value="Enviar"></p>
	</form>

<?php require_once('inc/footer.php'); ?>