

window.onload = function cargarEnumeradoColores(){
	/*Consulta que devuelva el enum*/
	array =["blanco", "naranja", "rojo", "amarillo", "gris", "azul", "verde"];
	for (i=0; i<array.length; i++){

		string = "<option value="+(i+1)+">"+array[i]+"</option>";
		$("#comboBox").append(string);
	}
};