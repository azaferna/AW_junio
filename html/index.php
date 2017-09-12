<?php
  session_start();
?>

<!DOCTYPE HTML>
<HTML>
   <HEAD>
      <script type="text/javascript" src="../js/notas.js"></script>
      <script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
   </HEAD>
   <BODY>
    <?php
      if(isset($_SESSION['loginOn'])){
       echo " <h1>Bienvenido ".$_SESSION['nick']."</h1>";
      }
      else{
        echo "<h1>Bienvenido a Notas UCM </h1>";
      }
    ?>
       <a href="login.php"><span>Login</span></a>

       <a href="registro.php"><span>Registro</span></a>

       <a href="logout.php"><span>LogOut</span></a>


       <?php
        if (isset($_SESSION['loginOn'])) {
         include 'notas.php';
        }
          
       ?>
   </BODY>
</HTML>     
