<?php
	session_start();

	$error = $_GET['id'];

	if( $error == "loginFail"){
		echo "<h2>ERROR: USUARIO o CONTRASEÑA incorrectos</h2>";
		echo "<a href='login.php'><span>Login</span></a>";
	}

?>