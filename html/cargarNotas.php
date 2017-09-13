<?php
	session_start();


	function carga(){
		$array=array();
		if(isset($_SESSION['loginOn'])){
			$DBconnection = mysqli_connect('127.0.0.1','root','','examen');
			$sql = "SELECT * FROM `notas` WHERE `iduser` = ".$_SESSION['id']." ";

			 $query = mysqli_query($DBconnection, $sql) or die("No se puede realizar la consulta");

			 mysqli_close($DBconnection);

			 if($query){
				$fila=0;
				$res =array();

				while($res = mysqli_fetch_array($query)){
					$array[0] = $res['idnota'];
					$array[1] = $res['iduser'];
					$array[2] = $res['titulo'];
					$array[3] = $res['contenido'];
					$array[4] = $res['color'];
					$array[5] = $res['rutaimg'];
				}
			}
		}
		return $array;
	}
?>