<?php
  session_start();
 ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      echo "<h1>Bienvenido a tu perfil, ".$_SESSION["nombre"]."</h1>";
     ?>
    <form method="post">
     <input type="submit" name="enviar" value="Cerrar sesión" />
    </form>
    <?php
      include_once '../registro/operaciones.php';

      $operaciones = new Operaciones;

      if(isset($_POST["enviar"])){
        $operaciones->cerrarSesion();
      }
    ?>
  </body>
</html>
