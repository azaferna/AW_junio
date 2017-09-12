<!DOCTYPE HTML>
<HTML>
   <HEAD>
   </HEAD>
   <BODY>
    <h1>Datos del nuevo usuario</h1> 

    <a href="index.php"><span>Home</span></a>

    <form action="insertarUser.php" method="post">
  		<div class="container">
  			<label><b>Username</b></label>
    			<input type="text" name="user" required>
			
			<label><b>Password</b></label>
    			<input type="password" name="psw" required>

    		<button type="submit">Login</button>
  		</div>
	</form>
   </BODY>
</HTML>
