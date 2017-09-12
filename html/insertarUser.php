<?php
	session_start();
	$user = $_POST['user'];
	$pass = $_POST['psw'];

	 $DBconnection = mysqli_connect('127.0.0.1','root','','examen'); //Lleva a error  or die ();

	 $sql_num = "SELECT COUNT(*) FROM usuarios"; 

	 $query_num = mysqli_query($DBconnection, $sql_num);

	 mysqli_close($DBconnection);

	 if($query_num){
      	if(mysqli_num_rows($query_num)!==0){

        		/*$id =mysqli_fetch_object($query_num);
        		echo $id[0];*//*En el insert en lugar del 1 habria que poner le valor que devuelve sql_num*/

        		$DBconnection = mysqli_connect('127.0.0.1','root','','examen');
	 			$sql = "INSERT INTO `usuarios`(`iduser`, `contrasena`, `nombreuser`) VALUES ('1' , '".$user."','".$pass."')"; 
	 			$query = mysqli_query($DBconnection, $sql);

			mysqli_close($DBconnection);

     	//header("Location: index.php");
  	 }else{
  	 	header("Location: error.php?id=loginFail");
  	 }
    }/*Llevar a error*/


?>