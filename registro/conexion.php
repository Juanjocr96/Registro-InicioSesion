<?php
  class Conexion{
    function __construct(){
      $this->servidorbd = 'localhost';
      $this->usuario = 'root';
      $this->password = '';
      $this->basedatos = 'registro';

      $this->mysqli = new mysqli ($this->servidorbd, $this->usuario, $this->password, $this->basedatos);
    }

    function realizarConsulta($consulta){
      $resultado = $this->mysqli->query($consulta);
      echo $this->mysqli->error;
      return $resultado;
    }
  }
?>
