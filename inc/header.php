<?php
	session_start();
	header('Content-Type: text/html; charset=UTF-8');
	require_once("bd/consultas.php");
	require_once("inc/funciones.php");
	
	if( isset($_COOKIE["usuario"]) && !empty($_COOKIE["usuario"]) && !isset($_SESSION["usuario"]) ) {
		$_SESSION['id'] = encriptador($_COOKIE["id"],"5");
		$_SESSION["usuario"] = encriptador($_COOKIE["usuario"],"5");
		$_SESSION["usuario_time"] = $_COOKIE["usuario_time"];

	}
	
	if(isset($_SESSION["usuario"]))
		$user = $_SESSION["usuario"];

	//Array de elementos de listas de Menus
	$arr_activo = array(
		'index.php' => "",
		'buscar.php' => "",
		'registro.php' => "",
		'mis_albumes.php' => ""
		);

	//Buscamos si existe en la URI y le damos la clase active
	foreach ($arr_activo as $fichero => $value) {
		if(strpos($_SERVER['REQUEST_URI'], $fichero) !== false)
			$arr_activo[$fichero] = 'class="active"';
	}

?>
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
	<script src="js/ordenaciones.js"></script>
	<script src="js/comprobaciones.js"></script>
	<script src="js/cookies.js"></script>

	<title>Multi Media Mania</title>
</head>
<body onload="cargar_estilo()">
	<?php
		//Si hay un usuario registrado (luego habra que comprobarlo con $_SESSION)
		if( isset($user) ){
			$aux = $arr_activo['mis_albumes.php'];
			//Mostramos barra de menú
			echo <<<heredoc
	<div id="menu_user">
		<div class="envoltura">
			<div class="pri_col"><span class="span_menu">Bienvenido: <a href="usu_cuenta.php">$user</a></span></div>
			<div class="seg_col">
				<ul class="lista2">
					<li $aux><a href="mis_albumes.php">Mis álbumes</a></li>
					<li><a href="logout.php">Salir</a></li>
				</ul>
			</div>			
		</div>
	</div>
heredoc;
		}

	?>

	

	<header id="cabecera"<?php if(isset($_SESSION["usuario"])) echo " style=\"margin-top:50px;\"" ?>>
		<div id="cabecera_wrap" class="envoltura" >
			<div class="linea">
				<aside id="cab_logo" class="col3">
					<a href="index.php"><img class="img_responsiva" src="img/logo.png" alt="logo"></a>
				</aside>
				<aside id="cab_menu" class="col3">
					<nav>
						<ul class="lista lista_horiz lista_ilum">
							<li <?php echo $arr_activo["index.php"]; ?>><a href="index.php" >Inicio</a></li>
							<li <?php echo $arr_activo["buscar.php"]; ?>><a href="buscar.php">Buscar</a></li>
							<li <?php echo $arr_activo["registro.php"]; ?>><a href="registro.php">Registro</a></li>
						</ul>
					</nav>
				</aside>
				<aside id="cab_login" class="col3 ult_col" style="text-align:<?php echo (isset($_SESSION["usuario"])) ? 'center;' : 'right;'?>">
					<?php if( !isset($_SESSION["usuario"]) ){ ?>
					<form action="control.php" method="post" onsubmit="return validar_login(this)">
						<p>
							<label for="login_usu">Usuario: </label><input class="input  input_ini" id="login_usu" name="login_usu" type="text" autocomplete="on" onblur="comprobar_usu_pass_login(this)" onfocus='limpiar_input(this,"text")'>
						</p>
						<p>
							<label for="login_pass">Contraseña: </label><input class="input  input_ini" id="login_pass" name="login_pass" type="password" onblur="comprobar_usu_pass_login(this)" onfocus='limpiar_input(this,"password")'>
						</p>
						<p><label id="lab_log_rec" for="login_recordar"><input id="login_recordar" type="checkbox" name="login_recordar">Recordar</label>
						<input type="hidden" name="pagina" value="<?php echo $_SERVER['REQUEST_URI']; ?>" />
						<input class="boton boton_primario" type="submit" value="Entrar"></p>
					</form>
					<?php } else{ 

							$fecha = date("j F, Y, H:i:s",$_SESSION['usuario_time']);
							echo "<p>Bienvenido <a href=\"usu_cuenta.php\">$user</a> , <br /> tu último acceso fue $fecha.</p>";

							?>
						<a class ="boton boton_primario" href="usu_cuenta.php">Mi Perfil</a>
						<a class="boton boton_primario" href="logout.php">Salir</a>
					<?php } ?>
				</aside>
			</div>
		</div>
	</header>

	
	<section id="contenido">
		<div id="contenido_wrap" class="envoltura" >
		<?php
			if(isset($_GET['incorrecto']) ){ 
				if($_GET['incorrecto'] == -1)
					echo "<h3 class=\"incorrecto\"> El usuario no existe en la base de datos. </h3>";
				else
					echo "<h3 class=\"incorrecto\"> Contraseña incorrecta. </h3>";
			}
		?>