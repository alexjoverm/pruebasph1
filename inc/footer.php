		</div>
	</section>


	<footer id="pie">
		<div id="pie_wrap" class="envoltura" >
			<div>Diseño y Desarrollo realizado por Alex Jover Morales y Jose Manuel Serrano</div>
			<div>Programación Hipermedia 1 (Ingenieria Multimedia)</div>
			<div id="pie_enlaces">
				<ul class="lista lista_horiz">
					<li <?php echo $arr_activo["index.php"]; ?>><a href="index.php">Inicio</a></li>
					<li <?php echo $arr_activo["buscar.php"]; ?>><a href="buscar.php">Busca</a></li>
					<li <?php echo $arr_activo["registro.php"]; ?>><a href="registro.php">Registro</a></li>
				</ul>
			</div>
		</div>
		<div class="linea">
			<div class="col1">
				<label for="estiloVisual">Estilo visual</label>
					<select class="input " name="estiloVisual" id="estiloVisual" onchange="guardar_estilo(this)">
					<option value="css/estilos.css css/bloques.css" selected>Estandar</option>
						<option value="css/accesibilidad.css">Accesibilidad</option>
						<option value="css/impresion.css">Impresión</option>
					</select>
			</div>
		</div>
	</footer>

</body>
</html>