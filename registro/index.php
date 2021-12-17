<?php

  include_once 'operaciones.php';

  function checkbox(){
    $operaciones = new Operaciones;
    $operaciones->preferencias();
  }

 ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/registro.css">
    <title></title>
  </head>
  <body>
    <h2>Registro de usuario</h2>
    <form method="POST">
        <label for="nombre">Usuario</label>
        <input type="text" name="nombre" />

        <label for="correo">Correo</label>
        <input type="email" name="correo" />

        <label for="password">Contraseña</label>
        <input type="password" name="password" />

        <br />

        <label for="minijuego">Selecciona tu minijuego favorito</label>

        <br />

        <?php
          checkbox();
        ?>

        <input type="submit" name="enviar" value="Completar registro">

        <?php

          include_once 'operaciones.php';

          $operaciones = new Operaciones;

            if(isset($_POST["enviar"])){
              if(!strpos($_POST['correo'], "fundacionloyola")) {
                echo 'Este correo no es de la fundación.';
              }
              else
                $operaciones->registro($_POST["nombre"], $_POST["correo"], $_POST["password"]);
            }

         ?>
    </form>

    <p>Si ya tienes una cuenta puedes iniciar sesión</p>

    <a href="../inicio_sesion/inicio.php">Inicia sesión</a>

  </body>
</html>
