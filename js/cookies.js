/*  Funciones generales  */

function guardar_estilo(objeto){
	// Creamos o modificamos la cookie
	setCookie("estilo",objeto.value,365);
	cambiar_estilo(objeto.value.split(" "));
}

function cargar_estilo(){
	// Creamos o modificamos la cookie
	var estilo = getCookie("estilo").split(" ");
	if(estilo[0] != ""){
		var i = 0 , aux = document.getElementById("estiloVisual").children;
		cambiar_estilo(estilo);
		for(i = 0 ; i < aux.length ; i++ ) {
			if( aux[i].value.indexOf(estilo[0]) != -1){
				aux[i].selected = true;
				break;
			}
		}
	}
}

function cambiar_estilo(estilo){
	var i = 0, aux = i+1;
	for (var i = 0; i < 2; i++) {
		aux = i+1;
		if(i < estilo.length){
			document.getElementById('fuente_css'+aux).href = estilo[i];
		}
		else{
			document.getElementById('fuente_css'+aux).href = "";
		}
	}	
}


/* Funciones especificas */

// Funcion para crear una cookie, se le pasa el nombre, el valor y cuando expira.
function setCookie(c_name, value, expiredays) {
	var exdate = new Date();
	exdate.setDate(exdate.getDate() + expiredays);
	document.cookie = c_name + "=" + escape(value) +
	((expiredays == null) ? "" : ";expires="+ exdate.toGMTString());
}

// Funcion para obtener una cookie, se le pasa el nombre de la cookie.
function getCookie(c_name) {
	
	if(document.cookie.length > 0) {
		c_start = document.cookie.indexOf(c_name + "=");
	
		if(c_start != -1) {
			c_start = c_start + c_name.length + 1;
			c_end = document.cookie.indexOf(";", c_start);

			if(c_end == -1)
				c_end = document.cookie.length;

			return unescape(document.cookie.substring(c_start, c_end));
		}
	}

	return "";
}
//