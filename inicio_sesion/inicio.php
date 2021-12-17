<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="../css/registro.css">
  </head>
  <body>
    <h2>Inicia sesión</h2>
    <form method="post">

      <label for="correo">Correo</label>
      <input type="text" name="correo" placeholder="Correo" />

      <label for="password">Contraseña</label>
      <input type="password" name="password" placeholder="Introduce contraseña" />

      <input type="submit" name="enviar" value="Iniciar sesión">

      <br />

      <?php

        include_once '../registro/operaciones.php';

        $operaciones = new Operaciones;

          if(isset($_POST["enviar"])){
             $resultado = $operaciones->inicioSesion($_POST["correo"], $_POST["password"]);
             if(!$resultado)
              echo '<p style="color: red;">Datos incorrectos</p>';
          }
      ?>

      <p>No tengo cuenta</p>

      <a href="../registro/index.php">Regístrate</a>

    </form>
  </body>
</html>
