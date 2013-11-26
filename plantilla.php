<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Multi Media Mania te proporciona todo lo que se puede desear de red social de imagenes. Publica, comparte, visualiza, crea albums y vive estas experiencias y mas en MultiMediaMania">
	<link id="fuente_css1" href="css/estilos.css" rel="stylesheet" media="screen"/>
	<link id="fuente_css2" href="css/bloques.css" rel="stylesheet" media="screen"/>
	<link href="css/impresion.css" rel="stylesheet" media="print"/>
	<link href="css/accesibilidad.css" rel="alternate stylesheet" media="screen" title="Estilo alternativo de accesibilidad." />
	<script src="js/comprobaciones.js"></script>
	<script src="js/cookies.js"></script>

	<title>Multi Media Mania</title>
</head>
<body onload="cargar_estilo()">
	<header id="cabecera">
		<div id="cabecera_wrap" class="envoltura" >
			<div class="linea">
				<aside id="cab_logo" class="col3">
					<a href="index.php"><img class="img_responsiva" src="img/logo.png" alt="logo"></a>
				</aside>
				<aside id="cab_menu" class="col3">
					<nav>
						<ul class="lista lista_horiz lista_ilum">
							<li><a href="index.php" >Inicio</a></li>
							<li><a href="buscar.php">Buscar</a></li>
							<li><a href="registro.php">Registro</a></li>
						</ul>
					</nav>
				</aside>
				<aside id="cab_login" class="col3 ult_col derecha">
					<form action="#" method="post" onsubmit="return validar_login(this)">
						<p>
							<label for="login_usu">Usuario: </label><input class="input  input_ini" id="login_usu" name="login_usu" type="text" autocomplete="on" onblur="comprobar_usu_pass_login(this)" onfocus='limpiar_input(this,"text")'>
						</p>
						<p>
							<label for="login_pass">Contraseña: </label><input class="input  input_ini" id="login_pass" name="login_pass" type="password" onblur="comprobar_usu_pass_login(this)" onfocus='limpiar_input(this,"password")'>
						</p>
						<p><label id="lab_log_rec" for="login_recordar"><input id="login_recordar" type="checkbox" name="login_recordar">Recordar</label>
				
						<input class="boton boton_primario" type="submit" value="Entrar"></p>
					</form>
				</aside>
			</div>
		</div>
	</header>

	<section id="contenido">
		<div id="contenido_wrap" class="envoltura" >
		</div>
	</section>


	<footer id="pie">
		<div id="pie_wrap" class="envoltura" >
			<div>Diseño y Desarrollo realizado por Alex Jover Morales y Jose Manuel Serrano</div>
			<div>Programación Hipermedia 1 (Ingenieria Multimedia)</div>
			<div id="pie_enlaces">
				<ul class="lista lista_horiz">
					<li class="active"><a href="index.php">Inicio</a></li>
					<li><a href="buscar.php">Busca</a></li>
					<li><a href="registro.php">Registro</a></li>
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