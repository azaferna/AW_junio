<?php
	session_start();

	$user = $_POST['user'];
	$pass = $_POST['psw'];

	 $DBconnection = mysqli_connect('127.0.0.1','root','','examen'); //Lleva a error  or die ();

	 $sql = "SELECT nombreuser, contrasena
	 				 FROM usuarios
	 				 WHERE nombreuser = '".$user."'
	 				 AND  contrasena = '".$pass."'
	 				 "; 

	 $query = mysqli_query($DBconnection, $sql);

	 mysqli_close($DBconnection);

	 if($query){
      //cierre de conexión con BD

      //tratamiento de la query recibida
      if(mysqli_num_rows($query)!==0){
        $user_q=mysqli_fetch_object($query);
        $_SESSION['nick']=$user_q->nombreuser;
        $_SESSION['loginOn']=true;

     	header("Location: index.php");
  	 }else{
  	 	header("Location: error.php?id=loginFail");
  	 }
    }/*Llevar a error*/


?>