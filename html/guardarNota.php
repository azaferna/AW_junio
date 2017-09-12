<?php
	session_start();

	$titulo = $_POST['titulo'];
	$color = $_POST['color'];
	$texto = $_POST['texto'];
	echo "titulo".$titulo;
	echo "  color".$color;
	echo "  text".$texto;

	 $DBconnection = mysqli_connect('127.0.0.1','root','','examen'); //Lleva a error  or die ();
	 /*id de la nota cargando numero de notas del usuarioX*/

	 $sql = "INSERT INTO `notas`(`idnota`, `iduser`, `titulo`, `contenido`, `color`, `rutaimg`) VALUES ('1','".$_SESSION['nick']."
	 ','".$titulo."','".$texto."','".$color."','abc' )";

	 $query = mysqli_query($DBconnection, $sql);
	 mysqli_close($DBconnection);


    /*Llevar a error*/


?>