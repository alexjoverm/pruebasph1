/*  Funciones generales  */

// Funcion general para ordenar
function ordenar(){
	// Variable que contiene el numero de resultados a ordenar
	var num_res = document.getElementById("num_resultados").innerHTML;
	// Variable para ordenar; 0 por Titulo , 1 por Pais , 2 por Fecha
	var ordenar_por = document.getElementById("ordenar_por").value;
	// Variable para ordenar; 0 orden Ascendente , 1 orden Descendente
	var orden = document.getElementById("orden").value;

	var wrap_resultados = document.getElementById("bloque_resultados");

	// Variable con el contenido de los id.
	var resultados = wrap_resultados.children;

	//Ordenamos resultados, y los actualizamos
	var matriz = ordenar_resultados(resultados, ordenar_por, orden);
	actualizar_resultados(matriz,resultados);
}


//Crea una matriz donde se guardan los resultados ordenados
function ordenar_resultados(resultados, ordenar_por, orden){
	var matriz = new Array();
	var titulo,pais,fecha;

	//cogeremos el titulo, pais y fecha
	for(var i=0; i<resultados.length; i++){

		titulo = resultados[i].children[0].children[1].children[0].children[0].children[0].innerHTML;
		pais = resultados[i].children[0].children[1].children[1].children[0].innerHTML;
		fecha = resultados[i].children[0].children[1].children[1].children[2].innerHTML;

		matriz[i] = new Array(titulo, pais, fecha);
	}

	//ordenamos la matriz
	matriz.sort(function(a,b){
		if(ordenar_por==2){//si es fecha, hay que convertirla a numero para comparar
			//creamos fecha
			var fecha_orig0 = a[ordenar_por].split(/[-\/]/);
			var fecha_orig1 = b[ordenar_por].split(/[-\/]/);

			var fecha0 = new Date();
			fecha0.setFullYear(fecha_orig0[2]);
			fecha0.setMonth(fecha_orig0[1]-1);
			fecha0.setDate(fecha_orig0[0]);

			var fecha1 = new Date();
			fecha1.setFullYear(fecha_orig1[2]);
			fecha1.setMonth(fecha_orig1[1]-1);
			fecha1.setDate(fecha_orig1[0]);

			//cogemos el numero de la fecha en milisegundos
			var num0 = fecha0.getTime();
			var num1 = fecha1.getTime();

			return num0 < num1 ? -1 : num0 > num1 ?  1 : 0;
		}
		else //si es cadena, aplicamos comparaciones directamente
			return a[ordenar_por] < b[ordenar_por] ? -1 : a[ordenar_por] > b[ordenar_por] ?  1 : 0;
	});

	//si es en orden decreciente, le damos la vuelta
	if(orden==1)	
		matriz.reverse();

	return matriz;
}



//Hace la animacion y cambia los resultados
function actualizar_resultados(matriz,resultados){
	for (var i = 0; i < resultados.length; i++) {
		desvanecer(resultados[i].children[0]);
	};

	//cuando los div estan escondidos, actualizamos los resultados
	setTimeout(function(){
		crear_resultados(matriz,resultados);
	} , 600);
}



//Crea el HTML de los resultados dada una matriz ordenada de Titulo, Pais, Fecha
function crear_resultados(matriz,resultados){

	var titulo, pais, fecha;

	for (var i = 0; i < matriz.length; i++) {
		titulo = resultados[i].children[0].children[1].children[0].children[0].children[0];
		pais = resultados[i].children[0].children[1].children[1].children[0];
		fecha = resultados[i].children[0].children[1].children[1].children[2];

		titulo.innerHTML=matriz[i][0];
		pais.innerHTML=matriz[i][1];
		fecha.innerHTML=matriz[i][2];
	};
}


function aparecer(objeto){

	eliminar_clase(objeto,"activar_animacion")
}


function desvanecer(objeto){
	// Añadimos la clase que activa la animacion
	anadir_clase(objeto,"activar_animacion");

	// En 1 segundo llamamos a la funcion para reaparecer con los valores guardados.
	setTimeout(function(){aparecer(objeto)} , 600);
}