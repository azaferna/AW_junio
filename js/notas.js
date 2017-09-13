

window.onload = function cargarEnumeradoColores(){
	/*Consulta que devuelva el enum*/
	array =["blanco", "naranja", "rojo", "amarillo", "gris", "azul", "verde"];
	for (i=0; i<array.length; i++){

		string = "<option value="+(i+1)+">"+array[i]+"</option>";
		$("#comboBox").append(string);
	}
};

window.onload = function cargarNotas(){
	$.get("../html/cargarNotas.php", function (data, status){
		mostrarNotas(data);
	});
}

function mostrarNotas(notas){
	for (var i = 0; i < notas.length; i=i+6) {
		string=" <span>Titulo</span><p>"+notas[i+2]+"</p>" +
		"<span>Color</span><p>"+notas[i+4]+"</p>";

		$("#listaNotas").append(string);
	}

}