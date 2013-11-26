/**** REGEXP ******/

var regexp_login = "[A-z0-9]+";
var regexp_email = "^[A-z0-9._%+-]+@[A-z0-9.-]+\.[A-z]{2,4}$";
var regexp_usu = "^[A-z0-9]{3,15}$";
var regexp_pass = "(?=.*[0-9])(?=.*[A-z])^([0-9A-z]){6,15}$"; //Con lookahead comprobamos que tenga 1 num y 1 letra
var regexp_fecha = "(0?[1-9]|[12][0-9]|3[01])[/-](0?[1-9]|1[012])[/-](19|20)[0-9]{2}"; //Permitimos separar por - o /


/***** FUNCIONES AUXILIARES *****/

//Marcamos si es correcto o no el campo. Si es_pass es true
//cambiará el input type a text
function marcar_incorrecto(objeto, msg, es_pass){
	objeto.value = msg;
	eliminar_clase(objeto,"verde");
	anadir_clase(objeto,"rojo");

	if(es_pass===true)
		objeto.setAttribute("type","text");

	return false;
}

function marcar_correcto(objeto){
	eliminar_clase(objeto,"rojo");
	anadir_clase(objeto, "verde");

	return true;
}

// Comprueba si existe una clase
function pos_clase(objeto,clase){
	return objeto.className.indexOf(clase);
}

// Limpia el input cuando se hace focus
function limpiar_input(objeto,tipo){

	if(pos_clase(objeto,"verde") === -1){
		objeto.value = "";
		objeto.setAttribute("type",""+tipo);
	}
	eliminar_clase(objeto,"verde");
	eliminar_clase(objeto,"rojo");
}

// Añade la clase al objeto si no existe ya
function anadir_clase(objeto,clase){

	if(pos_clase(objeto,clase) === -1){
		objeto.className += " "+clase;
	}

}

// Elimina la clase al objeto si no existe ya
function eliminar_clase(objeto,clase){
	var cadenas = objeto.className.split(" ");
	var resultado = "";

	for (var i = 0; i < cadenas.length; i++) {
		if( cadenas[i] != clase){
			resultado += " " + cadenas[i];
		}	
	}

	resultado = resultado.substring(1);
	objeto.className = resultado;
}


/***** FUNCIONES DE COMPROBACION *****/

function comprobar_formulario(formu){

	var correcto=false, nombre_correcto = true,contrasena_correcta = true
	var contrasenas_iguales = true, email_correcto = true, fecha_correcta = true;

	// Se comprueban todas las partes idividuales, mostrando errores desde la funcion.
	nombre_correcto = comprobar_nombre(formu.reg_usu);
	contrasena_correcta = comprobar_contrasena(formu.reg_cont);
	contrasenas_iguales = comprobar_contrasenas_iguales(formu.reg_cont,formu.reg_cont2);
	email_correcto = comprobar_email(formu.reg_email);
	fecha_correcta = comprobar_fecha_nac(formu.reg_fecha);

	// Si todas son correctas, se devuelve true
	if(nombre_correcto && contrasena_correcta && contrasenas_iguales && email_correcto && fecha_correcta){
		correcto = true;
	}

	return correcto;
}

// validar formulario de login
function validar_login(formu){

	var correcto=false,usuario_correcto,pass_correcto;

	//Comprobamos usu y pass
	usuario_correcto=comprobar_usu_pass_login(formu.login_usu);
	pass_correcto=comprobar_usu_pass_login(formu.login_pass);

	if(usuario_correcto && pass_correcto)
		correcto=true;

	return correcto;
}


/****** FUNCIONES ESPECIFICAS DE COMPROBACION *****/

/** Para FORM DE LOGIN. ***/
function comprobar_usu_pass_login(obj_cadena)
{
	var reg = new RegExp(regexp_login);
	var correcto;

	if(reg.test(obj_cadena.value))
		correcto = marcar_correcto(obj_cadena);
	else
		correcto = marcar_incorrecto(obj_cadena,"No hay letras ni numeros",true);

	return correcto;
}


/*** Entre 3 y 15. solo numeros y letras. No vacio ***/
function comprobar_nombre(objeto_nombre){
	var reg = new RegExp(regexp_usu);
	var correcto;
	console.log(objeto_nombre.value);
	if(reg.test(objeto_nombre.value))
		correcto = marcar_correcto(objeto_nombre);
	else
		correcto = marcar_incorrecto(objeto_nombre,"Entre 3 y 15 num/letras",false);

	return correcto;
}


/*** Numero y letras. Entre 6 y 15. Al menos 1 numero, 1 letra en minuscula y 1 en mayuscula. No vacio ***/
function comprobar_contrasena(objeto_contrasena){
	var reg = new RegExp(regexp_pass);
	var correcto;

	if(reg.test(objeto_contrasena.value))
		correcto = marcar_correcto(objeto_contrasena);
	else
		correcto = marcar_incorrecto(objeto_contrasena,"Formato incorrecto",true);

	return correcto;
}

/*** Que sean iguales. No vacio ***/
function comprobar_contrasenas_iguales(objeto_contrasena,objeto_repeticion_contrasena){
	var correcto = true;

	if(objeto_contrasena.value != objeto_repeticion_contrasena.value)
		correcto = marcar_incorrecto(objeto_repeticion_contrasena,"No coinciden!",true);
	else
		correcto = marcar_correcto(objeto_repeticion_contrasena);
		

	return correcto;
}

/*** No vacio. El dominio principal debe estar entre 2 y 4 caracteres ***/
function comprobar_email(objeto_email){
	var reg = new RegExp(regexp_email);
	var correcto;

	if(reg.test(objeto_email.value))
		correcto = marcar_correcto(objeto_email);
	else
		correcto = marcar_incorrecto(objeto_email,"Formato email incorrecto",false);

	return correcto;
}

/*** Se comprueba la fecha si es correcta: meses entre 31 y 30, año bisiesto, etc.  ***/
function comprobar_fecha_nac(objeto_fecha){
	var reg = new RegExp(regexp_fecha);
	var correcto;

	if(reg.test(objeto_fecha.value))
		correcto = marcar_correcto(objeto_fecha);
	else
		correcto = marcar_incorrecto(objeto_fecha,"Formato fecha incorrecto",false);

	//si el formato es correcto, vamos a ver si la fecha es correcta
	if(correcto){
		var fecha = objeto_fecha.value.split(/[-\/]/);
		console.log(fecha);
		var fechaNueva = new Date();

		fechaNueva.setFullYear(fecha[2]);
		fechaNueva.setMonth(fecha[1]-1);
		fechaNueva.setDate(fecha[0]);

		if(!(fecha[2] == fechaNueva.getFullYear() && (fecha[1]-1) == fechaNueva.getMonth() && fecha[0] == fechaNueva.getDate()))
			correcto = marcar_incorrecto(objeto_fecha,"Esa fecha no existe",false);
	}

	return correcto;
}



