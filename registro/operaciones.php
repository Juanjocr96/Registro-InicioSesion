<?php

include_once 'conexion.php';

class Operaciones{

  function __construct(){
    $this->conexion = new Conexion;
  }

  function registro($nombre, $correo, $password){

    $consulta = "INSERT INTO `usuario` (`nombre`, `correo`, `password`)
                  VALUES ('".$nombre."', '".$correo."', '".$password."')";

    $this->conexion->realizarConsulta($consulta);

  }

  function preferencias(){

    $consulta = "SELECT * FROM minijuego";
    $resultado = $this->conexion->realizarConsulta($consulta);
		$numfila = $resultado->num_rows;

    if($numfila == 0){
			echo 'Filas no encontradas';
		}
    else{
      while($fila = $resultado->fetch_array(MYSQLI_ASSOC)){
				echo '<input type=checkbox value='.$fila["idMinijuego"].'/><label>'.$fila["nombre"].'</label>';
      }
    }
  }

  function inicioSesion($correo, $password){
    $consulta = "SELECT nombre, correo, password FROM usuario WHERE correo='".$correo."' AND password=".$password;
    $resultado = $this->conexion->realizarConsulta($consulta);
    $fila = $resultado->fetch_array(MYSQLI_ASSOC);
    $numfila = $resultado->num_rows;

    if($numfila > 0){
      session_start();
      $_SESSION["correo"] = $correo;
      $_SESSION["nombre"] = $fila["nombre"];
      header("Location: ../inicio_sesion/perfil.php");
    }
    else{
      return false;
    }
  }

  function cerrarSesion(){
    session_start();
    session_destroy();
    header("Location: ../inicio_sesion/inicio.php");
  }
}
?>
